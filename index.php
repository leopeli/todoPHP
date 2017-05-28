<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema ToDo - Leonidas Peligrineli</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/todo.css">
	
</head>
<div>
	<body class="base container">
		<header class="header">
			<h1 class="title">To Do's</h1>
		</header>
		<main class="all-content">
			<form method="POST" action="new_task.php" class="description">
				<input type="list" name="description" class="form-control" placeholder="O que precisa fazer?">
			</form>
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
				<div id="task-<?= $task['id'] ?>" class="status-<?= $task['status'] ?> task_list">


					<form method="POST" action="change_description.php" class="task-form">
						<input type="hidden" name="id" value="<?= $task['id'] ?>">

						<input type="text" name="description" value="<?= $task['description'] ?>" class="form-control task-form">

						<input type="submit" name="update_task" value="Alterar" class="btn btn-warning task-form">

					</form>
					<form id="task-<?= $task['id'] ?>-form" method="POST" action="change_status.php" class="task-form">
						<input type="hidden" name="id" value="<?= $task['id'] ?>">
						<input type="submit" name="status" onclick="$('#task-<?= $task['id'] ?>-form').submit()" value="Concluido" class="btn btn-success">
					</form>

					<form method="POST" action="remove_task.php" class="task-form">
						<input type="hidden" name="id" value="<?= $task['id'] ?>">
						<input type="submit" value="Fechar" class="btn btn-danger">
					</form>
				</div>

				<?php
			}
			?>

			<button onclick="esconde_status_1()">Ativos</button>
			<button onclick="mostra_status_1()">Todos</button>
			<button onclick="esconde_status_2()">Completos</button>
		</main>
		<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/todo.js"></script>
	</body>
</div>
</html>