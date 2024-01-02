var servidor = require('http');
var fecha = require('date');

servidor.createServer(function(req,res){
    res.writeHead(200,{'content-type':'text/html'})
    res.write("Hola mundo desde Node.js");
    res.end(" "+fecha.getFullYear()+" ")
    console.log("Alguien ha cargado la web")
}).listen(80)