from flask import Flask, render_template, request
#import paho.mqtt.publish as publish

#MQTT_SERVER = "192.168.178.58"
#MQTT_PATH = "/growtent/led/red"

app = Flask(__name__)
@app.route('/', methods=['GET', 'POST'])

def index():
        if request.method == 'POST':
#                publish.single(MQTT_PATH, "hello", hostname=MQTT_SERVER)
                print("Hello")
#       return render_template('index.html')
        return "Hello"

if __name__ == '__main__':
    app.run(debug=True, host='0.0.0.0')
