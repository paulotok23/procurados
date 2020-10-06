<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "loginproc";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
   die('Erro ao Conectar:' .mysql_error()); 
}
?>