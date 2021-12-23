import picamera
from PIL import Image
import PIL
from time import sleep

while 1:
    camera = picamera.PiCamera()
    camera.capture('image.jpg')

    time.sleep(5)
