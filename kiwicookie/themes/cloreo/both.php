<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <title><?php echo WEB_NAME; ?> - Cookies</title>
    <link rel="stylesheet" href="<?php echo SCRIPT_ROOT; ?>/themes/cloreo/stylesheets/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <!--[if lt IE 9]>
      <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <style>
      .hidden_en {
        display: none;
      }
      
      .hidden_nl {
        display: none;
      }
    </style>
    <script>
      function show_nl() {
        $('#bottomhr_nl').css('margin-bottom', '20px');
        $('.hidden_en').fadeOut(0);
        $('.hidden_nl').fadeIn(500);
        $('section').css('height', 'auto');
      }
      function show_en() {
        $('#bottomhr_nl').css('margin-bottom', '20px');
        $('.hidden_nl').fadeOut(0);
        $('.hidden_en').fadeIn(500);
        $('section').css('height', 'auto');
      }
    </script>
  </head>
  <body>
    <div class="wrapper">
    <?php if(isMobile()): ?>
        <section style="height: 100%; margin-top: -2px;">
    <?php else: ?>
      <section style="height: auto; margin-top: 40px;">
    <?php endif; ?>

    <!-- Dutch -->
    <h2><?php echo EN_WARNING_TITLE1; ?></h2>
      <p><?php echo EN_WARNING_P1; ?></p>
    <?php if(isMobile()): ?>
      <hr/>
        <div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 100%;" id="links">
          <a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo EN_WARNING_ACCEPT; ?></a>
          <a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo EN_WARNING_DECLINE; ?></a><br/>
        </div>
      <hr/>
    <?php else: ?>
      <div style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:20px;">
      </div>
        <div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 350px;" id="links">
          <a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo EN_WARNING_ACCEPT; ?></a>
          <a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo EN_WARNING_DECLINE; ?></a><br/>
        </div>
      <div id="bottomhr_en" style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;">
      </div>
    <?php endif; ?>
    
    <div style="border: none; border-bottom: solid 1px black; margin-top: 20px; margin-bottom:20px;opacity:0.1;"></div>
    
    <!-- Dutch -->
    <h2><?php echo NL_WARNING_TITLE1; ?></h2>
      <p><?php echo NL_WARNING_P1; ?></p>
    <?php if(isMobile()): ?>
      <hr/>
        <div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 100%;" id="links">
          <a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo NL_WARNING_ACCEPT; ?></a>
          <a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo NL_WARNING_DECLINE; ?></a><br/>
        </div>
      <hr/>
    <?php else: ?>
      <div style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:20px;">
      </div>
        <div style="margin: 0 auto; margin-top: -15px; margin-bottom: 5px; width: 350px;" id="links">
          <a style="float: left;" href="<?php echo $current."/cookie_policy?a"; ?>"><?php echo NL_WARNING_ACCEPT; ?></a>
          <a style="float: right;" href="<?php echo $current."/cookie_policy?d"; ?>"><?php echo NL_WARNING_DECLINE; ?></a><br/>
        </div>
      <div id="bottomhr_nl" style="background: url('http://kiwiboom.github.com/kiwicookie/images/hr.gif');border: 0;height: 11px;margin-bottom:-20px;">
      </div>
    <?php endif; ?>
    
    <!-- English -->
    <div class="hidden_en">
      <div id="privacy">
        <h2><?php echo EN_PRIVACY_TITLE1; ?></h2>
          <?php echo EN_PRIVACY_P1; ?>
        <br/><br/>			
        <h3 style="margin-bottom:-10px;"><?php echo EN_PRIVACY_TITLE2; ?></h3>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE3; ?></h4>
            <?php echo EN_PRIVACY_P3; ?>					
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE4; ?></h4>
            <?php echo EN_PRIVACY_P4; ?>	
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE5; ?></h4>
            <?php echo EN_PRIVACY_P5; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE6; ?></h4>
            <?php echo EN_PRIVACY_P6; ?>				
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE7; ?></h4>
            <?php echo EN_PRIVACY_P7; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE8; ?></h4>
            <?php echo EN_PRIVACY_P8; ?>			
          <h3 style="margin-top: 10px; margin-bottom:-3px;"><?php echo EN_PRIVACY_TITLE9; ?></h3>
            <?php echo EN_PRIVACY_P9; ?>			
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE10; ?></h4>
            <?php echo EN_PRIVACY_P10; ?>			
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_PRIVACY_TITLE11 ?></h4>
            <?php echo EN_PRIVACY_P11; ?>
      </div>
      
      <hr style="margin-top: 20px;"/>
      
      <div id="cookies_en">
        <h2 style="margin-top: 15px;"><?php echo EN_COOKIES_TITLE1; ?></h2>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_COOKIES_TITLE2; ?></h4>
            <?php echo EN_COOKIES_P2; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_COOKIES_TITLE3; ?></h4>
            <?php echo EN_COOKIES_P3; ?>
                     <ul>
                  <li><?php echo EN_COOKIES_LI1; ?></li>
                  <li><?php echo EN_COOKIES_LI2; ?></li>
                  <li><?php echo EN_COOKIES_LI3; ?></li>
                </ul>		
              <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_COOKIES_TITLE4; ?></h4>
                <ul>
                  <li><?php echo EN_COOKIES_LI4; ?></li>
                  <li><?php echo EN_COOKIES_LI5; ?></li>
                  <li><?php echo EN_COOKIES_LI5; ?></li>
                  <li><?php echo EN_COOKIES_LI6; ?></li>
                </ul>		
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo EN_COOKIES_TITLE5; ?></h4>
            <?php echo EN_COOKIES_P5; ?>
      </div>
    </div>
    
    <!-- Dutch -->
    <div class="hidden_nl">
      <div id="privacy_nl">
        <h2><?php echo NL_PRIVACY_TITLE1; ?></h2>
          <?php echo NL_PRIVACY_P1; ?>
        <br/><br/>			
        <h3 style="margin-bottom:-10px;"><?php echo NL_PRIVACY_TITLE2; ?></h3>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE3; ?></h4>
            <?php echo NL_PRIVACY_P3; ?>					
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE4; ?></h4>
            <?php echo NL_PRIVACY_P4; ?>	
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE5; ?></h4>
            <?php echo NL_PRIVACY_P5; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE6; ?></h4>
            <?php echo NL_PRIVACY_P6; ?>				
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE7; ?></h4>
            <?php echo NL_PRIVACY_P7; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE8; ?></h4>
            <?php echo NL_PRIVACY_P8; ?>			
          <h3 style="margin-top: 10px; margin-bottom:-3px;"><?php echo NL_PRIVACY_TITLE9; ?></h3>
            <?php echo NL_PRIVACY_P9; ?>			
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE10; ?></h4>
            <?php echo NL_PRIVACY_P10; ?>			
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_PRIVACY_TITLE11 ?></h4>
            <?php echo NL_PRIVACY_P11; ?>
      </div>
      
      <hr style="margin-top: 20px;"/>
      
      <div id="cookies_nl">
        <h2 style="margin-top: 15px;"><?php echo NL_COOKIES_TITLE1; ?></h2>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_COOKIES_TITLE2; ?></h4>
            <?php echo NL_COOKIES_P2; ?>
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_COOKIES_TITLE3; ?></h4>
            <?php echo NL_COOKIES_P3; ?>
                <ul>
                  <li><?php echo NL_COOKIES_LI1; ?></li>
                  <li><?php echo NL_COOKIES_LI2; ?></li>
                  <li><?php echo NL_COOKIES_LI3; ?></li>
                </ul>		
              <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_COOKIES_TITLE4; ?></h4>
                <ul>
                  <li><?php echo NL_COOKIES_LI4; ?></li>
                  <li><?php echo NL_COOKIES_LI5; ?></li>
                  <li><?php echo NL_COOKIES_LI5; ?></li>
                  <li><?php echo NL_COOKIES_LI6; ?></li>
                </ul>		
          <h4 style="margin-bottom: -3px; margin-top: 10px;"><?php echo NL_COOKIES_TITLE5; ?></h4>
            <?php echo NL_COOKIES_P5; ?>
      </div>
    </div>
  </body>
</html>