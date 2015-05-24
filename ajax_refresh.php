<?php
// PDO connect *********
function connect() {
    return new PDO('mysql:host=localhost;dbname=project', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}

$pdo = connect();
$keyword = '%'.$_POST['keyword'].'%';
$sql = "SELECT * FROM form WHERE uname LIKE (:keyword) ORDER BY uname ASC LIMIT 0, 10";
$query = $pdo->prepare($sql);
$query->bindParam(':keyword', $keyword, PDO::PARAM_STR);
$query->execute();
$list = $query->fetchAll();
foreach ($list as $rs) {
	// put in bold the written text
	$uname = str_replace($_POST['keyword'], '<b>'.$_POST['keyword'].'</b>', $rs['uname']);
	// add new option
    echo '<li onclick="set_item(\''.str_replace("'", "\'", $rs['uname']).'\')">'.$uname.'</li>';
}
?>