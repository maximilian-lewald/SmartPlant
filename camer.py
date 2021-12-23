import picamera, time
from PIL import Image
import PIL
from time import sleep

camera = picamera.PiCamera()

while 1:

    camera.capture('image.jpg')

    time.sleep(5)
