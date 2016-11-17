<?php 
$con = mysqli_connect("localhost","root","") or die("Não foi possível conectar ao banco de dados.");
mysqli_select_db("cadastro", $con) or die("Banco de dados não localizado.");
 ?>