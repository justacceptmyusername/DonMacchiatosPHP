const PRODUCTS = {
    "caramel-macchiato": {
        name: "Caramel Macchiato",
        desc: "Sweet espresso with velvety milk.",
    },
    "americano": {
        name: "Americano",
        desc: "Bold espresso diluted with hot water.",
    },
    "latte": {
        name: "Latte",
        desc: "Smooth espresso with steamed milk.",
    },
    "darkforgeroast": {
        name: "Dark forge roast",
        desc: "Right bitter taste and balanced blend.",
    },
    "emberlatte": {
        name: "Ember Latte",
        desc: "Smooth espresso with steamed milk and a hint of maple.",
    }
};

if (location.pathname.includes("details.html")) {
    const params = new URLSearchParams(location.search);
    const item = params.get("item");

    const prod = PRODUCTS[item];
    if (prod) {
        document.getElementById("prod-title").innerText = prod.name;
        document.getElementById("prod-desc").innerText = prod.desc;

        document.getElementById("add-to-cart").onclick = () => {
            let cart = JSON.parse(localStorage.getItem("cart") || "[]");
            cart.push(prod.name);
            localStorage.setItem("cart", JSON.stringify(cart));
            alert("Added to cart!");
        };
    }
}

if (document.getElementById("clear-cart")) {
    document.getElementById("clear-cart").onclick = () => {
        localStorage.removeItem("cart");
        location.reload();
    };
}


if (location.pathname.includes("order/index.html")) {
    const cartElement = document.getElementById("cart-items");

    let cart = JSON.parse(localStorage.getItem("cart") || "[]");

    if (cart.length === 0) {
        cartElement.innerHTML = "<p>Your cart is empty.</p>";
    } else {
        cartElement.innerHTML = cart.map(item => `<p>${item}</p>`).join("");
    }
}

if (location.pathname.includes("checkout.html")) {
    document.getElementById("finish-order").onclick = () => {
        alert("Order placed!");
        localStorage.removeItem("cart");
        location.href = "../index.html";
    };
}
