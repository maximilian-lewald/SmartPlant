import picamera, time
from PIL import Image
import PIL
from time import sleep

camera = picamera.PiCamera()

while 1:

    camera.capture('/static/grow_live.png')

    time.sleep(5)
