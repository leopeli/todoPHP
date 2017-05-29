<?php
include_once("connection.php");

function new_task($description, $status) {
	global $connect_todo;
	$new_task_query = "INSERT INTO task (description, status) values ('$description', $status)";
	$insert_task = mysqli_query($connect_todo, $new_task_query);
	return $insert_task;
}

function task_list() {
	global $connect_todo;
	$all_tasks = array();
	$task_list_query = mysqli_query($connect_todo, "SELECT id, description, status FROM task");
	while ($task = mysqli_fetch_assoc($task_list_query)) {
		array_push($all_tasks, $task);
	}
	return $all_tasks;
}

function remove_task($id) {
	global $connect_todo;
	$remove_task_query = "DELETE FROM task WHERE id = $id";
	mysqli_query($connect_todo, $remove_task_query);
}

function change_status($id, $status, $toggle){
	global $connect_todo;
	$change_status_query = "UPDATE task SET status = $toggle WHERE id = $id";
	$change_status = mysqli_query($connect_todo, $change_status_query);
	return $change_status;
}

function change_task($id, $description) {
	global $connect_todo;
	$change_task_query = "UPDATE task SET description = '{$description}' WHERE id = {$id}";
	return mysqli_query($connect_todo, $change_task_query);
}

function remove_inative_tasks() {
	global $connect_todo;
	$remove_inative_tasks_query = "DELETE FROM task WHERE status = 2";
	mysqli_query($connect_todo, $remove_inative_tasks_query);
}