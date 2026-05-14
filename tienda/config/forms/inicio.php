<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechStore</title>
    <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>
    <!-- Fondo Animado -->
    <div class="background">
        <div class="circle"></div>
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    <!-- Contenedor Principal -->
    <div class="container">
        <!-- Header -->
    <header class="header">
        <div class="logo">
            TecnoStore
        </div>
        <nav class="menu">
            <a href="#">Inicio</a>
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
        <!-- Hero -->
        <section class="hero">
            <div class="hero-text">
                <h2>Tecnología a otro nivel</h2>
                <p>
                    Encuentra laptops, celulares, accesorios,
                    soporte técnico y soluciones digitales
                    para potenciar tu vida.
                </p>
                <button>Explorar Productos</button>
            </div>
            <div class="hero-image">
                <img src="https://cdn-icons-png.flaticon.com/512/1055/1055687.png" alt="">
            </div>
        </section>
        <!-- Productos -->
        <section class="products">
            <h2>Productos Destacados</h2>
            <div class="cards">
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">
                    <h3>Laptop Gamer</h3>
                    <p>
                        Alto rendimiento para gaming y trabajo profesional.
                    </p>
                    <span>$1200</span>
                    <button>Comprar</button>
                </div>
                 <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">
                    <h3>Laptop Gamer</h3>
                    <p>
                        Alto rendimiento para gaming y trabajo profesional.
                    </p>
                    <span>$1200</span>
                    <button>Comprar</button>
                </div>
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/545/545245.png">
                    <h3>Smartphone</h3>
                    <p>
                        Tecnología avanzada y máxima velocidad.
                    </p>
                    <span>$850</span>
                    <button>Comprar</button>
                </div>
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/686/686589.png">
                    <h3>Audífonos Pro</h3>
                    <p>
                        Sonido envolvente y cancelación de ruido.
                    </p>
                    <span>$150</span>
                    <button>Comprar</button>
                </div>
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/686/686589.png">
                    <h3>Audífonos Pro</h3>
                    <p>
                        Sonido envolvente y cancelación de ruido.
                    </p>
                    <span>$150</span>
                    <button>Comprar</button>
                </div>
                <div class="card">
                    <img src="https://cdn-icons-png.flaticon.com/512/686/686589.png">
                    <h3>Audífonos Pro</h3>
                    <p>
                        Sonido envolvente y cancelación de ruido.
                    </p>
                    <span>$150</span>
                    <button>Comprar</button>
                </div>


            </div>
        </section>
    </div>
</body>
</html>