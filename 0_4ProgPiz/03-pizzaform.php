<?php


session_start();  // Start the session where the code will be stored.

?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ePizza</title>

<!-- =============================== -->
<!--     #include file="00-header.htm"-->
<!-- =============================== -->
<link rel="stylesheet" type="text/css" media="print" href="helpers/4toggle/toggleprint.css" />
<link rel="stylesheet" type="text/css"  href="helpers/4toggle/toggle.css" />
<script type="text/javascript" src="helpers/4toggle/jquery-latest.js"></script>
<script type="text/javascript" src="helpers/4toggle/toggle.js"></script>
<script type="text/javascript" src="library/js/jquery.js"></script>
<script type="text/javascript" src="library/js/jquery.validate.js"></script>

<script type="text/javascript">
<!--
//  form validation
  $(document).ready(function(){
    $("#myForm1").validate();
  });
// -->
</script>
<style type="text/css">
<!--
body {
	font-family: Arial; Verdana, Geneva, sans-serif;
	font-size:14;
              
     }
	label.error {
		float: none;
		color: yellow;
		padding-left: 1.5em;
		padding-right: .5em;
		vertical-align: top;
	}
//-->
</style>


</head>
<!-- body class="layout2 " id="topofpage" background="helpers/background2.jpg"   --->

<body class="layout2 " id="topofpage"  background="helpers/swatch05.jpg" >
<br /><center><img src="logo.jpg" width="550"></center>

<?php 
// session_start();

if( isset($_POST['submit'])) {
   if( $_SESSION['security_code'] == $_POST['security_code'] && !empty($_SESSION['security_code'] ) ) {
		// Insert your code for processing the form here, e.g emailing the submission, entering it into a database. 
		echo 'Thank you. Your message said i can add all kind of stuff here coming from form "'.$_POST['message'].'"';
		unset($_SESSION['security_code']); exit; 
   } else {
		// Insert your code for showing an error message here
		echo 'Sorry, you have provided an invalid security code'; exit; 
   }
} else {
?>
<center>
	<form action="0_form.php" method="post"  id="myForm1" >


<!-- ====== -->

<br />
    <div>
<table border="2" bgcolor="#e26143"><tr><td>
<table cellspacing="7" width="590" border="1">
<tr>
<tr><td colspan="4">&nbsp;<strong>NOTE:</strong> Items with a star (*) are required. </td></tr>
      <td><label for="fname">*First Name: </label></td><td colspan="3"><input type="text" name="fname" id="fname"  class="required"  size="75" maxlength="20"/></td>
</tr><tr>      <td><label for="lname">*Last Name: </label></td><td colspan="3"><input type="text" name="lname" id="lname"  class="required" size="75" maxlength="20"/></td>
</tr>
 <tr><td>    <label for="email">*Email: </label> </td><td colspan="3"><input type="text" name="email" id="email"  class="required email"  size="75" maxlength="74" /></td></tr>
<tr><td>     <label for="add-deliv">*Delivery Address&nbsp;: </label></td><td colspan="3"> <input type="text" name="add-deliv" id="add-deliv"  class="required" size="75" maxlength="100"/></td></tr>

<tr><td>     <label for="add-bill">*Billing Address&nbsp;: </label></td><td colspan="3"><input type="text" name="add-bill" id="add-bill"  class="required" size="75"/></td></tr>
<tr><td>     *Payment Method&nbsp;:</td> 
<td colspan="3" >
  &nbsp;&nbsp;&nbsp;<input type="radio" name="payment" value="cash"  CHECKED>Cash&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;<input type="radio" name="payment" value="credit">Credit&nbsp;&nbsp;&nbsp; 
  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="radio" name="payment" value="check">Check&nbsp;&nbsp;&nbsp;
</td>
</tr>
<tr><td colspan="4" align="center">&nbsp;<label for="message">Feel free to leave a comment. </label></td></tr>
 <tr><td>&nbsp; ... LOGO ... <br />&nbsp;...  HERE ... </td><td colspan="3">  <textarea rows="5" cols="54" name="message" id="message" default="Comments: "></textarea><br />
</td></tr>


</table>
</td><td valign="top" align="center">
<br /><br />
<img id="si2image" src="0_CaptchaSecurityImages.php?width=200&height=100&characters=5" /> 
 
<br />         <!-- a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'image-03.php?sid=' + Math.random(); return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a -->
                        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('si2image').src = '0_CaptchaSecurityImages.php'; return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>



<br /><br />




<br /><br />
<label for="security_code">Please enter security code: </label>
<br /><br /> <input id="security_code" name="security_code" type="text" />
<br /><br /> <input type="submit" name="submit" value="Submit" />
</td></tr></table>

</div>	</form>
</center>
<?php
	}
?>



<!-- =============================== -->
<!-- =============================== -->

<div id="cPage">

<!-- =============================== -->
<!-- =============================== -->

<div class="cMainNav">
<div class="cMainNavFix">

<!-- =============================== -->
<!-- =============================== -->

<!-- ============================================================================================= -->
<!-- =================== -->				
<div id="col2"><div class="stylemain">
<!-- InstanceBeginEditable name="col2" -->
<h1>ePizza</h1>
<h2></h2>
<p></p>



<div class="container">

	<h2 class="trigger"><font color="#eeeeee">Pizza</font></h2>
	<div class="toggle_container">
		<div class="block">

<p><a href=""></a><big><strong>How many pizza's would you like?</strong></big></p>
<!-- ================================================================ -->
<p>  All pizzas are 10" thick crust and include 2 toppings.
 <font color="#008400"><strong>$10</strong></font> </p>
			 
<!-- ================================================================ -->
		</div>
	</div>
	
	<h2 class="trigger"><font color="#eeeeee">Pizza Toppings</font></h2>

	<div class="toggle_container">
		<div class="block">
			<p><big><strong>Select your toppings</strong></big></p>

<!-- ================================================================ -->
radio button choice list here
<!-- ================================================================ -->

		</div>

	</div>

	<h2 class="trigger"><font color="#eeeeee">Drinks &amp; Sides</font></h2>

	<div class="toggle_container">
		<div class="block">
	
			<p><big><strong>Drinks &amp; Sides</strong></big></p>

<!-- ================================================================ -->
<p> 
 Drinks, salad, breadsticks</p>
<!-- ================================================================ -->

		</div>

	</div>


	<h2 class="trigger"><font color="#eeeeee">Pick-Up or Delivery?</font></h2>

	<div class="toggle_container">
		<div class="block">
			<p><big><strong>Pick-Up or Delivery</strong></big></p>

<!-- ================================================================ -->

<p>First Name, Last Name, Delivery Address, Billing Address, Email, Payment Method (check, cash, credit card), 
 email coupon sign-up, CAPTCHA
 </p>








<!-- ================================================================ -->

		</div>

	</div>

	<h2 class="trigger"><font color="#eeeeee">Verify Order</font></h2>

	<div class="toggle_container">
		<div class="block">
		
			<p><big><strong>Verify Order</strong></big></p>

<!-- ================================================================ -->

<!-- ============================================================================================= -->
<p> Total Amount Due: Billed To: eSignature; Captcha, Send
</p>
<!-- ================================================================ -->

		</div>

	</div>




<!-- ==================================================================== -->
<!-- ==================================================================== -->


<!-- ==================================================================== -->
<!-- ==================================================================== -->
<br />&nbsp;<br />&nbsp; <br />






</div>



				  <!-- InstanceEndEditable -->
         				  
			  </div> </div>
<!-- =================== -->
<!-- ============================================================================================= -->

<div class="spacer">&nbsp;</div><!-- end spacer -->
</div><!-- end cMainNavFix -->
</div><!-- end cMainNav -->
</div><!-- end id=cPage -->

<!-- =============================== -->
<!--     #include file="00_foot.htm"-->
<!-- =============================== -->

</body>
<!-- InstanceEnd --></html>
<!-- =============================== -->

