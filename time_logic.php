	<?php
    	date_default_timezone_set('America/New_York');
    	
    	$t=date("H");
    	//literal for testing
    	//$t = "21";
	
		$n="5";
		$m="11";
		$a="16";
		$e="20";
		

    if ($t < $n || $t > $e) {
			$image = 'php-night.png';
			$background = 'night';
		} elseif ($t < $m) {
			$image = 'php-morning.png';
			$background = 'morning';
		} elseif ($t < $a) {
			$image = 'php-afternoon.png';
			$background = 'afternoon';
		} else {
			$image = 'php-evening.png';
			$background = 'evening';
		}
		
	
	
		/*
		if (date_default_timezone_get()) {
    		echo 'date_default_timezone_set: ' . date_default_timezone_get() . '<br />';
		}

		if (ini_get('date.timezone')) {
    		echo 'date.timezone: ' . ini_get('date.timezone');
		} */

		
    ?>

