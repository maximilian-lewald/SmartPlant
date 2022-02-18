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
    <title>Lighting</title>

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
        <h1>Lighting</h1>
      </div>
    </div> 

    <div class="content">  
      <div id="sunrise_sunset">
        <div id="sunrise" class="sunrise_sunset_element">
          <h3>Sunrise</h3>
          <div class="timepicker_with_icon">
            <svg viewBox="0 0 47.91 47.91">
              <path d="M23.9,13.34A10.56,10.56,0,1,0,34.46,23.9h0A10.57,10.57,0,0,0,23.9,13.34m0-3.16a1.82,1.82,0,0,0,1.82-1.82V1.78a1.82,1.82,0,0,0-3.64,0V8.36a1.82,1.82,0,0,0,1.82,1.82h0m0,27.46a1.82,1.82,0,0,0-1.82,1.82V46a1.82,1.82,0,1,0,3.64.09V39.46a1.82,1.82,0,0,0-1.82-1.82M10.18,23.91a1.82,1.82,0,0,0-1.82-1.82H1.78a1.82,1.82,0,0,0,0,3.64H8.36a1.83,1.83,0,0,0,1.82-1.82h0M46,22.09H39.46a1.82,1.82,0,1,0-.08,3.64H46a1.82,1.82,0,1,0,.09-3.64H46M11.62,33.62,6.26,39a1.82,1.82,0,0,0,2.51,2.64.46.46,0,0,0,.07-.07l5.36-5.36a1.82,1.82,0,0,0-2.58-2.57M34.91,14.73a1.85,1.85,0,0,0,1.29-.53l5.36-5.36A1.82,1.82,0,1,0,39,6.2L39,6.26l-5.36,5.36a1.82,1.82,0,0,0,1.29,3.11M11.62,14.2a1.82,1.82,0,1,0,2.58-2.58L8.84,6.26A1.82,1.82,0,0,0,6.2,8.78l.06.06ZM36.19,33.62a1.82,1.82,0,0,0-2.57,2.57L39,41.56A1.82,1.82,0,0,0,41.62,39L41.56,39Z"/>
            </svg>
            <input class="timepicker" type="time" value="05:00" required>
          </div>
        </div>
        <div id="sunset" class="sunrise_sunset_element">
          <h3>Sunset</h3>
          <div class="timepicker_with_icon">
            <svg viewBox="0 0 24.96 33.58">
              <path d="M18.12,27.58A15.26,15.26,0,0,1,18.12,6h0A15.1,15.1,0,0,1,25,2.12a16.79,16.79,0,1,0,0,29.34,15.2,15.2,0,0,1-6.84-3.88"/>
            </svg>
            <input class="timepicker" type="time" value="21:00" required>
          </div>
        </div>
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
