
function zeroFill( number, width )
{
    width -= number.toString().length;
    if (width > 0 )
    {
        return new Array( width + (/\./.test( number )
        ? 2 : 1) ).join('0') + number;
    }   
return number + ""; // always return a string
}
var img = new Array();
    for(var i = 1;i<=64;i++){
    img[i] = new Image();img[i].src =
    "img/"+zeroFill(i,4)+".png";
    }
contexto =
document.getELementById("lienzo").getContext("2d");
contador = 1;
for(var y = O;y<8;y++){
    for(var x = 0;x<8;x++){

        contexto.drawImage(img[contador],x*256, y*256)
        contador++;

}
}