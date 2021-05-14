from Client import Client
import led_on

client = Client("http://192.168.4.1/")

def turn_led_on():
    led_on.main()

def main():
    print("File one __name__ is set to: {}" .format(__name__))
    number_of_people = client.test()
    print(number_of_people)
    try:
        num_ppl = int(number_of_people)
	print(num_ppl)
        if num_ppl > 9:
            print("too many people")
            print("didn't add")
        if num_ppl == 9:
            client.add()
            turn_led_on()
            print("added")
        else:
            client.add()
            print("added")
    except ValueError:
        print("an error has occured")

if __name__ == "__main__":
    main()
