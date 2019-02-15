<?php
global $securesecretvar;  
 $securesecretvar = $_POST["vpc_SecureHashNew"];
echo $securesecretvar;
include("PHP_VPC_3DS 2.5 Party_DO.php");
include("PHP_VPC_3DS 2.5 Party_DR.php");
?>
