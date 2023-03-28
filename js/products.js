var addToCartButtons = document.querySelectorAll('.add-to-cart');

for (var i = 0; i < addToCartButtons.length; i++) {
    var button = addToCartButtons[i];
    button.addEventListener('click', addToCartClicked);
}

function addToCartClicked(event) {
    var button = event.target;
    var productId = button.getAttribute('data-product-id');
    var productName = button.getAttribute('data-product-name');
    var productPrice = button.getAttribute('data-product-price');
    var productQuantity = button.getAttribute('data-product-quantity');
    var productImage = button.getAttribute('data-product-image');
    var productColor = button.getAttribute('data-product-color');

    var cartItem = {
        id: productId,
        name: productName,
        price: productPrice,
        quantity: productQuantity,
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
    xhr.send('product_id=' + productId + '&quantity=' + quantity);


}