<!DOCTYPE html>
<!-- saved from url=(0033)http://www.kiwicookie.lexerim.nl/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title>kiwicookie - Dutch Cookie Law Script</title>
    <link rel="stylesheet" href="http://kiwiboom.github.com/kiwicookie/stylesheets/styles.css">
    <link rel="stylesheet" href="http://kiwiboom.github.com/kiwicookie/stylesheets/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
    	.hidden {
	    	display: none;
    	}
    </style>
    <script>
    	function show() {
	    	$('.hidden').fadeIn(500);
	    	$('section').css('height', 'auto');
    	}
    </script>
  </head>
  <body>
    <div class="wrapper">
    <?php if(isMobile()): ?>
      	<section style="height: 100%; margin-top: 40px;">
    <?php else: ?>
    	<section style="height: 223px; margin-top: 40px;">
    <?php endif; ?>
        <div id="image" style="background: url(&#39;http://f.cl.ly/items/2e0e2x3Y1c3j180c0v3R/image.png&#39;); height: 140px; width: 186px; margin: 0 auto; margin-top: -115px; opacity: 0.8;"></div>

<h2 style="margin-top: -5px" id="installation">This site uses cookies</h2>

<p>In order for this site to work properly, and in order to evaluate and improve this site we need to store small files (the so-called cookies) on your computer and analyze your website usage. The majority of all website do this, however, Dutch laws require us to obtain your constent first. You can read our privacy statement <a href="#privacy" onClick="show()">here</a> and information about cookies and our website <a href="#cookies" onClick="show()">here</a></p>
<?php if(isMobile()): ?>
	<hr/>
	<div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 100%;" id="links"><a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>">I accept</a><a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>">I don't accept</a><br/></div>
	<hr/>
<?php else: ?>
	<div style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:20px;"></div>
	<div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 350px;" id="links"><a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>">I accept</a><a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>">I don't accept</a><br/></div>
	<div style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:20px;"></div>
<?php endif; ?>
<div class="hidden">
<div id="privacy">
	<h2>Privacy, version of <?php echo CHANGE_DATE; ?></h2>
	Our website stores personal data e.g. name, e-mail adress and IP. We think privacy is very important and will never use personal data otherwise than for the stated purpose. These goals can be found below:<br/><br/>			
	<h3 style="margin-bottom:-10px;">What do we use your personal data for?</h3>
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Registration</h4>
		For some of our services we require you to register. During registration you need provide some personal information. This information is securely stored on the servers of our hosting provider(s).			
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Communication</h4>
		If you contact us, it is possible that we save the recieved messages. If nessecairy, we will need to ask for your personal information. We will store these records as secure as possible.
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Website usage</h4>
		In order to achieve the best possible experience for our users, we store the surfing habits of our visitors. We can for example see which pages are most frequently viewed and find the nationality of our visitors. In order to analyze this information, we use Google Analytics. Therefore the privacy statement of <a href="http://www.google.com/policies/privacy/">Google Analytics</a> applies as well. Furthermore, we can only partly see the information that is collected and we are not liable for any infringement done on Google's side.
							
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Newsletter</h4>
		We may send a newsletter where we inform you about <?php echo WEB_NAME; ?>. For this purpose, we may need personal information such as your e-mail, address and name. This information will be protected and stored as securely as possible.			
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Advertisements</h4>
				Our website uses advertisements from Google AdSense. Here is the privacy statement of <a href="http://www.google.com/intl/nl/policies/privacy/">Google Adsense</a> apply. It's impossible for us to see the stored data and we are thus not liable for these pieces of information.			
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Social Networks</h4>
		We like visitors, and one way to get more of these is to offer the ability to share contents of our website on e.g. Facebook and Twitter. The privacy statements of the social networks are applicable. We can not see your personal information.
				
		<h3 style="margin-top: 10px; margin-bottom:-3px;">Third parties</h3>
		Personal information will never be shared with third parties other than those described in this document.
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Cookies</h4>
		In order for this site to work properly, and in order to evaluate and improve this site we need to store small files (the so-called cookies) on your computer and analyze your website usage. The majority of all website do this, however, Dutch laws require us to obtain your constent first. More detailed information about cookies and how we deal with them can be found in our <a href="#cookies" onClick='show("cookies");'>cookie statement</a>.
							
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Adoption and changes</h4>
		This document effects starting from <?php echo CHANGE_DATE; ?> and can be changed at any time. These changes will be effective immediately. Changes will be published on our website.
</div>
	<hr style="margin-top: 20px;"/>
<div id="cookies">
	<h2 style="margin-top: 15px;">Cookies</h2>
		<h4 style="margin-bottom: -3px; margin-top: 10px;">What is a cookie?</h4>
		A cookie is a small file saved on your computer.
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">What purposes can cookies be used for?</h4>
		Cookies can be used for a lot of different things. Some examples are:
	        <ul>
				<li>Analyzing the use of websites.</li>
				<li>Advertising based on personal intrests.</li>
				<li>Sharing articles on social networks like Twitter and Facebook.</li>
			</ul>
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">What do we use cookies for, and what services do we use?</h4>
			<ul>
				<li>Functional cookies, these can be used for functional purposes like the storage of your username.</li>
				<li>Analyzing the use of this website to optimally match the users. We use Google Analytics for this.</li>
	            <li>Integration with social networks trough for example show tweets and by offering the ability to share content of our website. We support most of the current social networks, including Facebook and Twitter. </li>
				<li>Placing ads, to accomplish this we use Google AdSense.</li>
			</ul>
				
		<h4 style="margin-bottom: -3px; margin-top: 10px;">Adoption and changes</h4>
		This document effects starting from <?php echo CHANGE_DATE; ?> and can be changed at any time. These changes will be effective immediately. Changes will be published on our website.
</div>
</div>
</body><link rel="stylesheet" type="text/css" href="data:text/css,"></html>