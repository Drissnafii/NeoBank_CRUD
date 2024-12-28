<?php
require __DIR__ . '/config/Connection.php';
require __DIR__ . '/includes/header.php';
?> 

<div class="ContainerAll">

<h1>Contact Form</h1>

<form action="send.php" method="POST"> 

	<label for="firstname">First Name:</label><br>
	<input type="text" id="firstname" name="firstname"><br><br>

	<label for="lastname">Last Name:</label><br>
	<input type="text" id="lastname" name="lastname"><br><br>

	<label for="email">Email:</label><br>
	<input type="email" id="email" name="email"><br><br>

	<label for="pass">Password:</label><br>
	<input type="password" id="pass" name="pass"><br><br>

	<input type="submit" name="submit" value="Submit">
</form>

<?php
include 'read.php';
include __DIR__ . '/includes/footer.php';
?> 
</div>

</body>
</html>