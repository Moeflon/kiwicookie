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
		<div class="info">
		Toeter toeter toeter toeter toeter met Romana op de scooter.
		<br/><a href="#" onClick="hide('privacy')">Verberg</a>
		</div>
	</div>

	<div id="cookies">
		<h1>Cookies</h1>
		<div class="info">
		Boeter oeter oeter tsoeter toseter met Romsana op de scooter.
		<br/><a href="#" onClick="hide('cookies')">Verberg</a>
		</div>
	</div>
	
</body>
</html>