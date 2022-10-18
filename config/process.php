<?php

session_start();

include_once("connection.php");
include_once("url.php");


$data = $_POST;

// modificar o banco 
if(!empty($data)) {


  // Criar contato
  if($data["type"] === "create") {

    $name = $data["name"];
    $phone = $data["phone"];
    $animal = $data["animal"];
    $observations = $data["observations"];
    $day = $data["day"];
    $hour = $data["hour"];

    $query = "INSERT INTO contacts (name, phone,animal,  observations, day, hour) VALUES (:name, :phone, :animal, :observations, :day, :hour)";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":animal", $animal);
    $stmt->bindParam(":observations", $observations);
    $stmt->bindParam(":day", $day);
    $stmt->bindParam(":hour", $hour);

    
    try {
      $stmt->execute();
      $_SESSION["msg"] = "Contato criado com sucesso!";
  
    } catch(PDOException $e) {
      // erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }


  } else if($data["type"] === "edit") {

    $name = $data["name"];
    $phone = $data["phone"];
    $animal = $data["animal"];
    $observations = $data["observations"];
    $day = $data["day"];
    $hour = $data["hour"];
    $id = $data["id"];

    $query = "UPDATE contacts 
              SET name = :name, phone = :phone, animal = :animal, observations = :observations, day = :day, hour = :hour
              WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":name", $name);
    $stmt->bindParam(":phone", $phone);
    $stmt->bindParam(":animal", $animal);
    $stmt->bindParam(":observations", $observations);
    $stmt->bindParam(":day", $day);
    $stmt->bindParam(":hour", $hour);
    $stmt->bindParam(":id", $id);

    try {

      $stmt->execute();
      $_SESSION["msg"] = "Contato atualizado com sucesso!";
  
    } catch(PDOException $e) {
      // erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  } else if($data["type"] === "delete") {

    $id = $data["id"];

    $query = "DELETE FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);
    
    try {

      $stmt->execute();
      $_SESSION["msg"] = "Contato removido com sucesso!";
  
    } catch(PDOException $e) {
      // erro na conexão
      $error = $e->getMessage();
      echo "Erro: $error";
    }

  }

  // Redirecionar para home
  header("Location:" . $BASE_URL . "../index.php");

// SELEÇÃO DE DADOS
} else {
  
  $id;

  if(!empty($_GET)) {
    $id = $_GET["id"];
  }

  // Retorna o dado de um contato
  if(!empty($id)) {

    $query = "SELECT * FROM contacts WHERE id = :id";

    $stmt = $conn->prepare($query);

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $contact = $stmt->fetch();

  } else {

    // Retorna todos os contatos
    $contacts = [];

    $query = "SELECT * FROM contacts";

    $stmt = $conn->prepare($query);

    $stmt->execute();
    
    $contacts = $stmt->fetchAll();

  }

}

// Fechando conexão 
$conn = null;

?>