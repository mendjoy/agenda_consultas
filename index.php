<?php
    include_once("templates/header.php");
    include_once("config/process.php");
    
?>

    <div class="container">

        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?=$printMsg?></p>
        <?php endif;?>

        <h1 id="main-title">Agenda de consultas</h1>
        
        <!--Verifica se há dados no banco e mostra na tela-->
        <?php if(count(($contacts))> 0):?>
            <table class="table" id="contacts-table">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Tutor</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Data</th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach($contacts as $contact) : ?>
                        <tr>
                            <td scope="row" class="col-id"><?= $contact["id"]?></td>
                            <td scope="row"><?= $contact["name"]?></td>
                            <td scope="row"><?= $contact["phone"]?></td>
                            <td scope="row"><?= $contact["animal"]?></td>
                            <td scope="row"><?= $contact["day"]?></td>
                            <td class="actions">
                                <a href="<?=$BASE_URL?>show.php?id=<?= $contact["id"]?>"><i class="fas fa-eye check-icon"></i></a>
                                <a href="<?= $BASE_URL ?>edit.php?id=<?= $contact["id"] ?>"><i class="far fa-edit edit-icon"></i></a> 

                                <form class="delete-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
                                    <input type="hidden" name="type" value="delete">
                                    <input type="hidden" name="id" value="<?= $contact["id"] ?>">
                                    <button type="submit" class="delete-btn"><i class="fas fa-times delete-icon"></i></button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p id="empty-list-text">Ainda não há dados na agenda
                <a href="<?=$BASE_URL?>create.php">Clique aqui para adicionar</a>.
            </p>
        <?php endif;?>
    </div>

<?php
    include_once("templates/footer.php");
?>

    
    
    
    
