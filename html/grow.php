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
    <title>Grow 1</title>

    <!-- JavaScript -->
    <script src="./lib/jquery-3.4.1.min.js"></script>
  </head>

  <body>

    <?php require("./parts/header/_header.php") ?>

    <div class="titlebar">
      <div class="back_and_header">
        <a class="back_button" href="/index">
          <svg viewBox="0 0 137.26 251.8">
            <path d="M119.64,251.8a17.58,17.58,0,0,1-12.9-5.61L4.73,136.72a17.6,17.6,0,0,1,.14-24.16l102-107.1A17.62,17.62,0,0,1,132.4,29.77L41.84,124.85l90.69,97.31a17.62,17.62,0,0,1-12.89,29.64Z"/>
          </svg>
        </a>      
        <h1>Grow 1</h1>
      </div>
      
      <div class="pot_count">
        <svg viewBox="0 0 163.04 148.33">
          <path d="M152.53,49.61c-6.31,30.31-12.52,60.17-18.79,90-1.16,5.49-5,8.63-10.65,8.64q-41.34.1-82.68,0c-5.42,0-9.42-2.86-10.49-7.84Q20.26,95.53,10.84,50.54a3.82,3.82,0,0,1,.07-.93ZM6.35,0C1.48,0,.05,1.39,0,6.16Q0,19.08,0,32c0,4.51,1.56,6.09,6.12,6.09q75.38,0,150.74,0c4.66,0,6.12-1.61,6.13-6.45q0-12.35,0-24.69C163,1.14,161.87,0,156,0H81.91Q44.13,0,6.35,0Z"/>
        </svg>
        6
      </div> 

    </div> 

    <div class="content">  
      <div class="module_section">
        <div id="module_livecam" class="module">
          <svg viewBox="0 0 42.48 34.27">
            <path d="M42.48,8V31.8a3,3,0,0,1-3.16,2.46q-18.08,0-36.15,0a4.15,4.15,0,0,1-1-.09A2.83,2.83,0,0,1,0,31.2c0-7.49,0-15,0-22.47A3,3,0,0,1,2.8,5.57a2.54,2.54,0,0,1,.39,0c2.32,0,4.64,0,7,0a.63.63,0,0,0,.65-.37c.79-1.43,1.6-2.84,2.39-4.27A1.66,1.66,0,0,1,14.79,0h13a1.69,1.69,0,0,1,1.6,1c.77,1.44,1.57,2.85,2.35,4.28a.58.58,0,0,0,.58.35c2.36,0,4.73,0,7.09,0a4.17,4.17,0,0,1,1.52.31A2.85,2.85,0,0,1,42.48,8M10.79,18.37A10.46,10.46,0,1,0,21.23,7.89h0A10.46,10.46,0,0,0,10.79,18.37m5.23,0a5.23,5.23,0,1,0,5.24-5.22h0A5.24,5.24,0,0,0,16,18.35"/>
          </svg>
        </div>
        <div id="module_lighting" class="module">
          <svg  viewBox="0 0 47.91 47.91">
            <path d="M23.9,13.34A10.56,10.56,0,1,0,34.46,23.9h0A10.57,10.57,0,0,0,23.9,13.34m0-3.16a1.82,1.82,0,0,0,1.82-1.82V1.78a1.82,1.82,0,0,0-3.64,0V8.36a1.82,1.82,0,0,0,1.82,1.82h0m0,27.46a1.82,1.82,0,0,0-1.82,1.82V46a1.82,1.82,0,1,0,3.64.09V39.46a1.82,1.82,0,0,0-1.82-1.82M10.18,23.91a1.82,1.82,0,0,0-1.82-1.82H1.78a1.82,1.82,0,0,0,0,3.64H8.36a1.83,1.83,0,0,0,1.82-1.82h0M46,22.09H39.46a1.82,1.82,0,1,0-.08,3.64H46a1.82,1.82,0,1,0,.09-3.64H46M11.62,33.62,6.26,39a1.82,1.82,0,0,0,2.51,2.64.46.46,0,0,0,.07-.07l5.36-5.36a1.82,1.82,0,0,0-2.58-2.57M34.91,14.73a1.85,1.85,0,0,0,1.29-.53l5.36-5.36A1.82,1.82,0,1,0,39,6.2L39,6.26l-5.36,5.36a1.82,1.82,0,0,0,1.29,3.11M11.62,14.2a1.82,1.82,0,1,0,2.58-2.58L8.84,6.26A1.82,1.82,0,0,0,6.2,8.78l.06.06ZM36.19,33.62a1.82,1.82,0,0,0-2.57,2.57L39,41.56A1.82,1.82,0,0,0,41.62,39L41.56,39Z"/>
          </svg>
        </div>
      </div>
    </div>

    <?php require("./parts/footer/_footer.php") ?>

    <script src="./js/footer_functions.js"></script>
    <script>
      change_active_footer("index");
    </script>

  </body>
</html>
