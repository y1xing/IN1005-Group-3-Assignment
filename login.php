<?php

include 'head.inc.php';
?>

<body>
    <?php
    include "nav.inc.php";
    ?>  
<main class ="container">
    <h1>Member Login</h1>
    <p>
        Existing members log in here, for new members, please go to the <a href="register.php">Sign Up page </a>. 
    </p>
    <form action ="process_login.php" method="post"> 
    </div>
    <div class = "form-group"> 
        <label for ="email">Email:</label>
        <input class="form-control" id="email" name ="email" type ="email"
               placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for ="pwd">Password:</label>
        <input class="form-control" id="pwd" name ="pwd" type="password"
               placeholder="Enter password">
    </div>
    <div class = "form-group"> 
        <button  class="btn btn-primary" type = "submit">Login</button>
    </div> 
    </form>
</main>
<?php
include 'footer.inc.php';
?>
</body>

