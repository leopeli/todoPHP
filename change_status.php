<?php
	include_once("manager_task.php");
	include_once("constants.php");
	$id = $_POST['id'];
	$status = $_POST['status'];
	$toggle = $status == STATUS_ATIVO ? STATUS_CONCLUIDO : STATUS_ATIVO;
	change_status($id, $toggle);
	header('Location: index.php');