var servidor = require('http');
var ruta = requier('url');

servidor.createServer(function(req,res){
    res.writeHead(200,{'content-type':'text/html'})
    res.end("<h1> Hola mundo desde Node.js </h1>")
    res.end(req.url)
    
    var parametros = ruta.parse(req.url,true).query;+
        res.write("Tu nombre es"+parametros.nombre);
        res.write("<br>");
        res.write("Tus apellidos son"+parametros.apellidos);
        res.end("OK");

    console.log("Alguien está en la web");
}).listen(80)