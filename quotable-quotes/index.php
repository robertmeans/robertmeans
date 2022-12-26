<!DOCTYPE html>
<html lang="en">
<head>  
  <meta charset="UTF-8">
  <meta http-equiv="cache-control" content="no-cache">
  <meta http-equiv="pragma" content="no-cache">
  <meta http-equiv="expires" content="0">  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quotable Quotes</title>
  <link rel="icon" type="image/ico" href="../_images/quotable-favicon.ico">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Montserrat|Lato' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="style.css?<?php echo time(); ?>" type="text/css">
  
  <script src="../js/jquery-3.5.1.min.js"></script>
  <script src="../js/jquery_1-12-1_ui_min.js"></script>

  <script src="js/preload.js?<?php echo time(); ?>"></script>
</head>
<body>
<div class="preload">Loadin' - one sec...</div>
<div id="top-of-page"></div>
<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>
<div id="wrapper">
  <div class="quote-wrap">
    <div class="quote">Religion | Faith</div>
    <?php require 'religion-faith.php'; ?>

    <div class="quote">Exestentialism</div>
    <?php require 'exestentialism.php'; ?>

    <div class="quote">Miscellaneous</div>
    <?php require 'miscellaneous.php'; ?>
           
  </div><!-- #quote-wrap -->
</div>

<script src="js/scripts.js?<?php echo time(); ?>"></script>
<script src="http://localhost:35729/livereload.js"></script>
</body>
</html>