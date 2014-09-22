

<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html>
<head>

    <title>Time</title>
    <link rel='stylesheet' href='styles.css' type='text/css'>
    <?php 
    	require 'time_logic.php'; 
    
    ?>
    
    
</head>

<body class="dy <?=$background?>">
	
	<h1>It is <?=date('g:iA')?></h1>
	<small>Timezone: <?php echo ini_get(date_default_timezone_get());?>
	
	<p>
	<img src='http://making-the-internet.s3.amazonaws.com/<?=$image?>' alt='time image'>
    </p>
    
    <!-- Date / time output examples
    <p>Today is <?=date('l')?></p>
    
    <p>Today is <?=date('D M j g:i:s A e')?></p>

    <p>Value of current hour is <?=date('H')?> </p>	
    
    
	<?=date('l jS \of F Y g:i:s A')?>
	</p>
	
	<p>
	<?=date('g:iA')?>
	</p>
	
	<p>
	<?=date('G \h\u\n\d\r\e\d \h\o\u\r\s')?>
	</p>
	
	<p>
	<?=date("F j, Y g:i a e")?>
	</p> -->
	
	
</body>
</html>
