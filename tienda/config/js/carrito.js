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
