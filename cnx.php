<?php


$prod="root";
$mdp="";
$db="ajouterproduit";
$server="localhost";


$link=mysqli_connect($server,$prod,$mdp,$db);

if($link){

//echo "connexion etablier";
}else
{

die(mysqli_connect_error());
}
?>