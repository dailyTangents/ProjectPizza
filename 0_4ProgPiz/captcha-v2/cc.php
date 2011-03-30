<?php session_start(); 
if((@$_POST['check']) == @$_SESSION['check']) { 
echo"<center><font size=\"1\" face=\"tahoma\" color=\"black\">Thank You";
}else{ 
echo"<center><font size=\"1\" face=\"tahoma\" color=\"black\">Wrong Security Text <a href=\"javascript:history.go(-1)\">Go Back</a></font></center>";  
die();      
}
////////////////
//Code//////////
////////////////
session_destroy();
session_unset();
?>