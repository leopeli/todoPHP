<?php
	include_once("manager_task.php");

	$id = $POST['id'];
	$status = $_POST['status'];
	change_task($id, $status);
	header('Location: index.php');