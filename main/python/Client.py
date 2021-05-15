import requests
# import json


class Client:
    def __init__(self, endpoint):
        self.session = requests.Session()
        self.endpoint = endpoint

    def add(self):
        res = self.session.get(url="{}/add.php".format(self.endpoint))

        if res.status_code == 200:
            return True
        else:
            return False

        #     result = json.loads(res.text)["succes"]
        #     return result

    def sub(self):
        res = self.session.get(url="{}/sub.php".format(self.endpoint))

        if res.status_code == 200:
            return True
        else:
            return False

        #     result = json.loads(res.text)["succes"]
        #     return result

    # depricated
    def test(self):
        self.session.get(url="{}/test.php".format(self.endpoint))

        # if res.status_code == 200:
        #     result = json.loads(res.text)[0][0]["aantal"]
        #     return result
