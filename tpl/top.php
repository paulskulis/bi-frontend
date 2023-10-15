<!doctype html>
  <html lang="lv-LV">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/starter.css">
    <link rel="stylesheet" href="assets/css/site.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <!-- Unescaped URL:       <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css"> -->
    <?php 
    if (!isset($_COOKIE['acceptCookies'])) { 
      //If no cookies set, load Cookie Alert vendor css
      print("<link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/gh/Wruczek/Bootstrap-Cookie-Alert@gh-pages/cookiealert.css\">");
    }
    elseif(isset($_COOKIE['acceptCookies']) && $_COOKIE['acceptCookies'] == "true") {
      //Include analytics and other stuff here
    }
    ?>

    <title>Baltic Invest</title>
  </head>
  <body>
    <!-- Facebook SDK, placement as per vendor documentation -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v18.0" nonce="xVH0Jnfq"></script>
    
      <?php 
      if (!isset($_COOKIE['acceptCookies'])) {
        include('tpl/cookiealert.php'); //Save some bytes of unneeded DOM
      }

      include('tpl/header.php');
      ?>
      <div id="contentContainer">
