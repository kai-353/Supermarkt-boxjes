from Client import Client
import led_on

client = Client("http://192.168.4.1/")

def turn_led_on():
    led_on.main()

def main():
    number_of_people = client.test()
    try:
        num_ppl = int(number_of_people)
        print(num_ppl)
        if num_ppl > 9:
            print("too many people")
        elif num_ppl == 9:
            turn_led_on()
            client.add()
        else:
            client.add()
            print("added")
    except ValueError:
        print("an error has occured")

if __name__ == "__main__":
    main()
