from flask import Flask, render_template, request
import paho.mqtt.publish as publish, json

MQTT_SERVER = "192.168.178.58"
MQTT_PATH = "/growtent/led/red"
lampValues = {}

app = Flask(__name__)
@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        publish.single(MQTT_PATH, request.form['sunrise'], hostname=MQTT_SERVER)
        lampValues['lamp'] = {'sunrise': request.form['sunrise'], 'sunset': 0,'red': 0, 'blue': 0, 'white': 0}
        with open('lampValues.json', 'w') as f:
            json.dump(lampValues, file)
    return render_template('index.html')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
