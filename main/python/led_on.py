import RPi.GPIO as GPIO 

def main():
    GPIO.setmode(GPIO.BOARD)

    GPIO.setup(15, GPIO.OUT) 
    GPIO.setup(5, GPIO.OUT)

    GPIO.output(15,True)
    GPIO.output(5, False) 

if __name__ == "__main__":
    main()
