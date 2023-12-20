import openai
import os

class Chatbot:
    def __init__(self):
        openai.api_key = os.environ.get("")

    def get_response(self, input):
        prompt = f"Me: {input}\nBot:"
        response = openai.Completion.create(
            engine="davinci",
            prompt=prompt,
            max_tokens=1024,
            n=1,
            stop=None,
            temperature=0.5,
        )
        message = response.choices[0].text.strip()
        return message
