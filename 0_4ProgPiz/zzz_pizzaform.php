<?php

/**
 * Project:     Securimage: A PHP class for creating and managing form CAPTCHA images<br />
 * File:        securimage.php<br />
 * URL:         www.phpcaptcha.org
 */


session_start();  // Start the session where the code will be stored.

?>
<html>
<head>
  <title>Pizza Test Form</title>
<script type="text/javascript" src="library/js/jquery.js"></script>
<script type="text/javascript" src="library/js/jquery.validate.js"></script>

<script type="text/javascript">
<!--
  $(document).ready(function(){
    $("#myForm1").validate();
  });
// -->
</script>

<style type="text/css">
<!--
body {
	font-family: Arial; Verdana, Geneva, sans-serif;
	font-size:12;
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

<body>

<?php
if (empty($_POST)) { ?>
<form method="POST"   id="myForm1" >
Username:<br />
<input type="text" name="username"  type="text" class="required" /><br />
Password:<br />
<input type="text" name="password"  type="text" class="required" /><br /><br />

<div style="width: 430px; float: left; height: 120px">
      <img id="siimage" align="left" style="padding-right: 15px; border: 0" src="image-03.php?sid=<?php echo md5(time()) ?>" />

        <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,0,0" width="19" height="19" id="SecurImage_as3" align="middle">
			    <param name="allowScriptAccess" value="sameDomain" />
			    <param name="allowFullScreen" value="false" />
			    <param name="movie" value="securimage_play.swf?audio=securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" />
			    <param name="quality" value="high" />
			
			    <param name="bgcolor" value="#ffffff" />
			    <embed src="securimage_play.swf?audio=securimage_play.php&bgColor1=#777&bgColor2=#fff&iconColor=#000&roundedCorner=5" quality="high" bgcolor="#ffffff" width="19" height="19" name="SecurImage_as3" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />
			  </object>

        <br />
        
        <!-- pass a session id to the query string of the script to prevent ie caching -->
        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'image-03.php?sid=' + Math.random(); return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>
</div>
<div style="clear: both"></div>
Code:<br />

<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
<input type="text" name="code" size="12" /><br /><br />

<input type="submit" value="Submit Form" />
</form>

<?php
} else { //form is posted
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

</body>
</html>
