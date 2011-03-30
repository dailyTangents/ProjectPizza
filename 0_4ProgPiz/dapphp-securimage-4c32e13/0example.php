<html>
<head>
  <title>Securimage Test Form</title>
</head>

<body>

<form method="POST">
Username:<br />
<input type="text" name="username" /><br />
Password:<br />
<input type="text" name="password" /><br /><br />

<div style="width: 430px; float: left; height: 90px">
      <img id="siimage" align="left" style="padding-right: 5px; border: 0" src="securimage_show.php?sid=5bff0f49c8dd4d35f137ccf2e98916be" />

        <br />
        
        <!-- pass a session id to the query string of the script to prevent ie caching -->
        <a tabindex="-1" style="border-style: none" href="#" title="Refresh Image" onclick="document.getElementById('siimage').src = 'securimage_show.php?sid=' + Math.random(); return false"><img src="images/refresh.gif" alt="Reload Image" border="0" onclick="this.blur()" align="bottom" /></a>
</div>
<div style="clear: both"></div>
Code:<br />

<!-- NOTE: the "name" attribute is "code" so that $img->check($_POST['code']) will check the submitted form field -->
<input type="text" name="code" size="12" /><br /><br />

<input type="submit" value="Submit Form" />
</form>


</body>
</html>
