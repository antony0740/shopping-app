<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@latest/css/pico.min.css">

</head>
<body>
   <div class="container">
    <nav>
        <ul>
            <li><a href="products.php">products></a></li>
            <li><a href="Register.php">Register</a></li>
            <li><a href="Login.php">Login</a></li>
        </ul>
    </nav>
    <main>
        <h1>Register to continue</h1>
        <?php
        $_session_start();
        require_once "registration.php";
        include_once "feedback.php";
        ?>
        <form method="post" action="">
            <div>
                <label for ="Fullname">Fullname</label>
                <input type ="text" name = "fullname" id="name" required>
            
            </div>
            <div>
                <label for = "email">email</label>
                <input type="email" name="email" id="email" required>
            </div>
            <div>
                <label for="password">password</label>
                <input type= "password" name="password" id="password" required>
            </div>
            <div>
                <label for= "confirm_password">confirm password</label>
                <input type="password" name="confirm_password" id="confirm_password" required>
            </div>
            <input type="submit" value="Register">
        </form>
    </main>
   </div> 
</body>
</html>