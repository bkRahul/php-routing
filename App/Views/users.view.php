<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>

	<h1>Users Registered</h1>


<h3>Please enter your Name</h3>

<form method="POST" action="/php-routing/users">		<!-- accepts the user input through POST method -->

	<input type="text" name="name"></input>

	<button type="submit">Submit</button>

</form>

<?php



		foreach ($users as $user) {  ?>

			<ul>

				<li><?php echo $user->name; ?></li>

			</ul>

			<?php }	?>


<?php require 'partials/foot.php' ?>