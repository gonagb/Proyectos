var servidor = require ('http');
var ruta = require ('url');
var formularios = require ('formidable'); // npm install formidable

servidor.createServer(function(req,res){
    res.writeHead(200,{'Content-Type':'text/html'});

    switch(req.url){
        case "/":
            res.write(`
            <form action="/procesa" method="POST">
                <input type="text" name="nombre">
                <input type="submit">
            </form>
            `)
        break;
        case "/procesa":
            console.log("voya a procesar el formulario")
            var formulario = new formularios.IncomingForm();
            formulario.parse(req,function(err,fields,files){
                console.log(fields)
            })
        break;
    }
    res.end("");

}).listen(80);