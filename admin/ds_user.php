<?php
include("../lib/user.php");
$user=new User();
$ds_user=$user->Doc_tat_ca_user();

$view="views/users/v_ds_user.php";
include("templates/layout.php");
?>