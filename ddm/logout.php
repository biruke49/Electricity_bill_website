<?php
session_start();
if (session_destroy()) {
	header("location:http://localhost:8080/ddm/login.php");
}
?>