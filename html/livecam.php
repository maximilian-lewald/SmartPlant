<!DOCTYPE html>
<html>
  <head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8" name="viewport" content="width=device-width; initial-scale=1.0;" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

    <!-- CSS -->
    <link rel="stylesheet" href='./css/main.css' name="viewport" content="width=[widest centered div];"/>

    <!-- HTML Site Information -->
    <link rel="icon" type="image/ico" href="./assets/smartplant_icon_round.png">
    <link rel="apple-touch-icon" sizes="128x128" href="./assets/smartplant_icon_round.png"/>
    <title>Live Cam</title>

    <!-- JavaScript -->
    <script src="./lib/jquery-3.4.1.min.js"></script>
  </head>

  <body>

    <?php require("./parts/header/_header.php") ?>

    <div class="titlebar">
      <div class="back_and_header">
        <a class="back_button" href="/grow">
          <svg viewBox="0 0 137.26 251.8">
            <path d="M119.64,251.8a17.58,17.58,0,0,1-12.9-5.61L4.73,136.72a17.6,17.6,0,0,1,.14-24.16l102-107.1A17.62,17.62,0,0,1,132.4,29.77L41.84,124.85l90.69,97.31a17.62,17.62,0,0,1-12.89,29.64Z"/>
          </svg>
        </a>      
        <h1>Live Cam</h1>
      </div>  
    </div> 

    <div class="content">  
      <div id="livecam" >
        <div id="image"></div>
      </div>
    </div>

    <?php require("./parts/footer/_footer.php") ?>

    <script src="./js/footer_functions.js"></script>
    <script src="./js/settings_functions.js"></script>
    <script>
      change_active_footer("index");
    </script>

  </body>
</html>
