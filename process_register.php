<?php
$email = $errorMsg = "";
$success = true;

include 'head.inc.php';

$fname = sanitize_input($_POST["fname"]);
if(empty($_POST["email"]))
{
    $errorMsg .= "Email is required.<br>";
    $success = false;
}
else
{
    $email = sanitize_input($_POST["email"]);
    //Additional check to ensure email is well formatted.
    if (!filter_var($email,FILTER_VALIDATE_EMAIL))
    {
        $errorMsg .= "Invalid email format.<br>";
        $success = false;
    }
}

//Username
if(empty($_POST["lname"]))
    
{
    $errorMsg .= "Last name is required.<br>";
    $success = false;
}
else
{
    $lname = sanitize_input($_POST["lname"]);

    //Additional check to ensure email is well formatted.
    if (!filter_var($lname,FILTER_SANITIZE_SPECIAL_CHARS))
    {
        $errorMsg .= "Invalid last name format<br>";
        $success = false;
    }
}

if(empty($_POST["pwd"]))
    
{
    $errorMsg .= "Password is required.<br>";
    $success = false;
}
else
{
    $pwd = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
    //Additional check to ensure email is well formatted.
    if (!password_hash($pwd,PASSWORD_DEFAULT))
    {
        $errorMsg .= "Invalid password format <br>";
        $success = false;
    }
}
if(empty($_POST["pwd_confirm"]))
    
{
    $success = false;
}
else
{
    $pwd_confirm = ($_POST["pwd_confirm"]);
    //Additional check to ensure email is well formatted.
    if (password_verify($pwd_confirm,$pwd)!== true)
    {
        $errorMsg .= "Password does not match!";
        $success = false;
    }
}
include 'nav.inc.php';
if($success && password_verify($pwd_confirm,$pwd))
{
    saveMember();
    echo"<div class = \"success\">";
    echo "<h1>Your registration is Successful</h1>";
    echo "<h3><p>Your registered Email: ", $email;
    echo "<h4><p>Thank you for signing up: ",$lname;
    echo "<br><button class=\"btn btn-success\"><a href = \"login.php\"alt=\"Sign in\">Login</button>";
    echo"</div>";
}
else
{
    echo"<div class = \"failed\">";
    echo"<h1>Oops!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>" , $errorMsg , "</p>"; 
    echo "<button class=\"btn btn-danger\"><a href=\"register.php\" alt=\"retry\">Return to Sign up</a></button></header>";
    echo"</div><br>";
}
//Helper function thaat checks input for unwanted content

function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
//Helper function that writes member data to db
function saveMember()
{
    global $fname,$lname,$email,$pwd,$errorMsg,$success;
    //Create database connection
    $config = parse_ini_file('../../private/db-config.ini');
    $conn = new mysqli($config['servername'],$config['username'],
        $config['password'],$config['dbname']);
    //Check connection
    if($conn->connect_error)
    {
        $errorMsg = "Connection failed: ". $conn->connect_error;
        $success = false;
    }
    else
    {
        //prepare the statement
        $stmt = $conn->prepare("INSERT INTO world_of_pets_members(fname, lname, email, password) VALUES (?,?,?,?)");
        
        //Bind and execute the statement
        /*use parameterized queries to prevent easy sql injection attacks*/
        $stmt -> bind_param("ssss",$fname,$lname,$email,$pwd);
        if(!$stmt->execute())
        {
            $errorMsg = "Execute Failed: (" .$stmt->errno . ") ". $stmt->error;
            $success = false;
        }
        /*close the insert statement*/
        $stmt->close();
    }    
    /*close the connection*/
    $conn->close();
}
include 'footer.inc.php';

//
//if($success)
//{
//    echo "<h4>Registration successful</h4>";
//    echo "<p>Last name: ", $lname; 
//}
//else
//{
//    echo "<h4>The following input errors were detected! </h4>";
//    echo "<p>" , $errorMsg , "</p>";
//}
//
//
//
//if($success)
//{
//    echo "<h4>Registration successful</h4>";
//}
//else
//{
//    echo "<h4>The following input errors were detected! </h4>";
//    echo "<p>" , $errorMsg , "</p>";
//}
//


//if($success && $pwd_confirm === $pwd)
//{
//    echo "<h4>Registration successful</h4>";
//}
//else
//{
//    echo "<h4>The following input errors were detected! </h4>";
//    echo "<p>" , $errorMsg , "</p>";
//}



