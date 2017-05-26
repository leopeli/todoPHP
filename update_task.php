<?php
	include_once("manager_task.php");

	$id = $_POST['id'];
	$description = $_POST['description'];
	change_task($id, $description);
	header('Location: index.php');