from gpiozero import Button
from Client import Client
import time

button = Button(17)

client = Client("http://192.168.4.1/")


def send_add_signal():
    print(client.add())


print("File one __name__ is set to: {}" .format(__name__))
button.when_pressed = send_add_signal

while True:
    time.sleep(0.1)
