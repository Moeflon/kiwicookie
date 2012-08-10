<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<title><?php echo WEB_NAME; ?> - <?php echo WARNING_TITLE1; ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<?php include("$currentDir/lang/themes/clean/css/style.php"); ?>
	<script>
		function show(elm) {
			$('#'+elm).fadeIn('slow');
		}
		
		function hide(elm) {
			$('#'+elm).fadeOut('slow');
		}
	</script>
</head>
<body>
	<h1><?php echo WARNING_TITLE1; ?></h1>
	<div class="info">
	<?php echo WARNING_P1; ?>
	
	<div id="buttons">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'"><?php echo WARNING_ACCEPT; ?></button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'"><?php echo WARNING_DECLINE; ?></button>
	</div>
		
	<hr/>
		
	<div id="privacy">
		<h1><?php echo PRIVACY_TITLE1; ?></h1>
		<div class="info" style="font-size:13px;">
			<?php echo PRIVACY_P1; ?>		
			<h3><?php echo PRIVACY_TITLE2; ?></h3>
			<h5><?php echo PRIVACY_TITLE3; ?></h5>
			<?php echo PRIVACY_P3; ?>		
			<h5><?php echo PRIVACY_TITLE4; ?></h5>
			<?php echo PRIVACY_P4; ?>			
			<h5><?php echo PRIVACY_TITLE5; ?></h5>
			<?php echo PRIVACY_P5; ?>			
			<h5><?php echo PRIVACY_TITLE6; ?></h5>
			<?php echo PRIVACY_P6; ?>
			<h5><?php echo PRIVACY_TITLE7; ?></h5>
			<?php echo PRIVACY_P7; ?>		
			<h5><?php echo PRIVACY_TITLE8; ?></h5>
			<?php echo PRIVACY_P8; ?>			
			<h3><?php echo PRIVACY_TITLE9; ?></h3>
			<?php echo PRIVACY_P9; ?>
			<h3><?php echo PRIVACY_TITLE10; ?></h3>
			<?php echo PRIVACY_P10; ?>		
			<h3><?php echo PRIVACY_TITLE11; ?></h3>
			<?php echo PRIVACY_P11; ?>
			<div style="height: 5px;"></div>
				
			<button onClick="hide('privacy')">
				Verberg/Hide
			</button>
		</div>
	</div>

	<div id="cookies">
		<h1><?php echo COOKIES_TITLE1; ?></h1>
		<div class="info" style="font-size:13px;">
			<h3><?php echo COOKIES_TITLE2; ?></h3>
			<?php echo COOKIES_P2; ?> 		
			<h3><?php echo COOKIES_TITLE3; ?></h3>
			<?php echo COOKIES_P3; ?> 
				<ul>
					<li><?php echo COOKIES_LI1; ?></li>
					<li><?php echo COOKIES_LI2; ?></li>
					<li><?php echo COOKIES_LI3; ?></li>
				</ul>		
			<h3><?php echo COOKIES_TITLE4; ?></h3>
				<ul>
					<li><?php echo COOKIES_LI4; ?></li>
					<li><?php echo COOKIES_LI5; ?></li>
					<li><?php echo COOKIES_LI6; ?></li>
					<li><?php echo COOKIES_LI7; ?></li> 
				</ul>	
			<h3><?php echo COOKIES_TITLE5; ?></h3>
			<?php echo COOKIES_P5; ?>		
			<div style="height: 5px;"></div>
			<button onClick="hide('cookies')">
				Verberg/Hide
			</button>
		</div>
	</div>
</body>
</html>