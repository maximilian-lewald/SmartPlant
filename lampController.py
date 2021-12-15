import paho.mqtt.publish as publish, datetime, time, json

MQTT_SERVER = "192.168.178.58"
MQTT_PATH_RED = "/growtent/led/red"
MQTT_PATH_BLUE = "/growtent/led/blue"
MQTT_PATH_WHITE = "/growtent/led/white"

sunrise = 7
sunset = 21
white = 1024
red = 1024
blue = 1024
time_now = 0
led_is_on = false

print(datetime.datetime.now().hour)

def datetime_now():
    return (datetime.datetime.now().hour * 100) + datetime.datetime.now().minute

def parseTimeFromStringToInt(time):
    return int(time[:-3]) * 100 + int(time[-2:])

def turnLightsOn():
    for i in range(100):
        publish.single(MQTT_PATH_RED, int((i/100.0)*red), hostname=MQTT_SERVER)
        publish.single(MQTT_PATH_BLUE, int((i*i/10000.0)*blue), hostname=MQTT_SERVER)
        publish.single(MQTT_PATH_WHITE, int((i/100.0)*white), hostname=MQTT_SERVER)
        print('.')
        time.sleep(0.02)

while 1:
    f = open('lampValues.json')
    lampValues = json.load(f)

    sunrise = parseTimeFromStringToInt(lampValues['lamp']['sunrise'])
    sunset = parseTimeFromStringToInt(lampValues['lamp']['sunset'])
    #sunset = int(lampValues['lamp']['sunset'])
    white = int(lampValues['lamp']['white'])
    red = int(lampValues['lamp']['red'])
    blue = int(lampValues['lamp']['blue'])
    f.close()

    time_now = datetime_now()

    if(sunrise > sunset):
        if(time_now >= sunrise or time_now <= sunset):
            #publish.single(MQTT_PATH_RED, red, hostname=MQTT_SERVER)
            #publish.single(MQTT_PATH_BLUE, blue, hostname=MQTT_SERVER)
            #publish.single(MQTT_PATH_WHITE, white, hostname=MQTT_SERVER)
            if(not led_is_on):
                led_is_on = true
                turnLightsOn()
#            print('turning on..')
        else:
            led_is_on = false
            publish.single(MQTT_PATH_RED, '0', hostname=MQTT_SERVER)
            publish.single(MQTT_PATH_BLUE, '0', hostname=MQTT_SERVER)
            publish.single(MQTT_PATH_WHITE, '0', hostname=MQTT_SERVER)
#            print('turning off..')
    elif(time_now >= sunrise and time_now < sunset):
        #publish.single(MQTT_PATH_RED, red, hostname=MQTT_SERVER)
        #publish.single(MQTT_PATH_BLUE, blue, hostname=MQTT_SERVER)
        #publish.single(MQTT_PATH_WHITE, white, hostname=MQTT_SERVER)
        if(not led_is_on):
            led_is_on = true
            turnLightsOn()
#        print('turning on..')
    else:
        led_is_on = false
        publish.single(MQTT_PATH_RED, '0', hostname=MQTT_SERVER)
        publish.single(MQTT_PATH_BLUE, '0', hostname=MQTT_SERVER)
        publish.single(MQTT_PATH_WHITE, '0', hostname=MQTT_SERVER)
#        print('turning off..')

    time.sleep(0.1)

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
