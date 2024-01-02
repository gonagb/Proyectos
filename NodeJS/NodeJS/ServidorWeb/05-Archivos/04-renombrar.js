var archivos = require('fs');

archivos.rename("nuevo.txt","cambiotexto.txt", function(err){
    if(err) throw err;
    console.log("Misión cumplida")
});
