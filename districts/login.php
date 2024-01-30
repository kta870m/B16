<?php
    require_once("database.php");
    require_once("function.php");

    $err="";
    $email=$_POST["email"] ?? "";
    $password=$_POST["password"] ?? "";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        get_connection();
        if(login($email, $password)){
            session_start();
            $_SESSION["logged"]==TRUE;
            header("location: district.php");
        }   else {
            $err="Invalid email or password";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style>
    .container{margin: 0 auto; position: relative; width: 500px}
    div{padding: 5px}
    span{color: red}
</style>
<body>
    <div class="container">
    <h2>Login Form</h2>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
    <div>Email: </div>
    <div><input type="text" name="email" ></div>
    <div>Password: </div>
    <div><input type="password" name="password" ></div>
    <div><input type="submit"></div>
    <span><?php echo $err; ?></span>
    </form>
    </div>
</body>
</html>