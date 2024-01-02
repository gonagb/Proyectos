var servidor = require ('http');
var ruta = require ('url');

servidor.createServer(function(req,res){
    res.writeHead(200,{'Content-Type':'text/html'});

    switch(req.url){
        case "/":
            res.write(`
            <meta charset="UTF-8">
            <form action="/procesa" method="POST">
                <input type="text" name="nombre">
                <br>
                <input type="email" name="email">
                <br>
                <input type="asunto" name="asunto">
                <br>
                <textarea name="mensaje"></textarea>
                <br>
                <input type="submit">
            </form>
            `)
        break;
        case "/procesa":
            console.log("voy a a procesar el formulario")
            let datos = '';
            req.on('data', parte => {
                datos += parte.toString();
            })
            req.on('end',()=>{
                console.log(datos)
            })
        break;
    }
    res.end("");

}).listen(80);