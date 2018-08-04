<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

	<h1>My Tasks</h1>

	<?php

		foreach ($tasks as $task) { 

			if ($task->completed==true) { ?>

			<ul>

				<li><strike><?php echo $task->description; ?></strike></li>

			</ul>

			<?php }else {	?>

			<ul>

				<li><?php echo $task->description; ?></li>

			</ul>
			
	<?php		}} ?>

<?php require 'partials/foot.php' ?>