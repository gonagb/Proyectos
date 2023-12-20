
import sys
import openai

#print(sys.argv)
openai.api_key = ""
prompt = sys.argv[1]
response = openai.Completion.create(

 engine="text-davinci-002",

 prompt=prompt,

 max_tokens=50

)

print(response.choices[0].text)

#print(response)