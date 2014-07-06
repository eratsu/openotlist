<?php 

$host = "localhost";
$dbname = "otlist";
$login = "root";
$password = "guilazx123";

// $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.','.$login.','.$password.'');
$pdo = new PDO("mysql:host=localhost;dbname=otlist","root","guilazx123");
if(!$pdo){
	die("erro na conexao");
}

?>