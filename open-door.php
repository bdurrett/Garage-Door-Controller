<?php
	$cmd = 'sudo /var/www/html/garage/garageinterface --press-door-button';
	shell_exec ( $cmd );
	header('Location: ' . 'index.php' );
?>