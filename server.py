from flask import Flask, render_template, request, Response
from camera import Camera
import paho.mqtt.publish as publish, json

MQTT_SERVER = "192.168.178.58"
MQTT_PATH = "/growtent/led/red"
lampValues = {}

app = Flask(__name__)
@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        lampValues['lamp'] = {'sunrise': request.form['sunrise'], 'sunset': request.form['sunset'], 'white': request.form['white'], 'red': request.form['red'], 'blue': request.form['blue']}
        with open('/home/pi/SmartPlant/lampValues.json', 'w') as f:
            json.dump(lampValues, f)
    return render_template('index.html',
    sunrise_time = json.load(open('/home/pi/SmartPlant/lampValues.json'))['lamp']['sunrise'],
    sunset_time = json.load(open('/home/pi/SmartPlant/lampValues.json'))['lamp']['sunset'],
    value_white = json.load(open('/home/pi/SmartPlant/lampValues.json'))['lamp']['white'],
    value_red = json.load(open('/home/pi/SmartPlant/lampValues.json'))['lamp']['red'],
    value_blue = json.load(open('/home/pi/SmartPlant/lampValues.json'))['lamp']['blue'])

def gen(camera):
    while True:
        frame = camera.get_frame()
        yield (b'--frame\r\n'
               b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')

@app.route('/video_feed')
def video_feed():
    return Response(gen(Camera()),
                    mimetype='multipart/x-mixed-replace; boundary=frame')

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
