<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Sistema ToDo - Leonidas Peligrineli</title>
</head>
<body>
	<header>
		<h1>To Do's</h1>
	</header>
	<main>
		<form method="POST" action="new_task.php" class="task-form">
			<input type="list" name="description" class="task" placeholder="O que precisa fazer?">
		</form>
		<?php include_once("list_task.php"); ?>
		<button onclick="esconde_status_1()">Esconde</button>
		<button onclick="mostra_status_1()">Mostra</button>
	</main>
	<script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/todo.js"></script>
</body>
</html>
