<?php 

$host = "localhost";
$dbname = "otlist";
$login = "root";
$password = "";

// $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname.','.$login.','.$password.'');
$pdo = new PDO("mysql:host=localhost;dbname=otlist","root","");
if(!$pdo){
	die("erro na conexao");
}

?>