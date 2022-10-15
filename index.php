<?php
    include_once("templates/header.php");
    include_once("config/connection.php");
?>

    <div class="container">

        <?php if(isset($printMsg) && $printMsg != ''):?>
            <p id="msg"><?=$printMsg?></p>
        <?php endif;?>

        <h1 id="main-title">Agenda de consultas</h1>
        <?php if(count(($contacts))> 0):?>
            <p>Tem contatos</p>
        <?php endif;?>

    </div>

<?php
    include_once("templates/footer.php");
?>

    
    
    
    
