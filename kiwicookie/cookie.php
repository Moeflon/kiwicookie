<?php
// Stop errors from showing (PHP 5.3)
error_reporting(0);

// Real IP Finder
function find_ip() {
	// Loop true ip-related keys
    foreach(array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key) {
    	// Check if array key exists on server
        if(array_key_exists($key, $_SERVER) === true) {
        	// Loop true each and every supplied key and check if it's an IP
            foreach(explode(',', $_SERVER[$key]) as $ip) {
            	// Check if IP
                if(filter_var($ip, FILTER_VALIDATE_IP) !== false) {
                	// Return value (finally)
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

// Detect iPhone for theme
function isMobile() {   
    if(preg_match('/(alcatel|amoi|android|avantgo|blackberry|benq|cell|cricket|docomo|elaine|htc|iemobile|iphone|ipaq|ipod|j2me|java|midp|mini|mmp|mobi|motorola|nec-|nokia|palm|panasonic|philips|phone|sagem|sharp|sie-|smartphone|sony|symbian|t-mobile|telus|up\.browser|up\.link|vodafone|wap|webos|wireless|xda|xoom|zte)/i', $_SERVER['HTTP_USER_AGENT']) && !preg_match('/(ipad)/i', $_SERVER['HTTP_USER_AGENT'])) {
    return true;
}
else
    return false;
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
	include($currentDir."/lang/nl.php");
	include($currentDir."/lang/en.php");
}
else {
	include($currentDir."/lang/".LANG.".php");
}

// Support new and old themes
if(file_exists($currentDir."/themes/".THEME."/".LANG.".php")) {
	include($currentDir."/themes/".THEME."/".LANG.".php");
} 
else {
	include($currentDir."/themes/".THEME."/index.php");
}
?>