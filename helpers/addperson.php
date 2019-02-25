<?php
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $status=(int)htmlspecialchars(trim($_POST['status']));
    $name=htmlspecialchars(trim($_POST['name']));
    $surname=htmlspecialchars(trim($_POST['surname']));
    $patronymic=htmlspecialchars(trim($_POST['patronymic']));
	if(($name!=='')&&($surname!=='')&&($patronymic!=='')&&(($status===1)||($status===2))){    
        require_once('database.php');        
        if($status===1){
            $sqli="INSERT INTO student (name, surname, patronymic) VALUES (:n, :s, :p)";
            $stmt=$conn->prepare($sqli);
            $stmt->bindParam(':n',$name,PDO::PARAM_STR);
            $stmt->bindParam(':s',$surname,PDO::PARAM_STR);
            $stmt->bindParam(':p',$patronymic,PDO::PARAM_STR);
            $stmt->execute();
            echo 'Ученик '.$name.' '.$surname.' '.$patronymic.' добавлен';
        } else {
            $sqli="INSERT INTO teacher (name, surname, patronymic) VALUES (:n, :s, :p)";
            $stmt=$conn->prepare($sqli);
            $stmt->bindParam(':n',$name,PDO::PARAM_STR);
            $stmt->bindParam(':s',$surname,PDO::PARAM_STR);
            $stmt->bindParam(':p',$patronymic,PDO::PARAM_STR);
            $stmt->execute();
            echo 'Учитель '.$name.' '.$surname.' '.$patronymic.' добавлен';
        }
    }        
}