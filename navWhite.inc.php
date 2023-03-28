<?php



echo "<nav class='navbar bg-white navbar-expand-lg fixed-top mx-auto pt-5 pb-5 px-4' 
    style='background: white !important;'
    id='navbar'>";

?>



<!-- <nav class="navbar navbar-expand-lg fixed-top mx-auto p-5" id="navbar"> -->
<a class="navbar-brand" href="/index.php">

    <img src="/images/logo/logoColored.png" alt="logo" class="logo" />
</a>

<button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <!--?xml version="1.0" ?--><svg style="color: rgb(141, 57, 243);" height="32px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#8d39f3"></path>
    </svg>
</button>

<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="gap: 2rem;">
        <li class="nav-item">
            <a class="nav-link red-text" href="/about.php">About Us <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link orange-text" href="/products.php">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link green-text" href="/training.php">Training</a>
        </li>
        <li class="nav-item">
            <a class="nav-link blue-text" href="/contact.php">Contact</a>
        </li>
    </ul>
    <form class="form-inline">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 my-2 my-lg-0 icon-nav">
            <li class="nav-item">
                <a class="icon-container" href="/cart.php">
                    <img src="images/icons/cart.png" alt="Cart" class="icon" />
                </a>
            </li>
            <li class="nav-item">
                <a class="icon-container" href="/profile.php">
                    <img src="images/icons/profile.png" alt="Profile" class="icon" />
                </a>
            </li>

        </ul>
    </form>
</div>
</nav>