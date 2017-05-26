<?php

	include_once("manager_task.php");

	$id = $_POST['id'];
	remove_task($id);
	header('Location: index.php');