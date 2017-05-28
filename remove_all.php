<?php

	include_once("manager_task.php");

	$id = $_POST['id'];
	remove_inative_tasks($id);
	header('Location: index.php');