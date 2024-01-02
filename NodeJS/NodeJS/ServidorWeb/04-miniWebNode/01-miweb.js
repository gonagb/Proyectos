var servidor = require('http');
var archivos = require('fs');

servidor.createServer(function(req, res){
    console.log("Alguien ha cargado la web");
    res.writeHead(200, {'content-type': 'text/html'});
    res.write("<h1> Hola mundo desde Node.js </h1>");
    res.write(`
        <ul>
            <li>
                <a href="/">Inicio</a>
            </li>  
            <li>
                <a href="/aboutme">Sober Mi</a>
            </li>
            <li>
                <a href="/contacto">Contacto</a>
            </li>                  
        </ul>
    `);


    switch(req.url){
        case "/":
            archivos.readFile('inicio.html',function(err,data){
                res.write(data);
                res.end("");
            });               
            break;
        case "/aboutme":
            archivos.readFile('aboutme.html',function(err,data){
                res.write(data);
                res.end("");
            }); 
            break;
        case "/contacto":
            archivos.readFile('contacto.html',function(err,data){
                res.write(data);
                res.end("");
            });
            break;
        default:
            res.end(" Página no encontrada ");
    }
}).listen(80);
