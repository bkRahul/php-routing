<?php require 'partials/head.php' ?>

<?php require 'partials/nav.php' ?>


	
	<h1>Contact Us</h1>

<h3>Please enter your Name</h3>

<form method="POST" action="/php-routing/names">		<!-- accepts the user input through POST method -->

	<input type="text" name="name"></input>

	<button type="submit">Submit</button>

</form>


<?php require 'partials/foot.php' ?>