<?php
include ("helpers/db_fncs.php");
$conn=getConn();
include("models/login-data.php");
$conn=NULL;
include("views/register-user.php")
?>