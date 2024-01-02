var archivos = require('fs');

archivos.unlink("cambiotexto.txt", function(err){
    if(err) throw err;
    console.log("Misión cumplida")
});
