import paho.mqtt.publish as publish, datetime, time, json

MQTT_SERVER = "192.168.2.166"
MQTT_PATH_RED = "/growtent/led/red"
MQTT_PATH_BLUE = "/growtent/led/blue"
MQTT_PATH_WHITE = "/growtent/led/white"

sunrise = 7
sunset = 21
white = 1024
red = 1024
blue = 1024

while 1:
    f = open('lampValues.json')
    lampValues = json.load(f)
    print(lampValues['lamp']['sunrise'])
    f.close()
    time.sleep(1)

#	print('control....')
#	while 1:
#		print('aaa')
#		time.sleep(1)
#	if(datetime.datetime.now().hour < sunrise):
#		publish.single(MQTT_PATH_RED, '1024', hostname=MQTT_SERVER)
#		publish.single(MQTT_PATH_BLUE, '1024', hostname=MQTT_SERVER)
#		publish.single(MQTT_PATH_WHITE, '1024', hostname=MQTT_SERVER)
#	elif(datetime.datetime.now().hour >= sunrise and datetime.datetime.now().hour < sunset):
#		publish.single(MQTT_PATH_RED, red, hostname=MQTT_SERVER)
#                publish.single(MQTT_PATH_BLUE, blue, hostname=MQTT_SERVER)
#                publish.single(MQTT_PATH_WHITE, white, hostname=MQTT_SERVER)
#	else:
#		publish.single(MQTT_PATH_RED, '1024', hostname=MQTT_SERVER)
#                publish.single(MQTT_PATH_BLUE, '1024', hostname=MQTT_SERVER)
#                publish.single(MQTT_PATH_WHITE, '1024', hostname=MQTT_SERVER)
#	time.sleep(100)
#	e = threading.Event()
#t = continuous_threading.ContinuousThread(target=lamp_control)
#t.start()
#	e.wait(timeout=500)
