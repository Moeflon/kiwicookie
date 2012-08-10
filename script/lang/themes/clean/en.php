<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<title>Deze site gebruikt cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<?php include("$currentDir/lang/themes/clean/css/style.php"); ?>	<script>
		function show(elm) {
			$('#'+elm).fadeIn('slow');
		}
		
		function hide(elm) {
			$('#'+elm).fadeOut('slow');
		}
	</script>
</head>
<body>
	<h1>This site uses cookies</h1>
	<div class="info">
	In order for this site to work properly, and in order to evaluate and improve this site we need to store small files (the so-called cookies) on your computer and analyze your website usage. The majority of all website do this, however, Dutch laws require us to obtain your constent first. You can read our privacy statement <a href="#privacy" onClick="show('privacy');">here</a> and information about cookies and our website <a href="#cookies" onClick='show("cookies");'>here</a>.</div>
	
	<div id="buttons">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'">I approve</button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'">I don't approve</button>
	</div>
	
	<div id="privacy">
		<h1>Privacy</h1>
		<div class="info" style="font-size:13px;">
			<h3>Privacy Statement, version of <?php echo CHANGE_DATE; ?></h3>
			Our website stores personal data e.g. name, e-mail adress and IP. We think privacy is very important and will never use personal data otherwise than for the stated purpose. These goals can be found below:			
			<h3>What do we use your personal data for?</h3>
			<h5>*Registration</h5>
			For some of our services we require you to register. During registration you need provide some personal information. This information is securely stored on the servers of our hosting provider(s).			
			<h5>*Communication</h5>
			If you contact us, it is possible that we save the recieved messages. If nessecairy, we will need to ask for your personal information. We will store these records as secure as possible.
			
			<h5>*Website usage</h5>
			In order to achieve the best possible experience for our users, we store the surfing habits of our visitors. We can for example see which pages are most frequently viewed and find the nationality of our visitors. In order to analyze this information, we use Google Analytics. Therefore the privacy statement of <a href="http://www.google.com/policies/privacy/">Google Analytics</a> applies as well. Furthermore, we can only partly see the information that is collected and we are not liable for any infringement done on Google's side.
						
			<h5>*Newsletter</h5>
			We may send a newsletter where we inform you about <?php echo WEB_NAME; ?>. For this purpose, we may need personal information such as your e-mail, address and name. This information will be protected and stored as securely as possible.			
			
			<h5>*Advertisements</h5>
			Our website uses advertisements from Google AdSense. Here is the privacy statement of <a href="http://www.google.com/intl/nl/policies/privacy/">Google Adsense</a> apply. It's impossible for us to see the stored data and we are thus not liable for these pieces of information.			
			
			<h5>*Social Networks</h5>
			We like visitors, and one way to get more of these is to offer the ability to share contents of our website on e.g. Facebook and Twitter. The privacy statements of the social networks are applicable. We can not see your personal information.
			
			<h3>Third parties</h3>
			Personal information will never be shared with third parties other than those described in this document.
			
			<h3>Cookies</h3>
			In order for this site to work properly, and in order to evaluate and improve this site we need to store small files (the so-called cookies) on your computer and analyze your website usage. The majority of all website do this, however, Dutch laws require us to obtain your constent first. More detailed information about cookies and how we deal with them can be found in our <a href="#cookies" onClick='show("cookies");'>cookie statement</a>.
						
			<h3>Adoption and changes</h3>
			This document effects starting from <?php echo CHANGE_DATE; ?> and can be changed at any time. These changes will be effective immediately. Changes will be published on our website.
			<div style="height: 5px;"></div>
			<button onClick="hide('privacy')">Hide</button>
		</div>
	</div>

	<div id="cookies">
		<h1>Cookies</h1>
		<div class="info" style="font-size:13px;">
			<h3>What is a cookie?</h3>
			A cookie is a small file saved on your computer.
			
			<h3>What purposes can cookies be used for?</h3>
			Cookies can be used for a lot of different things. Some examples are:
                <ul>
					<li>Analyzing the use of websites.</li>
					<li>Advertising based on personal intrests.</li>
					<li>Sharing articles on social networks like Twitter and Facebook.</li>
				</ul>
			
			<h3>What do we use cookies for, and what services do we use?</h3>
				<ul>
					<li>Functional cookies, these can be used for functional purposes like the storage of your username.</li>
					<li>Analyzing the use of this website to optimally match the users. We use Google Analytics for this.</li>
                    <li>Integration with social networks trough for example show tweets and by offering the ability to share content of our website. We support most of the current social networks, including Facebook and Twitter. </li>
					<li>Placing ads, to accomplish this we use Google AdSense.</li>
				</ul>
			
			<h3>Adoption and changes</h3>
			This document effects starting from <?php echo CHANGE_DATE; ?> and can be changed at any time. These changes will be effective immediately. Changes will be published on our website.

			<div style="height: 5px;"></div>
			<button onClick="hide('cookies')">Hide</button>
		</div>
	</div>
</body>
</html>