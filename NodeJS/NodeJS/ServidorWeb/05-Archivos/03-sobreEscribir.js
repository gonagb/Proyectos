var archivos = require('fs');

archivos.writeFile("nuevo.txt","Este es el contenido del nº2 del txt \n ", function(err){
    if(err) throw err;
    console.log("Misión cumplida")
});
