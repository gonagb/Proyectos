// Declaramos una función integrando varios parametros
function saluda(nombre,edad,email){
    cadena = "";
    cadena += "Me llamo "+nombre+".\n";
    cadena += "Tengo "+edad+" años\n"
    cadena += "Mi correo es "+email+"\n"
    return cadena;
}

// Llamamos al a función junto a los parametros
console.log(saluda("Goncho",27,"goncho@gonagb.com"));
console.log(saluda("Jose Vicente",45,"info@jocarsa.com"));
console.log(saluda("Teresa",25,"teresa@bocartdito.com"));