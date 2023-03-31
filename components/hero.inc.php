



<?php
$src = "/images/hero/HeroFrame-1.jpg";


switch ($color) {
    case "blue":
        $src = "/images/hero/HeroFrame-1.png";
        break;
    case "orange":
        $src = "/images/hero/HeroFrame.png";
        break;
    case "green":
        $src = "/images/hero/HeroFrame-3.png";
        break;
    case "red":
        $src = "/images/hero/HeroFrame-2.png";
        break;
    default:
        // Do nothing


}

// Check length of the hero text and then change the font size accordingly
if (strlen($text) > 2) {
    $fontSize = "font-size: min(15rem, calc(8vw + 3rem));";
} else {
    $fontSize = "font-size: min(30rem, calc(10vw + 3rem));";
}

if ($color == "green") {
    echo "
        <div class='hero-container $color'>
            <img class='heroImg' src='$src' alt='Hero Frame'  loading='eager'>
            <div class='heroText'>
                <h1 class='heroText' style='$fontSize'>$text</h1>

            </div>
            <button class='button m-5' onclick='window.location.href=\"profile.php\";'>
                <span class='button-content progress-text'>Check your progress here!</span>
            </button>
        </div>
        ";
} else {
    echo "
        <div class='hero-container $color'>
            <img class='heroImg' src='$src' alt='Hero Frame'>
            <div class='heroText'>
                <h1 class='heroText' style='$fontSize'>$text</h1>
            </div>
        </div>
        ";
}
?>




