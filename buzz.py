import RPi.GPIO as GPIO
import time
GPIO.setmode(GPIO.BCM)
GPIO.setup(18, GPIO.OUT)
GPIO.output(18, GPIO.HIGH)
print "BUZZ"
time.sleep(0.2)
GPIO.output(18,GPIO.LOW)
GPIO.cleanup()
