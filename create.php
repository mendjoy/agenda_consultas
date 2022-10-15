<?php
    include_once("templates/header.php");
?>

    <div class="container">
        <?php include_once("templates/backbtn.html"); ?>
        <h1 id="main-title">Adicionar dados</h1>

            <form action="<?=$BASE_URL?>config/process.php" method="POST" id="create-form">

                <input type="hidden" name="type" value="Create">
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
                    <label for="data">Data da consulta:</label>
                    <input type="date" class="form-control" id="data" name="data"  required>
                </div>
                <div class="form-group">
                    <label for="observation">Observações:</label>
                    <textarea type="text" class="form-control" id="observation" name="observation" placeholder="Insira alguma observação" rows="3"></textarea>
                </div>
                <button type="submit" class="btn-btn-primary" >Cadastrar</button>
            </form>

        
    </div>


<?php
    include_once("templates/footer.php");
?>