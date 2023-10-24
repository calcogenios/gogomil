<?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(E_ALL);
$dbHost = 'localhost';
$dbUsername ='root';
$dbPassword ='707594Mic';
$dbName = 'danidani606';

$conexao =  mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);




// if($conexao->connect_errno)
//{
  //  echo "Erro";
 //}
//else
//{
  //  echo "deu certo";
//}

?>