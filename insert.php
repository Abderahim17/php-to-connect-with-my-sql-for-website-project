<?php

include "cnx.php";

if(isset($_POST["Ref"]) && isset($_POST["Des"]) && isset($_POST["Prix"]) && isset($_POST["Que"]) && isset($_POST["Pro"]))


{
	
   $Ref= $_POST["Ref"];
   $Des= $_POST["Des"];
   $Prix= $_POST["Prix"];
   $Que= $_POST["Que"];
   $Pro= $_POST["Pro"];

  //$req= mysqli_query($link , "insert into `prod` (`ref`, `designe`, `prix`, `quentite`, `promo`) values (\"$Ref\",\"$Des\",\"$Prix\",\"$Que\",\"$Pro\")");

$req="insert into `prod` (`ref`, `designe`, `prix`, `quentite`, `promo`) values (\"$Ref\",\"$Des\",\"$Prix\",\"$Que\",\"$Pro\")";
if($link->query($req))
{
echo"insertion effectuee";
}
else
{
echo"erreur D'insertion";
}



}




?>