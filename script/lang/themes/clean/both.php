<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<title>Deze site gebruikt cookies</title>
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
	<h1>Deze site gebruikt cookies</h1>
	<div class="info">
	Om deze website goed te laten werken onze website te kunnen optimaliseren op uw beleving plaatsen wij kleine bestanden op uw computer (zogenaamde cookies) en analyseren wij het websitegebruik. Een zeer groot deel van de websites doen dit. Nieuwe wetgeving verplicht ons u hiervoor toestemming te vragen. U kunt <a href="#privacy_nl" onClick="show('privacy_nl');">hier</a> lezen hoe wij met uw privacy omgaan en <a href="#cookies_nl" onClick='show("cookies_nl");'>hier</a> kunt u meer informatie vinden over cookies en hoe wij daar mee omgaan.</div>
	<div id="buttons">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'">Ik ga akkoord</button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'">Ik ga niet akkoord</button>
	</div>
	<hr/>
	<h1>This site uses cookies</h1>
	<div class="info">
	In order for this site to work properly, and in order to evaluate and improve this site we need to store small files (the so-called cookies) on your computer and analyze your website usage. The majority of all website do this, however, Dutch laws require us to obtain your constent first. You can read our privacy statement <a href="#privacy_en" onClick="show('privacy_en');">here</a> and information about cookies and our website <a href="#cookies_en" onClick='show("cookies_en");'>here</a>.</div>
	
	<div id="buttons_en">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'">I approve</button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'">I don't approve</button>
	</div>
	<hr/>
	
	<div id="privacy_nl">
		<h1>Privacy</h1>
		<div class="info" style="font-size:13px;">
			<h3>Privacy Statement, laatst aangepast op <?php echo CHANGE_DATE; ?></h3>
			Onze website slaat persoonsgegevens zoals naam, e-mailadres en IP op. Wij vinden privacy erg belangrijk en zullen nooit persoonsgegevens anders gebruiken dan voor het aangegeven doel. Deze doelen vind u hieronder:			
			<h3>Waar gebruiken wij uw persoonsgegevens voor?</h3>
			<h5>*Registratie</h5>
			Om sommige van onze diensten te gebruiken moet u zich registreren. Bij deze registratie verstrekt u enige persoonsgegevens. Deze informatie wordt beveiligd opgeslagen op de servers van onze hostingprovider(s).
			
			<h5>*Communicatie</h5>
			Als u contact met ons opneemt, is het mogelijk dat wij de verstuurde berichten bewaren. Mocht het relevant zijn dan vragen wij om persoonlijke gegevens. Deze gegevens zullen zo veel mogelijk beveiligd worden bewaard.			
			<h5>*Websitegebruik</h5>
			Om onze website optimaal te kunnen afstemmen op de bezoekers houden wij het surfgedrag van onze bezoekers bij. Zo weten wij welke pagina's het meest worden bekeken en vanuit welk land bezoekers komen. Om deze informatie te kunnen analyseren gebruiken wij bijvoorbeeld Google Analytics. Hier is daarom ook het privacy statement van <a href="http://www.google.com/policies/privacy/">Google Analytics</a> van toepassing. Verder kunnen de verzamelde informatie slechts gedeeltelijk inzien en zijn hiervoor niet aansprakelijk.
			
			<h5>*Nieuwsbrief</h5>
			Wij hebben een nieuwsbrief waarin we u informeren over <?php echo WEB_NAME; ?>. Om deze rond te kunnen mailen hebben wij persoonlijke gegevens zoals uw e-mail adres en naam nodig. Deze informatie zal zo veel mogelijk beveiligd worden bewaard. Deze gegevens zullen zo veel mogelijk beveiligd worden bewaard.
				
			<h5>*Advertenties</h5>
			Onze website maakt gebruik van advertenties van Google Adsense. Hier is de privacy statement van <a href="http://www.google.com/intl/nl/policies/privacy/">Google Adsense</a> van toepassing. Verder kunnen de verzamelde informatie niet inzien en zijn hiervoor niet aansprakelijk.
						
			<h5>*Sociale netwerken</h5>
			Wij hebben graag dat onze website vaker wordt bezocht. Mede hierom bieden we de mogelijkheid om ondermeer artikelen te delen op ondermeer Twitter en Facebook. De privacy statements van de gebruikte sociale netwerken zijn hier van toepassing. Wij kunnen uw persoonlijke informatie hier niet inzien.
			
			<h3>Derden</h3>
			Persoonsgegevens worden nooit met derden gedeeld anders dan die in dit document worden beschreven.
			
			<h3>Cookies</h3>
			Om deze website goed te laten functioneren, onze website te kunnen optimaliseren op uw beleving plaatsen wij kleine bestanden op uw computer (zogenoemde cookies) en analyseren wij het websitegebruik. Het merendeel  van de websites doet dit. Uitgebreidere informatie over cookies en hoe wij hiermee omgaan vind u in ons cookiestatement.
						
			<h3>Vaststelling en veranderingen</h3>
			Dit document is vastgesteld op <?php echo CHANGE_DATE; ?> en kan op ieder gewenst moment worden gewijzigd. Deze wijzigingen gaan per direct in. Wijzigingen worden op onze website gepubliceerd. 
			<div style="height: 5px;"></div>
			<button onClick="hide('privacy_nl')">Verberg</button>
		</div>
	</div>

	<div id="cookies_nl">
		<h1>Cookies</h1>
		<div class="info" style="font-size:13px;">
			<h3>Wat zijn cookies?</h3>
			Cookies zijn kleine bestanden die op uw computer worden opgeslagen. 
			
			<h3>Waar kunnen cookies voor worden gebruikt?</h3>
			Cookies kunnen voor verschillende dingen worden gebruikt. Een aantal voorbeelden zijn: 
				<ul>
					<li>Het analyseren van het gebruik van websites.</li>
					<li>Advertenties op een persoon afstemmen.</li>
					<li>Zorgen dat u berichten kunt delen op sociale media zoals Twitter en Facebook.</li>
				</ul>
			
			<h3>Waar gebruiken wij cookies voor, en welke diensten gebruiken wij?</h3>
				<ul>
					<li>Cookies voor functionaliteit van de website, om bijvoorbeeld uw gebruikersnaam te bewaren.</li>
					<li>Het analyseren van het gebruik van de website om deze optimaal te kunnen afstemmen op de gebruikers. Hiervoor gebruiken wij Google Analytics.</li>
					<li>Integratie met sociale netwerken door ondermeer tweets te laten zien en de mogelijkheid te bieden artikelen te delen. We ondersteunen ondermeer Facebook en Twitter.</li>
					<li>Het plaatsen van advertenties, hiervoor gebruiken we de Google Adsense dienst.</li> 
				</ul>
			
			<h3>Vaststelling en veranderingen</h3>
			Dit document is vastgesteld op <?php echo CHANGE_DATE; ?> en kan op ieder gewenst moment worden gewijzigd. Deze wijzigingen gaan per direct in. Wijzigingen worden op onze website gepubliceerd.		
			<div style="height: 5px;"></div>
			<button onClick="hide('cookies_nl')">Verberg</button>
		</div>
	</div>
	<div id="privacy_en">
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
			<button onClick="hide('privacy_en')">Hide</button>
		</div>
	</div>

	<div id="cookies_en">
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
			<button onClick="hide('cookies_en')">Hide</button>
		</div>
	</div>
</body>
</html>