<?php
	include_once("manager_task.php");

	$description = $_POST['description'];
	$status = 1;
	new_task($description, $status);
	header('Location: index.php');