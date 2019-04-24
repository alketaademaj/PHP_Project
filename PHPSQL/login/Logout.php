<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
	header("Location: ../WebPage.php"); // Redirecting To Home Page
}
?>
