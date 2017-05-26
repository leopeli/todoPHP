<?php
	include_once("manager_task.php");

	?>

	<?php
	$listagem = task_list();
	$count = 0;
	foreach ($listagem as $task) {
		if ($task['status'] == 2) {
			$count++;
		}
		?>
		<div id="task-<?= $task['id'] ?>" class="status-<?= $task['status'] ?>">
			<form id="task-<?= $task['id'] ?>-form" method="POST" action="change_status.php">
				<input type="checkbox" name="status" onclick="$('#task-<?= $task['id'] ?>-form').submit()">
			</form>
			<form>
				<input type="text" name="description" value="<?= $task['description'] ?>" >
			</form>
			<form method="POST" action="update_task.php">
				<input type="submit" name="update_task" value="Alterar">
			</form>

			<form method="POST" action="remove_task.php">
				<input type="hidden" name="id" value="<?= $task['id'] ?>">
				<input type="submit" value="Fechar">
			</form>
		
		</div>
		
	<?php
	}
	?>