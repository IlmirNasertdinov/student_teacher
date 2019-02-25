<?php require_once('database.php');
$sqlst = "SELECT id, name, surname, patronymic FROM student";
$stmst=$conn->prepare($sqlst);
$stmst->execute();
$arrst = $stmst -> fetchAll(PDO::FETCH_ASSOC);
$conn = null;
$sendmas = array();
foreach($arrst as $v){
    $sendmas[]='<li><a target="_blank" rel="nofollow noopener" href="student.php?id='.$v['id'].'">'.$v['name'].' '.$v['surname'].' '.$v['patronymic'].'</a></li>';
}
$sendmasstr = implode('',$sendmas);
echo $sendmasstr; 