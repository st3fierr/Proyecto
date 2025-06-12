<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Trivago México</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body class="index" onload="reproducirAudio()">
    <div class="navbar">
        <img src="img/Trivagologo.png" alt="Logo" class="logo">
        <nav>
            <a href="index.php">Inicio</a>
            <a href="viajes.php">Viajes</a>
            <a href="registro.php">Registrarse</a>
        </nav>
    </div>

    <main>
        
        <div class="video-centro">
            <h1>Cada viaje una nueva historia, cada destino una nueva aventura.Hotel Trivago</h1>
            <div class="imagen-central">
        <img src="img/cancun.png" alt="Imagen Central Trivago">
        <div class="texto-hover">Descubre destinos increíbles</div>
    </div>
            <p>Compara precios y reserva tu hotel ideal en todo México.</p>
            <video width="720" height="440" controls alt="trivago">
                <source src="mp3_mp4/Video.mp4" type="video/mp4">
                Tu navegador no soporta el video.
            </video>
        </div>
        <br>

        
        <center><a href="https://www.trivago.com.mx" class="boton">Explorar destinos</a></center>
    </main>

    <section class="galeria">
        <div class="item">
            <img src="img/los cabos.avif" alt="Los Cabos">
            <p>Escapada a Los Cabos<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></p>
        </div>
        <div class="item">
            <img src="img/cancun.png" alt="Playa">
            <p>Descubre Cancun<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></p>
        </div>
        <div class="item">
            <img src="img/mazatlan.png" alt="Mazatlan">
            <p>Relájate en Mazatlan<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></p>
        </div>
    </section>

    <section class="listado">
        <h3>Opciones destacadas</h3>
        <ul>
            <li>Viaje a Tepito<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></li>
            <li>Tour por Cocula<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></li>
            <li>Escapada a Mazatlan<?php if(isset($_SESSION['vip']) && $_SESSION['vip']) echo " - VIP"; ?></li>
        </ul>
        <audio id="AudioTrivago" controls autoplay>
            <source src="mp3_mp4/Hotel Trivago.mp3" type="audio/mpeg">
            Tu navegador no soporta audio.
        </audio>
        <img class="gif" src="img/GIF trivaGo.gif" alt="Mi GIF" >
    </section>
    
</body>
</html>