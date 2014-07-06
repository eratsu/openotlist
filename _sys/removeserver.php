 <?php

$ip = $_REQUEST['ip'];


$sqlrow = "DELETE FROM servers WHERE ip='".$_GET['ip']."'";
 $executa = $pdo->query($sqlrow);
   if($executa){
      echo 'Servidor <b>'. $_GET['ip'] .'</b> removido com sucesso!';
   }
   else{
      print_r($pdo->errorInfo());
   }

?>		