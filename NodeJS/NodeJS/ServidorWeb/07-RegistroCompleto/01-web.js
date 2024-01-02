var servidor = require('http');
var archivos = require('fs');
var ruta = require('url');
var fecha = require('date');


servidor.createServer(function(req,res){
   res.writeHead(200,{'Content-Type':'text/html'})
   var rutacompleta = ruta.parse(req.url,true)
   switch(req.url){
        case "/":
            archivos.readFile('inicio.html',function(err,data){
                res.write(data)
                res.end("")
            });
            break;
        case "/aboutme":
            archivos.readFile('aboutme.html',function(err,data){
                res.write(data)
                res.end("")
            });
            break;
        case "/contacto":
            archivos.readFile('contacto.html',function(err,data){
                res.write(data)
                res.end("")
            });
            break;
        default:
            res.end("Página no encontrada");
    } 
    if(req.url != "/favicon.ico"){
        archivos.appendFile("registro.txt",fecha.getFullYear()+", "+fecha.getMonth()+", "+fecha.getDay()+", "+fecha.getMinutes()+", "+fecha.getSeconds()+", "
        +rutacompleta.host+", "+rutacompleta.pathname+", "+rutacompleta.search+", "+req.url+"\n",function(err){
            if(err) throw err;
        })
    }
    
}).listen(80)