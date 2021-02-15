<html>
  <head>
            <title>LarkX's Webhook</title>
            <link rel="stylesheet" href=style.css />
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta content='https://media.discordapp.net/attachments/705020851606519919/810338048762970112/larkpcz1.png' property='og:image'>
            <meta name="twitter:title" content="LarkX's Webhook Sender">
            <meta content="Developed by LarkX & SAOX" property="og:site_name">
            <meta name="twitter:description" content="This is a Discord Webhook sender that has a clean & user friendly interface that's developed by LarkX & SAOX. This allows you to send embeds to your Discord server making your server seemless. Click the link and check it out!">
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
            <meta name="description" content="This is a Discord Webhook sender that has a clean & user friendly interface that's developed by LarkX & SAOX. This allows you to send embeds to your Discord server making your server seemless. Click the link and check it out!">
     </head>
  <body>
    <form action="embedsent.php" method="POST">

      <h4>Authorisation</h4>
      <input name="url" placeholder="Webhook URL" style="width:1000px; height: 60px;" type="password" id="url" type="url">
      <p style="height: 10px;" required>
      </p>  
     
      <h4>Embed</h4>

      <input name='content' style='display: inline; width: 1000px; height: 60px;' placeholder="Message Content">
      <p style="height: 1px;" id="content">
      </p>
      <input name='title' style='width: 1000px; height: 60px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;' placeholder="Title">
      <textarea name="description" placeholder="Description" style="width:1000px; height: 300px; border-top-left-radius: 0px; border-top-right-radius: 0px;"></textarea>
      <p style="height: 1px;";>
      </p>  
      <input name='footer' style='width: 1000px; height: 60px;' placeholder="Footer">
      <p style="height: 1px;">
      </p> 
      <h4>Images</h4>
      <input name='image_url' style='width: 1000px; height: 60px; border-bottom-left-radius: 0px; border-bottom-right-radius: 0px;' placeholder="Image URL    (Remove ?width=...&height=...)">
      <input name='thumbnail_url' style='width: 1000px; height: 60px; border-top-left-radius: 0px; border-top-right-radius: 0px;' placeholder="Thumbnail URL     (Remove ?width=...&height=...)">
      <p style="height: 10px;">
      </p>
      <input type="submit" value="Send Embed" style="width:1000px; height: 60px;">
    </form>
    <div id="footer">
    Created with ❤ by <a href="http://github.com/larkify/">LarkX</a>
  </div>

    <table align="center" width="100%" cellpadding="0" cellspacing="0" border="0"> 
  </body>
</html>

