<?php
	$todos = array('Buy Milk', 'Mow the Lawn', 'Take a nap');
?>
<html>
	<head>
		<title>To Do</title>
	</head>
	<body>
		<h1>My To Do List</h1>
		<form action="saveTodo.php" method="post">
			<input type="text" name="todo">
			<input type="submit" value="Save Todo">
		</form>
		<ul>
			<?php
				for ( $i = 0; $i < count($todos); $i++ ) {
			?>
			<li><?php echo $todos[ $i ]; ?></li>
			<?php
				}
			?>
		</ul>
	</body>
</html>