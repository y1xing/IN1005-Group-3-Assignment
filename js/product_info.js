let counter = 1;

function increment() {
    counter++;
}

function decrement() {
    counter--;
}

function get() {
    return counter;
}

const inc = document.getElementById("increment");
const input = document.getElementById("input");
const dec = document.getElementById("decrement");

inc.addEventListener("click", () => {
    increment();
    input.value = get();
});

dec.addEventListener("click", () => {
    if (input.value > 0) {
        decrement();
    }
    input.value = get();
});

var buyNowButton = document.getElementById('buy-now');
var addToCartButton = document.getElementById('add-to-cart');

buyNowButton.addEventListener('click', buyNowClicked);
addToCartButton.addEventListener('click', addToCartClicked);

function buyNowClicked(event) {
    var button = event.target;
    var productId = button.getAttribute('data-product-id');
    var productName = button.getAttribute('data-product-name');
    var productPrice = button.getAttribute('data-product-price');
    // var productQuantity = button.getAttribute('data-product-quantity');
    var productImage = button.getAttribute('data-product-image');
    var productColor = button.getAttribute('data-product-color');

    var cartItem = {
        id: productId,
        name: productName,
        price: productPrice,
        quantity: counter,
        image: productImage,
        color: productColor,

    }

    console.log(cartItem);

    var quantity = 1;

    // Send AJAX request to server to store product in session
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send('product_id=' + productId + '&quantity=' + counter);

    window.location.href = "cart.php";

}

function addToCartClicked(event) {
    var button = event.target;
    var productId = button.getAttribute('data-product-id');
    var productName = button.getAttribute('data-product-name');
    var productPrice = button.getAttribute('data-product-price');
    // var productQuantity = button.getAttribute('data-product-quantity');
    var productImage = button.getAttribute('data-product-image');
    var productColor = button.getAttribute('data-product-color');

    var cartItem = {
        id: productId,
        name: productName,
        price: productPrice,
        quantity: counter,
        image: productImage,
        color: productColor,

    }

    console.log(cartItem);


    // Send AJAX request to server to store product in session
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_to_cart.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
            console.log(xhr.responseText);
        }
    };
    xhr.send('product_id=' + productId + '&quantity=' + counter);


}

