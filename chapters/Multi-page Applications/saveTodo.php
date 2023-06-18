<?php
	$todo = $_REQUEST['todo'];
?>

<h1>My New Todo is "<?php echo $todo; ?>"</h1>

<pre><?php print_r($_REQUEST); ?></pre>