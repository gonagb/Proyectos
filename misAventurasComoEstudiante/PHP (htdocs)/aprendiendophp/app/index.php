<?php include "conexionbd.php"; ?>

<!doctype html>
<html lang=es>
    <head>
        <link rel="StyleSheet" href="estilo/estilo.css">
        <script src="lib/jquery-3.6.1.min.js"></script>
        <script src="js/codigo.js"></script>
    </head>
    <body>
        <main>
            <header>
                <h1>Logo</h1>
                <img src="photo/perfil.png">
                <div id="destacado">
                    <img src="photo/humos.png">
                    <h2>Titulo</h2>
                    <h3>Subtitulo</h3>
                    <p>Descripcion</p>
                </div>
                </header>
            <div id="container">
                <section>
                    <h2>Cursos más vistos</h2>
                    <div class="botones">
                        <div class="botonredondo anterior">
                            >
                        </div>
                        <div class="botonredondo posterior">
                            >
                        </div>
                    </div>
                    <div class="ribbon">
                    <?php
                            include "conexionbd.php";
                            $peticion = "SELECT * FROM cursos 
                            ORDER BY visualizaciones DESC LIMIT 7";
                            $resultado = mysqli_query($conn,$peticion);
                            while ($row = $resultado->fetch_assoc()) {
                                echo ' <article>
                                <div class="contenido">
                                <div class="identificador" identificador="'.$row['id'].'"></div>
                                <img src="photo/'.$row['imagen'].'">
                                <h3>'.$row['nombre'].'</h3>
                                <h4>'.$row['frasedescriptiva'].'</h4>
                                <p>'.$row['descripcion'].'</p>
                                </div>
                            </article>
                            ';}
                            ?>
                   
                   
                </div>
            </section>
                <div class="detalles">
                    <img src="photo/perfil.png">
                    <h2>Titulo</h2>
                    <h3>Subtitulo</h3>
                    <p>Descripcion</p>
                    <button class="masinfo">Más información</button>
                </div>
                <section>
                    <h2>Algunos cursos que te pueden interesar</h2>
                    <div class="botones">
                        <div class="botonredondo anterior">
                           >
                        </div>
                        <div class="botonredondo posterior">
                            >
                        </div>
                    </div>
                    <div class="ribbon">
                    <?php                              
                            include "conexionbd.php";
                            $peticion = "SELECT * FROM cursos
                            ORDER BY RAND()
                            LIMIT 7";
                            $resultado = mysqli_query($conn,$peticion);
                            while ($row = $resultado->fetch_assoc()) {
                                echo ' <article>
                                <div class="contenido">
                                <div class="identificador" identificador="'.$row['id'].'"></div>
                                <img src="photo/'.$row['imagen'].'">
                                <h3>'.$row['nombre'].'</h3>
                                <h4>'.$row['frasedescriptiva'].'</h4>
                                <p>'.$row['descripcion'].'</p>
                                </div>
                            </article>
                            ';}
                            ?>
            </section>
                <div class="detalles">
                    <img src="photo/perfil.png">
                    <h2>Titulo</h2>
                    <h3>Subtitulo</h3>
                    <p>Descripcion</p>
                    <div class="infocurso">Descripcion</div>
                    <button class="masinfo">Más información</button>
                </div>
                <section>
                    <h2>Ultimos estrenos</h2>
                    <div class="botones">
                        <div class="botonredondo anterior">
                            >
                        </div>
                        <div class="botonredondo posterior">
                            >
                        </div>
                    </div>
                    <div class="ribbon">
                    <article>
                        <div class="contenido">
                        <img src="photo/html5logo.png">
                        <h3>HTML5</h3>
                        <h4>Descripcion</h4>
                        <p>algo de texto</p>
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/csslogo.png">
                        <h3>CSS3</h3>
                        <div class="infocurso">Descripcion</div>
                        <p>algo de texto</p>
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/js.png">
                        <h3>JavaScript</h3>
                        <div class="infocurso">Descripcion</div>
                        <p>algo de texto</p>
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/java-1.png">
                        <h3>JAVA</h3>
                        <div class="infocurso">Descripcion</div>
                        <p>algo de texto</p>
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/mysql-logo-square.jpg">
                        <h3>mySQL & SQLite</h3>
                        <div class="infocurso">Descripcion</div>
                        <p>algo de texto</p>
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/Photoshop.png">
                        <h3>Photoshop</h3>
                        <div class="infocurso">Descripcion</div>
                        <p>algo de texto</p>   
                        </div>
                    </article>
                    <article>
                        <div class="contenido">
                        <img src="photo/twitch.png">
                        <h3>Twitch</h3>
                        <h4>Descripcion</h4>
                        <p>algo de texto</p>
                        </div>
                    </article>
                </div>
            </section>
                <div class="detalles">
                    <img src="photo/perfil.png">
                    <h2>Titulo</h2>
                    <h3>Subtitulo</h3>
                    <p>Descripcion</p>
                    <button class="masinfo">Más información</button>
                </div>
                <div class="clearfix"></div>                
        </main>
    </body>
    </html>