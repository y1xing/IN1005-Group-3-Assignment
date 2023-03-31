<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['fname']) || !isset($_SESSION['lname'])) {
    header("Location: login.php");
    exit;
}

include 'componentshead.inc.php';
include 'components/nav.inc.php';
?>

<div class="container">
    <div class="welcome">
        <h1>Welcome, <?php echo $_SESSION['fname'] . " " . $_SESSION['lname']; ?>!</h1>
        <p>You have successfully logged in.</p>
        <button class="btn btn-success"><a href="index.php" alt="return">Return to Home</a></button>
        <button class="btn btn-danger"><a href="logout.php" alt="logout">Logout</a></button>
    </div>
</div>

<?php
include 'footer.inc.php';
?>