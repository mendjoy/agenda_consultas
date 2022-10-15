<?php
    include_once("templates/header.php");
    include_once("config/process.php");
?>
    <div class="container" id="view-contact-container">

        <?php include_once("templates/backbtn.html"); ?>

        <h1 id="main-title"><?=$contact["name"]?></h1>

        <p class="bold">Telefone:</p>
        <p><?=$contact["phone"]?></p>

        <p class="bold">Animal:</p>
        <p><?=$contact["animal"]?></p>

        <p class="bold">Data da consulta:</p>
        <p><?=$contact["date"]?></p>

        <p class="bold">Observações:</p>
        <p><?=$contact["observations"]?></p>
    </div>

<?php
    include_once("templates/footer.php");
?>

    
    