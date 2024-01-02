var servidor = require('http');
var archivos = requier('fs');

servidor.createServer(function(req,res){
    archivos.readFile('inicio.html',function(err,data){
 
        res.writeHead(200,{'content-type':'text/html'});
        res.write(data);
        res.end("");

    });
   
    console.log("Alguien está en la web");
}).listen(80)