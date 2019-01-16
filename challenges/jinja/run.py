#!/usr/bin/python

from flask import Flask, render_template, render_template_string, request

app = Flask(__name__)
with open("./flag", "rb") as f:
    flag = f.read()
app.config.update(FLAG=flag)


@app.route('/', methods=['GET', 'POST'])
def index():
    if request.method == 'POST':
        username = request.form['username']
        template = """
        <h1>Hello %s!</h1>
        """%username
        return render_template_string(template)

    elif request.method == 'GET':
        return render_template('login.html')


if __name__ == '__main__':
    app.run(host="0.0.0.0", port=9999)
