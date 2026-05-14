<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos - TecnoStore</title>

    <link rel="stylesheet" href="../css/productos.css">
    

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

    <!-- CONTENEDOR -->
    <div class="container">

        <!-- HEADER -->
        <header class="header">

            <div class="logo">
                TecnoStore
            </div>

            <nav class="menu">
                <a href="#">Inicio</a>
                <a href="#">Productos</a>
                <a href="#">Servicios</a>
                <a href="#">Contacto</a>
            </nav>

            <!-- Carrito -->
            <div class="cart-icon">

                <i class="fa-solid fa-cart-shopping"></i>

                <span class="cart-count">
                    3
                </span>

            </div>

        </header>

        <!-- TITULO -->
        <div class="title">

            <h1>Productos Destacados</h1>

            <p>
                Descubre nuestra colección tecnológica
            </p>

        </div>

        <!-- PRODUCTOS -->
        <div class="products-grid">

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                <h3>Laptop Gamer</h3>

                <p>
                    Potencia extrema para gaming y edición profesional.
                </p>

                <span>$1200</span>

                <button
                    class="add-cart"
                    data-name="Laptop Gamer"
                    data-price="1200"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/545/545245.png">

                <h3>Smartphone Pro</h3>

                <p>
                    Máxima velocidad y cámara de alta resolución.
                </p>

                <span>$899</span>

                <button
                    class="add-cart"
                    data-name="Smartphone Pro"
                    data-price="899"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/686/686589.png">

                <h3>Audífonos Pro</h3>

                <p>
                    Sonido envolvente y cancelación inteligente.
                </p>

                <span>$180</span>

                <button
                    class="add-cart"
                    data-name="Audífonos Pro"
                    data-price="180"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/3659/3659898.png">

                <h3>Smart Watch</h3>

                <p>
                    Controla tu salud y notificaciones.
                </p>

                <span>$250</span>

                <button
                    class="add-cart"
                    data-name="Smart Watch"
                    data-price="250"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/3659/3659784.png">

                <h3>Tablet HD</h3>

                <p>
                    Pantalla ultra HD para entretenimiento.
                </p>

                <span>$420</span>

                <button
                    class="add-cart"
                    data-name="Tablet HD"
                    data-price="420"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

            <!-- PRODUCTO -->
            <div class="card">

                <img src="https://cdn-icons-png.flaticon.com/512/942/942748.png">

                <h3>Teclado RGB</h3>

                <p>
                    Diseño mecánico y luces RGB.
                </p>

                <span>$95</span>

                <button
                    class="add-cart"
                    data-name="Teclado RGB"
                    data-price="95"
                    data-image="https://cdn-icons-png.flaticon.com/512/2920/2920277.png">

                    <i class="fa-solid fa-cart-plus"></i>
                    Agregar al carrito

                </button>

            </div>

        </div>

    </div>

    <!-- CARRITO -->
    <!-- BOTON FLOTANTE CARRITO -->
    <div class="floating-cart-btn" id="openCart">

        <i class="fa-solid fa-cart-shopping"></i>

        <span id="cartCounter">
            0
        </span>

    </div>

    <!-- CARRITO FLOTANTE -->
    <div class="cart-window" id="cartWindow">

        <!-- HEADER -->
        <div class="cart-header">

            <h2>
                <i class="fa-solid fa-cart-shopping"></i>
                Carrito
            </h2>

            <button class="close-cart" id="closeCart">
                <i class="fa-solid fa-xmark"></i>
            </button>

        </div>

        <!-- ITEMS -->
        <div class="cart-items" id="cartItems">

            <!-- Productos agregados dinámicamente -->

        </div>

        <!-- FOOTER -->
        <div class="cart-footer">

            <h3>
                Total:
                <span id="cartTotal">
                    $0
                </span>
            </h3>

            <button class="btn-checkout">
                Finalizar Compra
            </button>

        </div>

    </div>

    <script>
        const cartWindow = document.getElementById("cartWindow");
        const openCart = document.getElementById("openCart");
        const closeCart = document.getElementById("closeCart");

        const cartItemsContainer = document.getElementById("cartItems");
        const cartCounter = document.getElementById("cartCounter");
        const cartTotal = document.getElementById("cartTotal");

        let cart = [];

        /* =========================
        ABRIR / CERRAR
        ========================= */

        openCart.addEventListener("click", () => {

            if(cartWindow.style.display === "flex"){

                cartWindow.style.display = "none";

            }else{

                cartWindow.style.display = "flex";
            }
        });

        closeCart.addEventListener("click", () => {

            cartWindow.style.display = "none";
        });

        /* =========================
        AGREGAR PRODUCTOS
        ========================= */

        const addButtons = document.querySelectorAll(".add-cart");

        addButtons.forEach(button => {

            button.addEventListener("click", () => {

                const name = button.dataset.name;
                const price = parseFloat(button.dataset.price);
                const image = button.dataset.image;

                const existing = cart.find(item => item.name === name);

                if(existing){

                    existing.quantity++;

                }else{

                    cart.push({
                        name,
                        price,
                        image,
                        quantity:1
                    });
                }

                updateCart();
            });

        });

        /* =========================
        ACTUALIZAR CARRITO
        ========================= */

        function updateCart(){

            cartItemsContainer.innerHTML = "";

            let total = 0;
            let totalItems = 0;

            cart.forEach((item,index) => {

                total += item.price * item.quantity;

                totalItems += item.quantity;

                const div = document.createElement("div");

                div.classList.add("cart-item");

                div.innerHTML = `

                    <img src="${item.image}">

                    <div class="item-info">

                        <h4>${item.name}</h4>

                        <p>$${item.price}</p>

                        <div class="quantity">

                            <button onclick="decreaseQuantity(${index})">
                                -
                            </button>

                            <span>${item.quantity}</span>

                            <button onclick="increaseQuantity(${index})">
                                +
                            </button>

                        </div>

                    </div>

                    <i class="fa-solid fa-trash remove"
                    onclick="removeItem(${index})">
                    </i>

                `;

                cartItemsContainer.appendChild(div);

            });

            cartCounter.textContent = totalItems;

            cartTotal.textContent = "$" + total.toFixed(2);
        }

        /* =========================
        AUMENTAR
        ========================= */

        function increaseQuantity(index){

            cart[index].quantity++;

            updateCart();
        }

        /* =========================
        DISMINUIR
        ========================= */

        function decreaseQuantity(index){

            if(cart[index].quantity > 1){

                cart[index].quantity--;

            }else{

                cart.splice(index,1);
            }

            updateCart();
        }

        /* =========================
        ELIMINAR
        ========================= */

        function removeItem(index){

            cart.splice(index,1);

            updateCart();
        }

    </script>

</body>

</html>