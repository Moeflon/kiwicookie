# kiwicookie
Dutch Cookie Law Script  
<sub>We are not responsable for any damage created or not prevented by this script</sub>
## Installation
Just copy the files into the root of your website. If .htaccess already exists, copy the contents of the kiwicookie htaccess and add it to the top of your existing file. 

```htaccess
RewriteEngine On
# Condition
RewriteCond %{HTTP_COOKIE} !kiwicookie=kiwicookieVal [NC]
# Just display cookie page, php will handle rest
RewriteRule . script/cookie.php [L]
```

Then chmod the folder 'log' (and its contents) inside 'script'  to `777`. 
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

### Apache Limitation
As for now, you cannot install this script on a non-apache server. This probably won't be a problem if you're hosting on a shared server, because those servers mostly run on apache. Nginx and LightHTTPd versions are coming soon.

## Details
### Does it work with my site?
Yes it does. It works on any website, including sites powered by CMS' like WordPress and Joomla. If you do however run into any problems, you can always post your error as an [issue on GitHub](https://github.com/kiwiboom/kiwicookie/issues).

### How does it work
Kiwicookie uses nothing more than htaccess and PHP. The htaccess file rewrites all calls to the PHP script, unless a cookie (ironically enough) was set by the PHP script. That PHP script informs the users that your site uses cookies and either redirects them to another page (if they refuse to accept) or sets a cookie (if they accept).

### Cookie Law
The script complies with the Dutch cookie regulation, which is an extreme version of the EU version. In contrast to the EU cookie regulation it forces you to use an opt-in instead of an opt-out. It's also required to ask permission for external tools like Google Analytics and Google AdSense. You cannot set any cookies before you have explicit permission. The only good way to do that is to place a wall before your website so that the visitor cannot visit the website before he accepts cookies and analytics tools.

### Statements and warnings
The Dutch law forces you to have a Privacy Statement, an explanation of the site's usage of Cookies and a cookie warning. We have integrated a sample of those three things in kiwicookie. You can change the name of the website and the effective date dislplayed in the statements in the config.php. If you need to edit more or if you need to edit the warning, you can do this in cookie.php. We are not responsible for the correctness and the completeness of neither your statements nor your warning.

### Multilingual
The statements and warnings we already described in the previous paragraph are delivered in Dutch, English and a version that shows both languages. You can choose which language to display to your users in the config file.

### Layout
The default theme is 'Oreo', but you can also switch to 'clean'. If your theme setting is set to 'clean', you can directly edit the css and html inside the lang folder. We are currently making more themes, but if you want to make one for us, please send it as a pull request. Themes are located inside the 'themes' folder (found in 'script/lang').

## License
This script uses the [Creative Commons Attribution-NonCommercial 3.0 Unported license](http://creativecommons.org/licenses/by-nc/3.0/legalcode). You can find an easy readable and clear explanation of the license [here](http://creativecommons.org/licenses/by-nc/3.0/). If you want to use this script for commercial purposes you can [contact us](mailto:info@lexerim.nl).