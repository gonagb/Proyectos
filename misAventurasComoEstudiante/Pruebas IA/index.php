<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN jQuery--> 
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <!-- CDN Font Awesome-->

     <script src="https://kit.fontawesome.com/80f79e2c14.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" 
     integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" 
     crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Proyecto Final</title>
    <style>
            body{
              background:rgb(50,50,50);
              color:white;
              font-family: sans-serif;}
      
            #contenedor{width:300px;margin:auto;}
            .logo{width:300px;}

      
            input,button{width:100%;padding-top:10px;padding-bottom:10px;margin-top:20px;}
    </style>
</head>
<body>
    <div id="contenedor">
        <img class="logo" src="https://img.freepik.com/vector-gratis/vector-degradado-logotipo-colorido-pajaro_343694-1365.jpg">
        <input type="text" id="pregunta">
        <button id="envia">Enviar</button>
        <div id="respuesta"></div>

        <script>
            $("#envia").click(function(){
              console.log("ok")
              $("#respuesta").html('ok')
            $("#respuesta").html('<i class="fas fa-circle-notch fa-spin"></i>')
           $("#respuesta").load("openaiphp.php?pregunta="+encodeURI($("#pregunta").val()))
          })
        </script>
    </div>
    
</body>
</html>
