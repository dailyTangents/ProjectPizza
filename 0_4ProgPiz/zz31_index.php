<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html> 
<head> 
<meta name="author" content="Elle Krievs" >
<meta http-equiv="Content-type" content="text/html;charset=UTF-8" >
<!-- ===========================================================================================
===========================================================================================
   Elle Krievs : ANIM 193 - PHP with MySQL - Project 3
===========================================================================================
=========================================================================================== -->
<title>Project 3.1</title>
<script type="text/javascript" src="library/js/jquery.js"></script>
<script type="text/javascript" src="library/js/jquery.validate.js"></script>

<script type="text/javascript">
<!--
// ToDo:
// make this into a loop which repeats
// $totnumforms = 6 // total number of forms
//
  $(document).ready(function(){
    $("#myForm1").validate();
    $("#myForm2").validate();
    $("#myForm3").validate();
    $("#myForm4").validate();
    $("#myForm5").validate();
    $("#myForm6").validate();
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

<!-- ============================================================= -->
<p> Elle Krievs &mdash; Schoolcraft, Mi <br /> 
<i> Established before the eighties </i>
<br />Online at <a  href='http://www.dailytangents.com'><strong><font face="Lucida Sans" color="red"><i>DailyTangents.com</i></font></strong></a></p> 
<h1><a href="../">ANIM 193</a> - PHP with MySQL</h1> 
<!-- ============================================================= -->
 <hr /><hr /><hr />
<br />&nbsp;

<table><tr>
<td>
<br /> 3.1 Register Users
<br />&nbsp;
<br /><font color="#555555">
In this example routine, users register for a conference. A single text file saves
 information for each registrant on a single line separated by commas.
 </font>
<br />
<br /><form action="31_register.php" method="post" target="project31" id="myForm1" >
    <div>
      Name&nbsp;: <input name="registername" type="text" class="required"  /><br />
      Email: <input name="registeremail" type="text"  class="required email"  /><br />
      <input type="submit" value="Register" />
    </div>
</form>

</td><td align="center">
<IFRAME
    SRC="i_blank.htm"
    NAME="project31"
    WIDTH="250" HEIGHT="170"
    frameborder="1"
    >
</IFRAME>
</td></tr></table>
<p><a href="results/31_conference.txt" target="project31">View registrants</a>
</p>

<br />&nbsp;
 <hr /><hr /><hr />
<!-- ============================================================= -->
<!-- ============================================================= -->

<br />&nbsp;
<!-- ============================================================= -->
<br />&nbsp;

<h3 align="center"><a href="../">ANIM 193</a> - PHP with MySQL</h3> 


</body>
</html>

