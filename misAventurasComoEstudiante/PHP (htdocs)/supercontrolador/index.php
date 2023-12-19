<!doctype html>
<html lang="en">
  <head>
    <script src="https://kit.fontawesome.com/49de1db798.js" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
<script 
    src="http://code.jquery.com/jquery-3.5.1.js"
    integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
    crossorigin="anonymous"></script> 
    <title>Dashboard Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/dashboard/">

    

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Company name</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sign out</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <span data-feather="home"></span>
              Dashboard
            </a>
          </li>
            <?php
                 $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
                $peticion = "SHOW TABLES";
                $resultado = mysqli_query($enlace,$peticion);
                while ($fila = $resultado->fetch_assoc()){
                    echo'
                        <li class="nav-item">
                            <a class="nav-link" href="?tabla='.$fila['Tables_in_cursoaplicacionesweb'].'">
                            <span data-feather="file"></span>
                            '.$fila['Tables_in_cursoaplicacionesweb'].'
                            </a>
                        </li>
                    ';
                    }
            ?>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          
          <?php
                 $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
                $peticion = "SHOW FULL TABLES IN cursoaplicacionesweb WHERE TABLE_TYPE LIKE 'view'";
                $resultado = mysqli_query($enlace,$peticion);
                while ($fila = $resultado->fetch_assoc()){
                    echo'
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                            <span data-feather="file-text"></span>
                            '.$fila['Tables_in_cursoaplicacionesweb'].'
                            </a>
                        </li>
                    ';
                    }
            ?>
          
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

      <canvas class="my-4 w-100" id="myChart" width="900" height="380"></canvas>

      <h2>Section title</h2>
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
             
              <?php 
              $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
              $peticion = "SHOW COLUMNS FROM ".$_GET['tabla'].";";
              $resultado = mysqli_query($enlace,$peticion);
                $contador = 0;
                $cabeceras;
              while($fila = $resultado->fetch_assoc()) {
                $cabeceras[$contador] = $fila['Field'];
                  echo '<th>'.$fila['Field'].'</th>';
                  $contador++;
              } 
            ?>
                <th>Ver</th>
                <th>Actualizar</th>
                <th>Eliminar</th>
            </tr>
          </thead>
          <tbody>
              
               <?php 
              $enlace = mysqli_connect("localhost", "cursoaplicacionesweb", "cursoaplicacionesweb", "cursoaplicacionesweb");
                $peticion = "SELECT * FROM ".$_GET['tabla'].";";
                $resultado = mysqli_query($enlace,$peticion );
              while($fila = $resultado->fetch_array()) {
                  echo'<tr>';
                  $contador = 0;
                  for($i=0;$i<count($fila)/2;$i++){

                    echo '<td cabecera ="'.$cabeceras[$contador].'" identificador='.$fila[0].'>'.$fila[$i].'</td>';
                    $contador++;
                    }
                  echo'<td><a href="ver.php?tabla='.$_GET['tabla'].'&id='.$fila[0].'"><i class="fa-solid fa-eye"></i></a></td>
                  <td><a href="actualizar.php?tabla='.$_GET['tabla'].'&id='.$fila[0].'"><i class="fa fa-refresh" aria-hidden="true"></i></a></td>
                  <td><a href="eliminar.php?tabla='.$_GET['tabla'].'&id='.$fila[0].'"><i class="fa fa-trash" aria-hidden="true"></i></a></td>';
                  echo'</tr>';
                }
              ?>
            
          </tbody>
        </table>
      </div>
        <div id="ajax"></div>
        <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" arial-label="Close">
                        <span aria-hidden="true"> &times;</span>    
                    </button>
                </div>    
                <div class="modal-body">
                    <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
        
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Small Modal</button>
    </main>
  </div>
</div>


      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="dashboard.js"></script>
      <script>
                var tabla = '<?php echo $_GET['tabla']?>'
                $("td").dblclick(function(){
                    $(this).attr("contenteditable","true");
                })
                $("td").blur(function(){
                    $(this).attr("contenteditable","false");
                    console.log("ahora voy a meter esto en la base de datos")
                    var valor = $(this).text()
                    console.log("el nuevo valor de la celda es :"+valor)
                    var identificador = $(this).attr("identificador")
                    console.log("el valor sobre el que voy a trabajar en la base de datos tiene el id:"+identificador)
                    var columna = $(this).attr("cabecera")
                    console.log("la columna es: "+columna)
                    console.log("y la tabla es: "+tabla)
                    $("#ajax").load("ajax.php?valor="+valor+"&identificador="+identificador+"&columna="+columna+"&tabla="+tabla) 
                    alert("tu registro se ha introducido en la base de datos")
                })
      
      </script>
  </body>
</html>
