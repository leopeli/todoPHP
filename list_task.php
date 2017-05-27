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
				<input type="hidden" name="id" value="<?= $task['id'] ?>">
				<input type="checkbox" name="status" onclick="$('#task-<?= $task['id'] ?>-form').submit()">
			</form>

			<?php
			if ($task['status'] == 2) {
			?>
				<form method="POST" action="change_description.php">
				<input type="hidden" name="id" value="<?= $task['id'] ?>">
				<input type="submit" name="update_task" value="Alterar">
				<input type="text" readonly="true" name="description" value="<?= $task['description'] ?>" >

			</form>
			<?php
			}
			else {
			?>
				<form method="POST" action="change_description.php">
					<input type="hidden" name="id" value="<?= $task['id'] ?>">
					<input type="submit" name="update_task" value="Alterar">
					<input type="text" name="description" value="<?= $task['description'] ?>" >
				</form>
			<?php
			}
			?>
			<form method="POST" action="remove_task.php">
				<input type="hidden" name="id" value="<?= $task['id'] ?>">
				<button type="submit" value="Fechar" class="glyphicon glyphicon-remove btn btn-default">
			</form>

		</div>

	<?php
	}
	?>
