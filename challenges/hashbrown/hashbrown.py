from hashlib import md5, sha1, sha256
from flask import Flask, render_template, request
import time

app = Flask(__name__)


def hash(text):
    h = md5(text).hexdigest()
    h = sha1(h).hexdigest()
    h = sha256(h).hexdigest()
    return h

def hashcash(prob, text):
    return prob in hash(text)
'''
while 1:
#for i in xrange(9999999):
    s = str(uuid.uuid4())
    if hashcash('c0dbeef', s ):#str(i)):
        print s
        break
'''

html = '''
<html>
<head>
    <title>Hash Catsh</title>
</head>
    <body>
        <p>
        You know OOP blockchain assignment last year? <br>
        Solve hash cash ! and Get CryptoCurrency ! and Flag<br>
        Do not brute force ! Wait 3 seconds.<br>
        My hash cash problem<br><br><br>

        <strong>c0dbeef</strong> string in hash result<br><br><br>

        Example<br>
        hash("9cfc01df-a704-4368-a29c-84e350ea4cff")<br>
        -><br>
        93d23db47bd8123993c1065a47104050<strong>c0dbeef</strong>dfc6739cab3472f17bf6da4ed<br><br><br><br>
        def hash(text):<br>
            h = md5(text).hexdigest()<br>
            h = sha1(h).hexdigest()<br>
            h = sha256(h).hexdigest()<br>
            return h<br>
        </p>
        
        <a href = "https://d2.naver.com/helloworld/8237898">similar HashCash</a>
        <form action="/check" method="post">
            <input type="text" name = "text">
            <input type="submit" value = "check">
        </form>
    </body>
</html>
'''

@app.route('/')
def index():
    return html

@app.route('/check', methods=['POST'])
def check():
    time.sleep(3)
    text = request.form['text']
    h = hash(text)
    if h == '93d23db47bd8123993c1065a47104050c0dbeefdfc6739cab3472f17bf6da4ed':
        return 'Do Not Input Example'
    if hashcash('c0dbeef', text):
        return 'Success! <br> flag is --------------BLINDED------------------'
    return 'Fail! <br> No No Code It!'

if __name__ == '__main__':
    app.run()
