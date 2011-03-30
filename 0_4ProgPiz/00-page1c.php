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
<h1> this is the header </h1>
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
		color: red;
		padding-left: .5em;
		padding-right: .5em;
		vertical-align: top;
	}
//-->
</style>


</head>

<body class="layout2 " id="topofpage" background="helpers/background2.jpg">

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








<?php
if (empty($_POST)) { ?>

<br /><form action="00-page1c.php" method="post"  id="myForm1" >
    <div>


<table cellspacing="7">

<tr><td>     First Name&nbsp;:</td><td> <input name="pizzafname" type="text" class="required"  /></td></tr>
<tr><td>     Last Name&nbsp;: </td><td><input name="pizzalname" type="text" class="required"  /></td></tr>
<tr><td>     Delivery Address&nbsp;:</td><td> <input name="pizzadeladd" type="text" class="required"  /></td></tr>
<tr><td>     Billing Address&nbsp;: </td><td><input name="pizzabilladd" type="text" class="required"  /></td></tr>
<tr><td>     Payment Method&nbsp;:</td><td> <br />
   



<tr><td>     Email: </td><td><input name="pizzaemail" type="text"  class="required email"  /></td></tr>
</table>
<br /><br />
<div >
      <img id="siimage" align="left" style="padding-right: 15px; border: 0" src="image-03.php?sid=<?php echo md5(time()) ?>" />


        <br />
        
        <!-- pass a session id to the query string of the script to prevent ie caching -->
        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'image-03.php?sid=' + Math.random(); return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>
</div>
<div style="clear: both"></div>
Code:<br />

<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
<input type="text" name="code" size="12" /><br /><br />

<input type="submit" value="Submit Form" />
    </div>
</form>

<?php
} 


else { //form is posted
  include("library/securimage.php");
  $img = new Securimage();
  $valid = $img->check($_POST['code']);

  if($valid == true) {
    echo "<center>Thanks, you entered the correct code.<br />Click <a href=\"{$_SERVER['PHP_SELF']}\">here</a> to go back.</center>";
  } else {
    echo "<center>Sorry, the code you entered was invalid.  <a href=\"javascript:history.go(-1)\">Go back</a> to try again.</center>";
  }
}

?>


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

