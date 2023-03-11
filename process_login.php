<?php
$email = $errorMsg = "";
$success = true;

include 'head.inc.php';



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

//if(empty($_POST["pwd"]))
//{
//    $errorMsg .= "Password is required.<br>";
//    $success = false;
//}
//else
//{
//    $pwd = password_hash($_POST["pwd"],PASSWORD_DEFAULT);
//    //Additional check to ensure email is well formatted.
//    if (!password_hash($pwd,PASSWORD_DEFAULT))
//    {
//        $errorMsg .= "Invalid password format <br>";
//        $success = false;
//    }
//}
include 'nav.inc.php';
if($success)
{
//    System.out.println("hi");
    authenticateUser();
    if($success)
    {
        echo "<div class = \"success\">";
        echo "<h1>Your login is Successful</h1>";
        echo "<h4><p>Welcome! ",$lname;
        echo "<br><button class=\"btn btn-success\"><a href=\"index.php\" alt=\"return\">Return to Home</a></button></header>";
        echo"</div>";
    }
    else
    {
            echo"<div class = \"failed\">";
            echo"<h1>Oops!</h1>";
            echo "<h2>The following errors were detected: </h2>";
            echo "<p>" , $errorMsg , "</p>"; 
            echo "<button class=\"btn btn-danger\"><a href=\"login.php\" alt=\"retry\">Retry Login</a></button></header>";
            echo"</div><br>";
    }
}
else
{
//    System.out.println("hi12");
    echo"<div class = \"failed\">";
    echo"<h1>Oops!</h1>";
    echo "<h2>The following errors were detected: </h2>";
    echo "<p>" , $errorMsg , "</p>"; 
    echo "<button class=\"btn btn-danger\"><a href=\"login.php\" alt=\"retry\">Retry Login</a></button></header>";
    echo"</div><br>";
}
//Helper function that checks input for unwanted content
include 'footer.inc.php';
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
function authenticateUser()
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
        //prepare the statement:
        $stmt = $conn->prepare("SELECT * FROM world_of_pets_members WHERE email =?");
        //Bind and execute the query statement
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows>0)
        {
            $row = $result->fetch_assoc();
            $fname = $row["fname"];
            $lname = $row["lname"];
            $pwd = $row["password"];
            if(!password_verify($_POST["pwd"],$pwd))
            {
                $errorMsg = "email not found or password does not match.";
                $success = false;
            }
        }
        else 
        {
            $errorMsg = "Email not found or password dosent match...";
            $success = false;
        }
        /*close the statement.*/
        $stmt->close();
    }
    /*close the sql connection*/
    $conn ->close();
}
           
    

