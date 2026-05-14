<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Tecnológicos</title>

    <link rel="stylesheet" href="../css/servicios.css">
</head>

<body>

    <!-- Fondo Animado -->
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

        <!-- Encabezado -->
        <div class="title">
            <h1>Nuestros Servicios</h1>

            <p>
                Soluciones tecnológicas profesionales para empresas y usuarios
            </p>
        </div>

        <!-- Grid Servicios -->
        <div class="services-grid">

            <!-- Servicio 1 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2921/2921222.png">

                <h3>Soporte Técnico</h3>

                <p>
                    Diagnóstico y solución de problemas de hardware y software.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 2 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721297.png">

                <h3>Desarrollo Web</h3>

                <p>
                    Creación de páginas web modernas y sistemas personalizados.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 3 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/1006/1006771.png">

                <h3>Redes y Servidores</h3>

                <p>
                    Configuración y mantenimiento de redes empresariales.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 4 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/1048/1048953.png">

                <h3>Seguridad Informática</h3>

                <p>
                    Protección de sistemas y prevención de amenazas digitales.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 5 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2721/2721269.png">

                <h3>Diseño UI/UX</h3>

                <p>
                    Interfaces modernas y experiencias atractivas para usuarios.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 6 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png">

                <h3>Marketing Digital</h3>

                <p>
                    Estrategias digitales para aumentar presencia y ventas.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 7 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/3063/3063822.png">

                <h3>Cloud Computing</h3>

                <p>
                    Implementación y administración de servicios en la nube.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 8 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/2881/2881142.png">

                <h3>Aplicaciones Móviles</h3>

                <p>
                    Desarrollo de apps Android y iOS de alto rendimiento.
                </p>

                <button>Más Información</button>
            </div>

            <!-- Servicio 9 -->
            <div class="card">
                <img src="https://cdn-icons-png.flaticon.com/512/3523/3523887.png">

                <h3>Consultoría IT</h3>

                <p>
                    Asesoramiento profesional para transformación digital.
                </p>

                <button>Más Información</button>
            </div>

        </div>

    </div>

</body>

</html>