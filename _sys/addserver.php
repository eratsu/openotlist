 <?php
$name = $_POST['name'];
$ip = $_POST['ip'];
$site = $_POST['site'];
$exp = $_POST['exp'];

 $executa = $pdo->query("INSERT INTO servers(id,name,ip,site,exp) VALUES ('','$name','$ip','$site','$exp')");
   if($executa){
      echo 'Servidor cadastrado com sucesso!';
   }
   else{
      print_r($pdo->errorInfo());
   }
?>