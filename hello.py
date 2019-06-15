from flask import Flask,render_template
app=Flask(__name__)

@app.route("/")
def hello():
    a='a templates'
    b='b'
    return render_template('index.html',a=a,b=b)
if __name__=='__main__':
    app.run(host='0.0.0.0',port=5000,debug=True)
