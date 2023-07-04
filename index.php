<!DOCTYPE html>
<html lang="es-ES">
  <head>
    <meta charset="utf-8">
	<title>Cine Colombia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js" integrity="sha256-xLD7nhI62fcsEZK2/v8LsBcb4lG7dgULkuXoXB/j91c=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./JS/custom.js"></script>
    <link rel="stylesheet" href="./dist/css/custom.css">
    </head>
	<body>
    <header>
        <div class="row menu">
            <div class="col-lg-3 logo">
                <img class=logo src="./dist/img/cinecolombia-logo.png"/>
            </div>
            <div class="col-lg-6">
                <ul class="lista1">
                    <li><a href="./template/index.php">Admin</a></li>
                    <li>Cartelera</li>
                    <li>Conocenos</li>
                    <li>Blog</li>
                    <li>Contactanos</li>
                </ul>
            </div>
            <div class="col-lg-3 redes">
                <ul>
                    <li><img src="./dist/img/Facebook.png"/></li>
                    <li><img src="./dist/img/Instagram.png"/></li>
                    <li><img src="./dist/img/TikTok.png"/></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portada">
                <img src="./dist/img/Elementos.jpeg"/>
                <div class="texto">
                    <h3>Los Elementos</h3>
                    <p>La historia está ambientada en una ciudad en donde los habitantes de el fuego, el agua, la tierra y el aire viven en armonía.</p>
                    <a href="https://www.youtube.com/watch?v=MgzHRIeaOL8" class="trailer">Iniciar Trailer</a>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="row">
            <div class="col-lg-12 titulo">
                <h3>Nuestros servicios</h3>
                <p>Estos son nuestros principales y mas increibles servicios, selecciona el que mas te guste.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-4 col-6 div">
                <img class="servicios-logo" src="./dist/img/domicilios.png"/>
                <h3>Cine en tu hogar</h3>
                <p>Elige el combo que desees y consiguelo desde la comodidad de tu casa con domicilio gratis.</p>
            </div>
            <div class="col-lg-4 col-6 div">
                <img class="servicios-logo" src="./dist/img/tarjeta-de-credito.png"/>
                <h3>Tarjeta Premium</h3>
                <p>Para nuestros clientes mas fieles tenemos la tarjeta premium con descuentos increibles.</p>
            </div>
            <div class="col-lg-4 col-6 div">
                <img class="servicios-logo" src="./dist/img/camara-de-video.png"/>
                <h3>Películas</h3>
                <p>Con nosotros podras ver los mejores lanzamientos en primera fila, dale clic y mira mas informacion.</p>
            </div>
        </div>
    </section>

    <section>
        <div class="row">
            <div class="col-lg-12 titulo">
                <h3>Estrenos</h3>
                <p>Aquí encuentras los mejores estrenos, ¡compra tu boleta ahora!</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <?php
            
            $host = "localhost"; 
            $db = "cinecolombia";
            $user = "root";
            $pass= "";
            $conn= mysqli_connect($host,$user,$pass,$db); 
            $query=mysqli_query($conn,"select * from peliculas");

            while($row=mysqli_fetch_array($query)){
            ?>
            <div class="col-lg-4 col-1 estrenos">
                <img class="peli" src="./template/<?php echo $row['img'];?>"/>
                <h3><?php echo $row['nombre'];?></h3>
                <h4>$ <?php echo $row['precio'];?></h4>
                <img class="estrellas" src="./dist/img/clasificacion.png"/>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <section>
        <div class="row fondo">
            <div class="col-lg-12 titulo1">
                <h3>Elige tu combo</h3>
                <p>Tenemos combos super especiales para ti.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row fondo">
            <?php

            $host = "localhost"; 
            $db = "cinecolombia";
            $user = "root";
            $pass= "";
            $conn= mysqli_connect($host,$user,$pass,$db); 
            $query=mysqli_query($conn,"select * from comidas");

            while($row=mysqli_fetch_array($query)){
            ?>
            <div class="col-lg-2 col-5 comid">
                <img class="comidimg" src="./template/<?php echo $row['img'];?>"/>
                <h3><?php echo $row['nombre'];?></h3>
                <h4>$ <?php echo $row['precio'];?></h4>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-12 titulo">
                <h3>Cartelera con descuentos</h3>
                <p>Tenemos estas carteleras con super descuentos, ¡Aprovecha ya!</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row">
            <?php

            $host = "localhost"; 
            $db = "cinecolombia";
            $user = "root";
            $pass= "";
            $conn= mysqli_connect($host,$user,$pass,$db); 
            $query=mysqli_query($conn,"select * from descuentos");

            while($row=mysqli_fetch_array($query)){
            ?>
            <div class="col-lg-2 col-5 desc">
                <img class="descimg" src="./template/<?php echo $row['img'];?>"/>
                <h3><?php echo $row['nombre'];?></h3>
                <h4>$ <?php echo $row['precio'];?></h4>
            </div>
            <?php
                }
            ?>
        </div>
    </section>
    <section>
        <div class="row">
            <div class="col-lg-12 titulo">
                <h3>Nuestros clientes</h3>
                <p>Estos son algunos de nuestros clientes y sus experiencias en cinecolombia.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row client">
            <div class="col-lg-6 cliente">
                <img class="perfil" src="./dist/img/usuario-de-perfil.png"/>
                <h3>Manuela Rua</h3>
                <h5>Cliente</h5>
                <p>Cinecolombia es increible tiene carteleras espectaculares y lo mejor a un buen precio.</p>
            </div>
            <div class="col-lg-6 cliente">
                <img class="perfil" src="./dist/img/usuario-de-perfil.png"/>
                <h3>Samuel Hachi</h3>
                <h5>Cliente</h5>
                <p>Ver tu pelicula favorita nunca ha sido tan increible como en cinecolombia y la atencion de maravilla.</p>
            </div>
            <div class="col-lg-6 cliente">
                <img class="perfil" src="./dist/img/usuario-de-perfil.png"/>
                <h3>Miguel Florez</h3>
                <h5>Cliente</h5>
                <p>Me encanta mucho cinecolombia porque encuentro una variedad de combos a bajos precios y tenemos muchos beneficios.</p>
            </div>
        </div>
    </section>
    <section>
        <div class="row fondo1">
            <div class="col-lg-12 inicio">
                <h3>Inicia sesion ahora y obten un 30% de descuento</h3>
                <h6>Registrate y obten beneficios y descuentos en nuestra pagina.</h6>
                <div class="form-group card-footer row">
                    <div class="col-sm-10 card-footer">
                      <input type="text" placeholder="correo electronico">
                      <button class="boton" type="submit" class="btn btn-info">Iniciar sesion</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>