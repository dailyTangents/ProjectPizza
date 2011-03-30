<?php 
session_start();

// check if user has submitted information
// if submitted, then check if OK

if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		// Insert your code for processing the form here, e.g emailing the submission, entering it into a database. 
		echo 'Thank you '.$_POST['fname'] . ' ' . $_POST['lname'];
		echo 'for your order. Your message said - your order is - "'.$_POST['message'].'"';
		echo 'It will be delivered to  '.$_POST['add-deliv'] . ' <br />' ;
		unset($_SESSION['security_code']);
   } else {
		// Insert your code for showing an error message here
		echo 'Sorry, you have provided an invalid security code';
   }
} else {
?>

	<form action="0_form.php" method="post">
		<label for="name">Name: </label><input type="text" name="name" id="name" /><br />
		<label for="email">Email: </label><input type="text" name="email" id="email" /><br />
		<label for="message">Message: </label><textarea rows="5" cols="30" name="message" id="message"></textarea><br />
		<img src="CaptchaSecurityImages.php?width=100&height=40&characters=5" /><br />
		<label for="security_code">Security Code: </label><input id="security_code" name="security_code" type="text" /><br />
		<input type="submit" name="submit" value="Submit" />
	</form>

<?php
	}
?>