<?php require_once('_includes/popup-contactform.php'); ?>
<!DOCTYPE html>
<html lang="en">
<!-- 
  Author:       Robert Means
                Evergreen Web Design
  Contact:      robert@evergreenwebdesign.com
                (720) 319.8316
  Last Update:  November, 23, 2016
  Comments:     You look very nice today! :)
-->
<head>
  <meta charset="UTF-8">
  <title>Robert Means - Website Development Evergreen, Colorado</title>
  <link rel="icon" type="image/ico" href="_images/favicon.ico">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="I provide website concept, design, development and SEO services featuring current specifications within a responsive framework.">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="evergreenwebdesign.com/_scripts/coolclock-breakpoints.js?<?php echo time(); ?>"></script>
  <script src="evergreenwebdesign.com/_scripts/modernizr.js?<?php echo time(); ?>"></script> 
  <link rel="stylesheet" href="evergreenwebdesign.com/_css/style.css?<?php echo time(); ?>">

<!-- Google Analytics code -->
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-38678515-1', 'auto');
    ga('send', 'pageview');

  </script>
<!-- end Google Analytics code -->
</head>

<body onload="javascript:fg_hideform('fg_formContainer','fg_backgroundpopup');">
<div id="top-of-page"></div>
<div id="wrapper">

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<header id="intro">
<a class="mobile_menu"></a>
<nav id="mainNav">
  <div id="center-nav">
  <h2>Site Navigation</h2>
  <ul>
    <li><a href="#" class="first-nav-item no-active-nav back-to-top2"><i class="fa fa-angle-up"></i></a></li>
    <li><a href="#div-two" class="placeholder">services</a></li>
    <li><a href="#div-three" class="placeholder">about</a></li>
    <li><a href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");' class="last-nav-item">contact</a></li>
    <li><a class="first-nav-item no-active-nav large-screen-gone mobile_menu2"><i class="fa fa-times-circle"></i></a></li>
  </ul>
  </div>
</nav>

<div id="bg-div-one">
  <span id="greeting_bkg"></span>
  <noscript><img src="_images/sky.jpg" alt="blue sky"></noscript>
</div>
<section id="div-one">

<div id="clockScene">
  <div id="text-box" class="text-box-default cf">
  <canvas id="clockid" class="CoolClock clockid-default"></canvas>
  
  <h3>
    <span id="greeting"></span>
      <noscript>Hello,</noscript>
    </h3>

    <p><span id="now"></span><noscript>Now</noscript> is the perfect time to <a class="hmpg-contact" href='javascript:fg_popup_form("fg_formContainer","fg_form_InnerContainer","fg_backgroundpopup");'>contact Robert</a> and consult a professional about your online goals.</p>
    <p>With options to suit your vision, budget and deadline, let's tailor a solution for you right now!</p>

  </div>

  <article id="nameScene">
    <div id="EWD">
      <span class="title-text">Robert Means</span>
      <div id="website-solutions-badge" class="website-solutions-badge-default">
        <h2>Website Solutions</h2>
        <h4>Evergreen, Colorado</h4>
        </div>
      <div id="scrollDownSprite"><a href="#div-two" class="no-active-nav"></a></div>
    </div><!-- name -->
  </article>

</div><!-- #clockScene --> 
</section><!-- #div-one -->
</header>

<?php require ("evergreenwebdesign.com/_includes/services.php"); ?>
<?php require ("evergreenwebdesign.com/_includes/about.php"); ?>
<?php require ("evergreenwebdesign.com/_includes/backstretch.php"); ?>

</div><!-- #wrapper -->
<?php include "evergreenwebdesign.com/_includes/footer.php" ?>
<?php require_once('_includes/contactform-code.php'); ?>

<script type="text/javascript" src="evergreenwebdesign.com/_scripts/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="evergreenwebdesign.com/_scripts/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>