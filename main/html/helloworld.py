import RPi.GPIO as GPIO 

def main():
    print("hi")
    GPIO.setmode(GPIO.BOARD)

    GPIO.setup(15, GPIO.OUT)
    GPIO.setup(5, GPIO.OUT)

    GPIO.output(15,True)
    GPIO.output(5, False)

print("File one __name__ is set to: {}" .format(__name__))

if __name__ == "__main__":
     main()
