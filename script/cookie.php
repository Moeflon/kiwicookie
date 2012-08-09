<?php
// Real IP Finder
function find_ip() {
    foreach(array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
        if(array_key_exists($key, $_SERVER) === true) {
            foreach(explode(',', $_SERVER[$key]) as $ip) {
                if(filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                    return $ip;
                }
            }
        }
    }
}

// General vars
$currentDir = dirname(__FILE__);
include_once($currentDir."/config.php");

// Cookie vars
$cookieName = "kiwicookie";
$cookieVal = "kiwicookieVal";

// Check for cookie
if($_COOKIE[$cookieName] == $cookieVal) {
	// Permission Denied
	die("<h1>You shouldn't call this page directly.</h1>");
}

// Conditionvars
$req = explode("/", $_SERVER['REQUEST_URI']);
$lastReq = end($req);
$paramKey = "cookie_policy?";
$condition = strpos($lastReq, $paramKey);

// Condition
if($condition === false) {
	// No parameters supplied
	// We need to make this step and put the actual code in an else because of strpos
}
else {
	if($lastReq == "cookie_policy?a") {
		// Policy was accepted
		// Vars
		$domain = str_replace("www.", "", $_SERVER['HTTP_HOST']);
		$target = str_replace("/cookie_policy?a", "", $_SERVER['REQUEST_URI']);
		$clientIP = find_ip();
		$browserInfo = $_SERVER['HTTP_USER_AGENT'];
		$time = time();
		
		// Make it work on root
		if($_SERVER['REQUEST_URI'] == "/cookie_policy?a") {
			$target = "/";
		}

		// Logging
		if(KEEP_LOG == true) {
			if(file_exists($currentDir."/log/access.log")) {
				// Write to log
				$logLocation = $currentDir."/log/access.log";
				$fh = fopen($logLocation, 'a');
				$stringData = "$clientIP - $browserInfo - $time\n";
				fwrite($fh, $stringData);
				fclose($fh);
			}
			else {
				// Create log
				$logLocation = $currentDir."/log/access.log";
				$fh = fopen($logLocation, 'w');
				$stringData = "# Format: IP - BROWSER INFO - TIME (In Unix Timestamp a.k.a Epoch)\n";
				fwrite($fh, $stringData);
				fclose($fh);
				
				// Append to log
				$logLocation = $currentDir."/log/access.log";
				$fh = fopen($logLocation, 'a');
				$stringData = "$clientIP - $browserInfo - $time\n";
				fwrite($fh, $stringData);
				fclose($fh);
			}	
		}
		
		// Set cookie
		setcookie($cookieName, $cookieVal, time() + (20 * 365 * 24 * 60 * 60), "/", ".".$domain);
		
		// Redirect
		header("location: $target");
		return;
		
	}
	elseif($lastReq == "cookie_policy?d") {
		// Policy declined (what an idiot)
		header('location: '.REDIRECT_URL);
		return;
	}
}

// Make it work on root
if($_SERVER['REQUEST_URI'] == "/") {
	$current = "";
}
else {
	$current = $_SERVER['REQUEST_URI'];
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="nl" lang="nl">
<head>
	<title>Deze site gebruikt cookies</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js" type="text/javascript"></script>
	<style type="text/css">
		body {
			font-family: Helvetica;
		}
		
		h1 {
			margin: 0;
		}
		
		p {
			margin: 0;
		}
		
		.info {
			margin-top: 10px;
			width: 800px;
		}
		
		#buttons {
			margin-top: 10px;
		}
		
		#privacy {
			margin-top: 50px;
			display: none;
		}
		
		#cookies {
			margin-top: 50px;
			display: none;
		}
		h3 {
			margin-bottom:4px;
			margin-top: 8px;
			font-size: 15px;
		}
		ul {
			margin-top: 4px;
		}
		h5 {
			margin-bottom:2px;
			margin-top: 4px;
			font-size: 14px;
			color: gray;
		}
	</style>
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
	Om deze website goed te laten werken onze website te kunnen optimaliseren op uw beleving plaatsen wij kleine bestanden op uw computer (zogenaamde cookies) en analyseren wij het websitegebruik. Een zeer groot deel van de websites doen dit. Nieuwe wetgeving verplicht ons u hiervoor toestemming te vragen. U kunt <a href="#privacy" onClick="show('privacy');">hier</a> lezen hoe wij met uw privacy omgaan en <a href="#cookies" onClick='show("cookies");'>hier</a> kunt u meer informatie vinden over cookies.
	</div>
	
	<div id="buttons">
		<button onclick="window.location='<?php echo $current."/cookie_policy?a"; ?>'">Ik ga akkoord</button>
		<button onclick="window.location='<?php echo $current."/cookie_policy?d"; ?>'">Ik ga niet akkoord</button>
	</div>
	
	<div id="privacy">
		<h1>Privacy</h1>
		<div class="info" style="font-size:13px;">
			<h3>Privacy Statement, laatst aangepast op <?php echo CHANGE_DATE; ?></h3>
			<?php echo WEB_NAME; ?> heeft privacy hoog in het vaandel staan en doet daarom haar uiterste best om uw persoonsgegevens te beschermen. Ook zullen wij informatie nooit gebruiken anders dan voor het aangegeven doel. Hieronder ziet u hoe wij precies omgaan met uw privacy.
			
			<h3>Waar gebruiken wij uw persoonsgegevens voor?</h3>
			<h5>*Registratie</h5>
			Om onze diensten (optimaal) te gebruiken moet u zich registreren, bij deze registratie dient u persoonsgegevens te verstrekken. Deze informatie wordt beveiligd opgeslagen op onze servers.
			
			<h5>*Communicatie</h5>
			Als u contact met ons opneemt, is het mogelijk dat wij de correspondentie bewaren. Mocht het relevant zijn dan vragen wij om persoonlijke gegevens te vragen. Deze gegevens zullen zo veel mogelijk beveiligd worden bewaard.
			
			<h5>*Websitegebruik</h5>
			Om onze website optimaal te kunnen afstemmen op de bezoekers houden wij het surfgedrag van onze bezoekers bij. Zo weten wij welke pagina's het meest worden bekeken en vanuit welk land bezoekers komen. Om deze informatie te kunnen analyseren gebruiken wij bijvoorbeeld Google Analytics. Hier is daarom ook het privacy statement van <a href="http://www.google.com/policies/privacy/">Google Analytics</a> van toepassing. Verder kunnen de verzamelde informatie slechts gedeeltelijk inzien en zijn hiervoor niet aansprakelijk.
			
			<h5>*Nieuwsbrief</h5>
			Wij hebben een nieuwsbrief waarin we u op de hoogte houden van het wel en wee van <?php echo WEB_NAME; ?>, om deze rond te kunnen sturen hebben wij persoonlijke gegevens zoals uw e-mail adres en naam nodig. Deze informatie zal zo veel mogelijk beveiligd worden bewaard.
			
			<h5>*Advertenties</h5>
			Onze website maakt gebruik van advertenties van Google Adsense om uit de kosten te komen. Hier is de privacy statement van eerdergenoemde van toepassing. Wij kunnen uw persoonlijke informatie hier niet inzien.
			
			<h5>*Sociale netwerken</h5>
			Wij hebben natuurlijk graag dat onze website vaker wordt bekeken, mede hierom bieden we u de mogelijkheid om artikelen en dergelijke te delen op sociale netwerken zoals Twitter en Facebook. De privacy statements van de gebruikte sociale netwerken zijn hier van toepassing. Wij kunnen uw persoonlijke informatie hier niet inzien.
			
			<h3>Derden</h3>
			Persoonsgegevens worden enkel met derden gedeeld die in dit document worden beschreven alsook derden die later aan dit document worden toegevoegd. Wij zullen u informatie nooit aan andere derden verstrekken zonder eerst vooraf toestemming te hebben verkregen.
			
			<h3>Cookies</h3>
			Om deze website goed te laten werken onze website te kunnen optimaliseren op uw beleving plaatsen wij kleine bestanden op uw computer (zogenaamde cookies) en analyseren wij het websitegebruik. Een zeer groot deel van de websites doen dit. Uitgebreidere informatie over cookies en hoe wij hiermee omgaan vind u in ons cookiestatement.
			
			<h3>Vaststelling en veranderingen</h3>
			Dit document is vastgesteld op <?php echo CHANGE_DATE; ?> en kan op ieder gewenst moment worden gewijzigd. Deze wijzigingen gaan per direct en met terugwerkende kracht in. 
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