<?php
session_start();  // Start the session where the code will be stored.
?>

$pizza_mailto = 'pizza@localhost.me' ;
$pizza_subject = 'Pizza Order' ;


<!-- =================== -->
	<div id="pzcontact">
	    <p>ezPizza!<br />
	    Department   of Pizzarias<br />
	    Pizza King University<br />
                    100 Main Street&nbsp;<br />
	    Kazoo, MI &nbsp; 49000 &nbsp;USA<br />&nbsp;</p> 
	    <p>Phone: (269)   555-1111</p>
	    <p>Fax: (269)   555-2222</p>
<p> <a href="mailto:<?php echo $pizza_mailto.'?'.$pizza_subject ?>">pizza@localhost.me</a></p>
</div>
<!-- =================== -->
