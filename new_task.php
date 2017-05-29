<?php
	include_once("manager_task.php");
	include_once("constants.php");

	$description = $_POST['description'];
	$status = STATUS_ATIVO;
	new_task($description, $status);
	header('Location: index.php');