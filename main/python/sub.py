from Client import Client
from pexpect import pxssh
import led_off


def turn_led_off():
    led_off.main()


client = Client("http://192.168.4.1/")

print("File one __name__ is set to: {}" .format(__name__))
number_of_people = client.test()


try:
    num_ppl = int(number_of_people)
    print(num_ppl)
    if num_ppl > 9:
        turn_led_off()
    if num_ppl != 0:
        client.sub()
except ValueError:
    print("an error has occured")

