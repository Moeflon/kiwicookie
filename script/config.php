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