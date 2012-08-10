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

// Include content
if(LANG == "both") {
	include($currentDir."/lang/content/nl.php");
	include($currentDir."/lang/content/en.php");
}
else {
	include($currentDir."/lang/content/".LANG.".php");
}

include($currentDir."/lang/themes/".THEME."/".LANG.".php");
?>