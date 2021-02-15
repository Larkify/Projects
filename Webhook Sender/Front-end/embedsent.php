<html>
  <head>
    <title>LarkX's Webook</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <h1>Unkown Error!</h1>
    <p>If this keeps happening, please contact <a href=https://discord.bio/p/larkx class=https://discord.bio/p/larkx>@larkx#0001</a> on Discord.</title>
    <br>
    <br>
  <head>
</html>
  <?php
    $content = $_POST['content'];
    $url = $_POST['url'];
    $title = $_POST['title'];
    $image = $_POST['image_url'];
    $thumbnail = $_POST['thumbnail_url'];
    $description = $_POST['description'];
    $footer = $_POST['footer'];

    // Where "REPLUSERNAME" is, replaced with your Repl Username.
    //                                    ||||||||||||
    $APILINK = 'https://Webhook-Embed-API.REPLUSERNAME.repl.co/sendwebhook?content=' . $content . '&title=' . $title . '&url=' . $url . '&description=' . $description . '&colour=&image=' . $image . '&thumbnail=' . $thumbnail . '&footer=' . $footer;

    //This only works if you also download the API
    
    header('Location: ' . $APILINK);
  ?>