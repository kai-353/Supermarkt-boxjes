from pexpect import pxssh
from gpiozero import Button
import time

button = Button(17)

def send_sub_signal():
    s = pxssh.pxssh()
    s.login("192.168.4.1", "pi", "admin")
    s.sendline("python /var/www/python/sub.py")  # run a command
    s.prompt()             # match the prompt
    print(s.before)         # print everything before the prompt.
    s.logout()

print("File one __name__ is set to: {}" .format(__name__))
button.when_pressed = send_sub_signal

while True:
    time.sleep(0.1)