<?php
	include_once("manager_task.php");

	$id = $_POST ['id'];
	$status = $_POST['status'];
	$toggle = ($task['status'] == $status) ? false : 1;
	change_status($id, $status, $toggle);
	header('Location: index.php');