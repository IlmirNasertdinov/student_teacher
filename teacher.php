<?php 
if(!empty($_GET['id'])){
    if(filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT)){
        require_once('helpers/database.php'); 
        $sqlst = "SELECT name, surname, patronymic FROM teacher WHERE id = :id";
        $stmst=$conn->prepare($sqlst);
        $stmst->bindParam(':id',$_GET['id'],PDO::PARAM_INT);
        $stmst->execute();
        $strst = $stmst -> fetch(PDO::FETCH_ASSOC);
        $conn = null; ?>
        <!DOCTYPE html>
        <html lang="ru">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title><?php echo $strst['name'].' '.$strst['surname'].' '.$strst['patronymic']; ?> </title>
        </head>
        <body>
            <h1><?php echo $strst['name'].' '.$strst['surname'].' '.$strst['patronymic']; ?></h1>
        </body>
        </html>
    <?php 
    }
}