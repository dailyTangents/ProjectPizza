<?php session_start();
// +--------------------------------------------------------------------------+
// | captcha v2                                                               |
// +--------------------------------------------------------------------------+
// | Copyright (C) 2010 by the following authors:                             |
// |                                                                          |
// |                                                                          |
// |          Predrag Rukavina  - admin@phpform.net                           |
// +--------------------------------------------------------------------------+
// |                                                                          |
// | This program is free software; you can redistribute it and/or            |
// | modify it under the terms of the GNU General Public License              |
// | as published by the Free Software Foundation; either version 2           |
// | of the License, or (at your option) any later version.                   |
// |                                                                          |
// | This program is distributed in the hope that it will be useful,          |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of           |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the            |
// | GNU General Public License for more details.                             |
// |                                                                          |
// | You should have received a copy of the GNU General Public License        |
// | along with this program; if not, write to the Free Software Foundation,  |
// | Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.          |
// |                                                                          |
// +--------------------------------------------------------------------------+
?>
<center>
<div align=center>
<form method="POST" action="cc.php"> 
<img src="captcha.php" id="img" border="0" title="captcha v1 phpform.net"><br>
<input type="text" style="font-size:14px;font-family:'Trebuchet MS';font-weight:bold;color:#4D4D4E;border:#ccc 2px dotted;" size="25" name="check"><br>
<i style="font-family:'trebuchet ms';font-size:12px;">Please enter security code</i>
<br /><br /> 
<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
</form>
</center> 