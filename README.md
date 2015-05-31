# kiwicookie
Dutch Cookie Law Script  
<sub>We are not responsable for any damage created or not prevented by this script</sub>    

## Installation
Just copy the files into the root of your website. If .htaccess already exists, copy the contents of the kiwicookie htaccess and add it to the top of your existing file. 

```htaccess
RewriteEngine On
# Condition

# Uncomment and edit this is you have errors on your subdomains, you will need to setup kiwicookie on the subdomain seperately 
# RewriteCond %{HTTP_HOST} !^yoursubdomain.yourdomain.yourextention$ [NC]

# Uncomment this if you want to rewrite the root but the htacces isn't inside root
# RewriteBase / 

RewriteCond %{HTTP_COOKIE} !kiwicookie=kiwicookieVal [NC]
RewriteCond %{HTTP_USER_AGENT} !AltaVista
RewriteCond %{HTTP_USER_AGENT} !Googlebot
RewriteCond %{HTTP_USER_AGENT} !msnbot
RewriteCond %{HTTP_USER_AGENT} !Slurp
RewriteCond %{REQUEST_URI} !theme
# Just display cookie page, php will handle rest
RewriteRule . kiwicookie/cookie.php [L]
```

If you're using nginx, you need to put the code below in your virtualhost or default config depending on your server setup. (I think most of the nginx users are smart enough to understand this, if not use Google.)

```nginx
if ($http_cookie !~ "kiwicookie=kiwicookieVal") {
  rewrite ^(.*)$ /kiwicookie/cookie.php break;
}
```

Then chmod the folder 'log' (and its contents) inside 'script' to 664 (or if that doesn't work, try 775 (could potentially be dangerous if your server is not setup correctly)).
There are a few configuration options in the file config.php, located in the 'script' folder. You can edit these options as you like.

```php
<?php
# Redirect if user declines
define("REDIRECT_URL", "http://google.com");

# Keep log of people that accepted? (Don't forget to set permissions for the log folder to 777)
define("KEEP_LOG", true);

# Name of your website
define("WEB_NAME", "kiwicookie");

# Date on wich last changes were applied
define("CHANGE_DATE", "9/8/2012");

# Choose language
# Choises:
# nl (Dutch)
# en (English)
# both (Both languages are displayed for multilingual sites)
define("LANG", "nl");

# Choose a theme, themes are available in the themes folder, found inside 'lang'
# Default theme is 'Oreo', if you set 'clean' as theme, the files inside lang (en.php, nl.php, both.php and css/style.php) will be loaded. You can edit these files to make them match your website layout.
define("THEME", "oreo");
?>
```

### Apache/Nginx Limitation
As for now, you cannot install this script on a non-apache/nginx server. This probably won't be a problem if you're hosting on a shared server, because those servers mostly run on apache. A LightHTTPd version is coming soon.

## Details
### Preview
You can find 3 links below, one for Dutch, one for English and one for both. Note that the preview scripts don't remember if you have already accepted the agreement. This is because we want you to be able to test the different languages. (The real kiwicookie does remember if users agree.)
The theme used in these examples is the default theme 'Oreo', you can find a list of all themes including screenshots [here](https://github.com/moeflon/kiwicookie/wiki/Current-Themes).    

### Does it work with my site?
Yes it does. It works on any website, including sites powered by CMS' like WordPress and Joomla. If you do however run into any problems, you can always post your error as an [issue on GitHub](https://github.com/kiwiboom/kiwicookie/issues).

### How does it work
Kiwicookie uses nothing more than htaccess and PHP. The htaccess file rewrites all calls to the PHP script, unless a cookie (ironically enough) was set by the PHP script. That PHP script informs the users that your site uses cookies and either redirects them to another page (if they refuse to accept) or sets a cookie (if they accept).

### Cookie Law
The script complies with the Dutch cookie regulation, which is an extreme version of the EU version. In contrast to the EU cookie regulation it forces you to use an opt-in instead of an opt-out. It's also required to ask permission for external tools like Google Analytics and Google AdSense. You cannot set any cookies before you have explicit permission. The only good way to do that is to place a wall before your website so that the visitor cannot visit the website before he accepts cookies and analytics tools.

### Statements and warnings
The Dutch law forces you to have a Privacy Statement, an explanation of the site's usage of Cookies and a cookie warning. We have integrated a sample of those three things in kiwicookie. You can change the name of the website and the effective date displayed in the statements in the config.php. If you need to edit more or if you need to edit the warning, you can do this in the language file of your choice. We are not responsible for the correctness and the completeness of neither your statements nor your warning.

### Multilingual
The statements and warnings we already described in the previous paragraph are delivered in Dutch, English and a version that shows both languages. You can choose which language to display to your users in the config file.

### Layout
The default theme is 'Oreo', but you can also switch to 'clean' and 'cloreo'. We are currently making more themes, but if you want to make one for us, please send it as a pull request. Themes are located inside the 'themes' folder (found in 'kiwicookie').    
[Learn how to make themes for kiwicookie](https://github.com/moeflon/kiwicookie/wiki/Create-Themes)    
[List of delivered themes](https://github.com/moeflon/kiwicookie/wiki/Current-Themes)

## License
This script uses [our own license](https://raw.github.com/moeflon/kiwicookie/master/LICENSE). If you want to use this script for commercial purposes you can [contact us](mailto:info@lexerim.com).
