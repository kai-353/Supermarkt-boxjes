from gpiozero import Button
from Client import Client
import time

button = Button(2)

SERVER_IP = "http://192.168.x.xxx/"

client = Client(SERVER_IP)


def send_add_signal():
    client.sub()


print("File one __name__ is set to: {}" .format(__name__))
button.when_pressed = send_add_signal

while True:
    time.sleep(0.1)
