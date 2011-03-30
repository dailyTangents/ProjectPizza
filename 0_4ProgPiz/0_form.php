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
		// Code for  error message - Wrong Security Text
                                echo "Not tooooooo obnoxious :) <br />";
		echo"<center><font size=\"5\" face=\"tahoma\" color=\"red\"><h1><br /><blink>Wrong Security Text !!! </blink></h1><br /></center>";  
   		echo"<br /> <a href=\"javascript:history.go(-1)\">Go Back</a></font> ... <font size=\"2\" face=\"tahoma\" color=\"green\"><br /> javascript but leaves the form filled upon refresh AND reload ... not good; also won't work if javascript is turned off<br /></font>";  
 		echo"<font size=\"2\" face=\"tahoma\" color=\"green\"><br />An alternative go back link which works better ... see file 0_form.php for notes</font>";  
   		echo" <br /><br /> <a href=\"03-pizzaform.php\">Go Back</a><font size=\"2\" face=\"tahoma\" color=\"green\"> ... php and can be prefilled with session variable<br /></font>";  
   		echo"<font size=\"2\" face=\"tahoma\" color=\"green\"><br />NOTE:  Yes, the blinking should be edited out of this page.  Thought it a tad humourous at the time of writing <br /></font>";  

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