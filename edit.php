<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Atualizar dados</h1>

            <form action="<?=$BASE_URL?>config/process.php" method="POST" id="create-form">

                <input type="hidden" name="type" value="edit">
                <input type="hidden" name="id" value="<?= $contact['id'] ?>">


                <div class="form-group">
                    <label for="name">Nome do tutor:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do tutor" value="<?= $contact['name'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" value="<?= $contact['phone'] ?>"required>
                </div>
                <div class="form-group">
                    <label for="animal">Nome Animal:</label>
                    <input type="text" class="form-control" id="animal" name="animal" placeholder="Digite o nome do animal"  value= "<?= $contact['animal'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="date">Data da consulta:</label>
                    <input type="text" class="form-control" id="date" name="data" placeholder="Insira a data da consulta" value ="<?= $contact['day'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="hour">Hora da consulta:</label>
                    <input type="text" class="form-control" id="hour" name="hour" placeholder="Insira o horario da consulta" <?= $contact['hour'] ?> required>
                </div>
                <div class="form-group">
                    <label for="observation">Observações:</label>
                    <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Insira alguma observação" <?= $contact['observation'] ?> rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>

        
    </div>


<?php
    include_once("templates/footer.php");
?>