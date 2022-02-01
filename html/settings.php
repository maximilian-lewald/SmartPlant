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
    <title>Settings</title>

    <!-- JavaScript -->
    <script src="./lib/jquery-3.4.1.min.js"></script>
  </head>

  <body>

    <?php require("./parts/header/_header.php") ?>
    <div class="content">
      <?php require("./parts/settingscards/_settingscards.php") ?>
      <?php require("./parts/impressumcard/_impressumcard.php") ?>
    </div>
    <?php require("./parts/footer/_footer.php") ?>


    <script src="./js/footer_functions.js"></script>
    <script>
      change_active_footer("settings");
    </script>

  </body>
</html>
