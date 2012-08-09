<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<title>Deze site gebruikt cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<?php include("$currentDir/lang/css/style.php"); ?>
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
	Om deze website goed te laten werken onze website te kunnen optimaliseren op uw beleving plaatsen wij kleine bestanden op uw computer (zogenaamde cookies) en analyseren wij het websitegebruik. Een zeer groot deel van de websites doen dit. Nieuwe wetgeving verplicht ons u hiervoor toestemming te vragen. U kunt <a href="#privacy" onClick="show('privacy');">hier</a> lezen hoe wij met uw privacy omgaan en <a href="#cookies" onClick='show("cookies");'>hier</a> kunt u meer informatie vinden over cookies.</div>
	
	<div id="buttons">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'">Ik ga akkoord</button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'">Ik ga niet akkoord</button>
	</div>
	
	<div id="privacy">
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
			<button onClick="hide('privacy')">Verberg</button>
		</div>
	</div>

	<div id="cookies">
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
			<button onClick="hide('cookies')">Verberg</button>
		</div>
	</div>
	
</body>
</html>