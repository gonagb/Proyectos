<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="lib\jquery-3.6.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $(document).mousemove(function(e){
                $("#contenedor").html(e.pageX+","+e.pageY)
            })
        })

    </script>
    <title>Registrador</title>
</head>
<body>
    <div id="contenedor"></div>
</body>
</html>