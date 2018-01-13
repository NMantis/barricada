<?php
include 'SecureLogin/includes/db_connect.php';
include 'SecureLogin/includes/functions.php';

sec_session_start();


if (login_check($mysqli) == false) 
{
	header("Location: login.php");
	die();
}

?>