'''
from flask import Flask, request
from flask_ngrok import run_with_ngrok
from chatbot import Chatbot
import openai
import os

app = Flask(__name__)
run_with_ngrok(app)

openai.api_key = os.environ.get("OPENAI_API_KEY")

chatbot = Chatbot()

@app.route("/")
def home():
    return "Hello, World!"

@app.route("/chatbot", methods=["POST"])
def chatbot_response():
    user_input = request.form["text"]
    response = chatbot.get_response(user_input)
    return response

if __name__ == "__main__":
    app.run()
'''