<?php
	if(isset($_POST['submit'])) {
    	mail($_POST['email'], $_POST['subject'], $_POST['message']);
    }
?>
<p>Your email has been sent.</p>