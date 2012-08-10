<!DOCTYPE html>
<!-- saved from url=(0033)http://www.kiwicookie.lexerim.nl/ -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="chrome=1">
    	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    	
    	<title><?php echo WEB_NAME; ?> - <?php echo WARNING_TITLE1; ?></title>
    	
    	<link rel="stylesheet" href="http://kiwiboom.github.com/kiwicookie/stylesheets/styles.css">
    	<link rel="stylesheet" href="http://kiwiboom.github.com/kiwicookie/stylesheets/styles.css">
    	
    	
    	
    	<style>
    		.hidden {
	    		display: none;
	    	}
	    </style>
	    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	    <script>
    		function show() {
	    		$('.hidden').fadeIn(500);
	    		$('section').css('height', 'auto');
	    		$('#bottomhr').css('margin-bottom', '20px');
	    	}
	    </script>
  </head>
  <body>
    <div class="wrapper">
    <?php if(isMobile()): ?>
      	<section style="height: 100%; margin-top: -2px;">
    <?php else: ?>
    	<section style="height: auto; margin-top: 40px;">
    <?php endif; ?>

<h2 id="installation"><?php echo WARNING_TITLE1; ?></h2>
	<p><?php echo WARNING_P1; ?></p>
<?php if(isMobile()): ?>
	<hr/>
		<div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 100%;" id="links">
			<a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo WARNING_ACCEPT; ?></a>
			<a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo WARNING_DECLINE; ?></a><br/>
		</div>
	<hr/>
<?php else: ?>
	<div style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:20px;">
	</div>
		<div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 350px;" id="links">
			<a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo WARNING_ACCEPT; ?></a>
			<a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo WARNING_DECLINE; ?></a><br/>
		</div>
	<div id="bottomhr" style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:-20px;">
	</div>
<?php endif; ?>

<div class="hidden">
	<div id="privacy">
		<h2><?php echo PRIVACY_TITLE1; ?></h2>
			<?php echo PRIVACY_P1; ?>
		<br/><br/>			
		<h3 style="margin-bottom:-10px;"><?php echo PRIVACY_TITLE2; ?></h3>
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE3; ?></h4>
				<?php echo PRIVACY_P3; ?>					
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE4; ?></h4>
				<?php echo PRIVACY_P4; ?>	
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE5; ?></h4>
				<?php echo PRIVACY_P5; ?>
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE6; ?></h4>
				<?php echo PRIVACY_P6; ?>				
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE7; ?></h4>
				<?php echo PRIVACY_P7; ?>
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE8; ?></h4>
				<?php echo PRIVACY_P8; ?>			
			<h3 style="margin-top: 10px; margin-bottom:-3px;"><?php echo PRIVACY_TITLE9; ?></h3>
				<?php echo PRIVACY_P9; ?>			
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE10; ?></h4>
				<?php echo PRIVACY_P10; ?>			
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo PRIVACY_TITLE11 ?></h4>
				<?php echo PRIVACY_TITLE11; ?>
	</div>
	
	<hr style="margin-top: 20px;"/>
	
	<div id="cookies">
		<h2 style="margin-top: 15px;"><?php echo COOKIES_TITLE1; ?></h2>
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo COOKIES_TITLE2; ?></h4>
				<?php echo COOKIES_P2; ?>
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo COOKIES_TITLE3; ?></h4>
				<?php echo COOKIES_P3; ?>
		      	 		<ul>
							<li><?php echo COOKIES_LI1; ?></li>
							<li><?php echo COOKIES_LI2; ?></li>
							<li><?php echo COOKIES_LI3; ?></li>
						</ul>		
					<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo COOKIES_TITLE4; ?></h4>
						<ul>
							<li><?php echo COOKIES_LI4; ?></li>
							<li><?php echo COOKIES_LI5; ?></li>
							<li><?php echo COOKIES_LI5; ?></li>
							<li><?php echo COOKIES_LI6; ?></li>
						</ul>		
			<h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo COOKIES_TITLE5; ?></h4>
				<?php echo COOKIES_P5; ?>
	</div>
</div>
</body><link rel="stylesheet" type="text/css" href="data:text/css,"></html>