var servidor = require('http');

servidor.createServer(function(req,res){
    res.writeHead(200,{'content-type':'text/html'})
    res.end("Hola mundo desde Node.js")
    console.log("Alguien ha cargado la web")
}).listen(80)