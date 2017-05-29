<?php

	include_once("manager_task.php");

	$id = $_POST['id'];
	remove_inative_description($id);
	header('Location: index.php');