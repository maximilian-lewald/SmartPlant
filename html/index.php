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
    <title>Smart Plant</title>

    <!-- JavaScript -->
    <script src="./lib/jquery-3.4.1.min.js"></script>
  </head>

  <body>

    <?php require("./parts/header/_header.php") ?>
    <div class="content">
      <?php require("./parts/growcards/_growcards.php") ?>
    </div>
    <?php require("./parts/footer/_footer.php") ?>


    <!--  
      <div id="grow1" class="container">
        <form method="post" action="/">
          Sunrise:
          <input id="sunrise" type="time" name="sunrise" value={{sunrise_time}}>
          <br>Sunset:
          <input id="sunset" type="time" name="sunset" value={{sunset_time}}>
          <br>White:
          <input type="text" name="white" id="white" value={{value_white}}>
          <br>Red:
          <input type="text" name="red" id="red" value={{value_red}}>
          <br>Blue:
          <input type="text" name="blue" id="blue" value={{value_blue}}>
          <br>
          <input type="submit" name="submit_button" value="Abschicken">
        </form>
      </div> 
      <br>
      <div id="grow_image_live">
      <img src="{{ url_for('video_feed') }}">    

      <script>
      var currentTime = performance.now();
      //document.write("<img src="/static/grow_live.png"" + currentTime />);
      </script>

      <img src="/static/grow_live.png?currentTime" alt="Live image">

      <script>
      document.write(performance.now()+ "<br>");
      </script>
    -->

    <script src="./js/footer_functions.js"></script>
    <script src="./js/settings_functions.js"></script>
    <script>
      change_active_footer("index");
    </script>

  </body>
</html>
