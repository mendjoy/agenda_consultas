<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Adicionar dados</h1>

            <form action="<?=$BASE_URL?>config/process.php" method="POST" id="create-form">

                <input type="hidden" name="type" value="create">
                <div class="form-group">
                    <label for="name">Nome do tutor:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do tutor" required>
                </div>

                <div class="form-group">
                    <label for="phone">Telefone:</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Digite o telefone" required>
                </div>
                <div class="form-group">
                    <label for="animal">Nome Animal:</label>
                    <input type="text" class="form-control" id="animal" name="animal" placeholder="Digite o nome do animal" required>
                </div>
                <div class="form-group">
                    <label for="day">Data da consulta:</label>
                    <input type="text" class="form-control" id="day" name="day" placeholder="Insira a data da consulta"  required>
                </div>
                <div class="form-group">
                    <label for="hour">Hora da consulta:</label>
                    <input type="text" class="form-control" id="hour" name="hour" placeholder="Insira o horario da consulta" required>
                </div>
                <div class="form-group">
                    <label for="observations">Observações:</label>
                    <textarea type="text" class="form-control" id="observations" name="observations" placeholder="Insira alguma observação" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>

        
    </div>


<?php
    include_once("templates/footer.php");
?>