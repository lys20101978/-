# -*- coding: utf-8 -*-
"""
Spyder Editor

This is a temporary script file.
"""
from flask import Flask,render_template
app=Flask(__name__)
@app.route("/")
def start():
    name="liningsheg"
    return  render_template('index.html',name=name)
if __name__=='__main__':
    app.run(host="0.0.0.0",port=5000,debug=True)
