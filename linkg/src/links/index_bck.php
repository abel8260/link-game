<?php

session_start(); 
include('../../bd/conexao.php');

$_SESSION["link_re"] =$_POST["link_re"];
$_SESSION["selecttipo"] =$_POST["selecttipo"];
$_SESSION["selectschedule"] =$_POST["selectschedule"];
$_SESSION["selectcont"] =$_POST["selectcont"];



$link_re =$_POST["link_re"];
$selecttipo =$_POST["selecttipo"];
$selectschedule=$_POST["selectschedule"];
$selectcont =$_POST["selectcont"];



 




  $sql988=$pdo->prepare("INSERT INTO links (id, chars, selecttipo, selectschedule, selectcont) VALUES ( NULL,'$link_re', '$selecttipo', '$selectschedule', '$selectcont');");

$sql988->execute();

echo $sql988 ->rowCount();
  var_dump($sql988); 
$row8 = $sql988 ->rowCount();





header("location:../menu/index.php"); 


?>