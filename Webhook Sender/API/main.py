from discord_webhooks import DiscordWebhooks
from flask import Flask, render_template, request, send_file, make_response, redirect, url_for

app = Flask(__name__)

@app.route('/sendwebhook')
def webhooksend():
  titlea = request.args.get('title')
  descriptiona = request.args.get('description')
  urla = request.args.get('url')
  contenta = request.args.get('content')
  footera = request.args.get('footer')
  colour = request.args.get('colour')
  image = request.args.get('image')
  thumbnaila = request.args.get('thumbnail')


  webhook = DiscordWebhooks(urla)
  webhook.set_content(content=contenta, title=titlea, description=descriptiona, color=colour)
  webhook.set_image(url=image)
  webhook.set_thumbnail(url=thumbnaila)
  webhook.set_footer(text=footera)
  webhook.send()
  
  # Change this to your "send.php" page from the frontend.
  # To keep this online, use uptimerobot and copy the url.
  return redirect('https://webhook.larkx.xyz/send.php')

app.run(host='0.0.0.0', port=8080)