<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - TecnoStore</title>

    <link rel="stylesheet" href="../css/contactos.css">

    <!-- Iconos -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <!-- Fondo -->
    <div class="background">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>

    <!-- Contenedor -->
    <div class="container">
         <!-- Header -->
    <header class="header">
        <div class="logo">
            TecnoStore
        </div>
        <nav class="menu">
            <a href="../forms/inicio.php">Inicio</a>
            <a href="../forms/productos.php">Productos</a>
            <a href="../forms/servicios.php">Servicios</a>
            <a href="../forms/contactos.php">Contacto</a>
        </nav>
        <!-- Usuario -->
        <div class="user-session">
            <?php
                if(isset($_SESSION['nombre'])){
                    echo "
                    <span>👤 ".$_SESSION['nombre']."</span>
                    <a href='../logout.php' class='btn-logout'>
                        Cerrar Sesión
                    </a>
                    ";
                }else{
                    echo "
                    <span>👤 Invitado</span>
                    ";
                }
            ?>
        </div>
    </header>




        <!-- Titulo -->
        <div class="title">
            <h1>Contáctanos</h1>

            <p>
                Estamos listos para ayudarte con soluciones tecnológicas
            </p>
        </div>

        <!-- Contenido -->
        <div class="contact-wrapper">

            <!-- Información -->
            <div class="contact-info">

                <h2>Información de Contacto</h2>

                <div class="info-item">
                    <i class="fa-solid fa-location-dot"></i>

                    <div>
                        <h3>Dirección</h3>
                        <p>Av. Tecnología 123, Quito - Ecuador</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-phone"></i>

                    <div>
                        <h3>Teléfono</h3>
                        <p>+593 99 999 9999</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-envelope"></i>

                    <div>
                        <h3>Correo</h3>
                        <p>info@tecnostore.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="fa-solid fa-clock"></i>

                    <div>
                        <h3>Horario</h3>
                        <p>Lunes a Viernes: 08:00 - 18:00</p>
                    </div>
                </div>

            </div>

            <!-- Mapa -->
            <div class="map-container">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d997.4695014036617!2d-78.46783843036769!3d-0.18065389998861998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d59a7f2e4b1d2d%3A0x4c1b3d1e5d0b4b4!2sQuito%2C%20Ecuador!5e0!3m2!1ses!2sec!4v1710000000000!5m2!1ses!2sec"
                    allowfullscreen=""
                    loading="lazy">
                </iframe>

            </div>

        </div>

    </div>

    <!-- Botón WhatsApp -->
    <a href="https://wa.me/593999999999"
        class="whatsapp-btn"
        target="_blank">

        <i class="fa-brands fa-whatsapp"></i>

    </a>

</body>

</html>