<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

	<h1>Users Registered</h1>

	<?php

		foreach ($users as $user) {  ?>

			<ul>

				<li><?php echo $user->name; ?></li>

			</ul>

			<?php }	?>

			
<?php require 'partials/foot.php' ?>