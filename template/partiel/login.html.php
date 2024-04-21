<?php
  
 
  ?>   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/login.css">
    <title>Formulaire</title>
</head>
<body>
    
<form action="/var/www/html/projet/public/index.php" method="post">
    <input type="hidden" name="log" value="true"> <!-- Champ log -->
    <div class="image">    
        <img src="images/sonatel.jpg" alt="sonatel's logo">
    </div>
    <div class="box">
        <div class="input-box">
            <label for="email">Email Address*</label>
            <input type="email" name="email" id="email" placeholder="Enter Email Address*"> 
        </div>
        <div class="input-box2">
            <label for="password">Password*</label>
            <input type="password" name="password" id="password" placeholder="Enter your password*">
            <i class="fa-solid fa-eye-slash"></i> 
        </div>
    </div>
    <div class="remember-forget">
        <label for="remember"><input type="checkbox" id="remember" name="remember">Remember me</label>
        <a href="#">Forgot Password?</a>
    </div>
    <input type="submit" value="Login" class="button"> <!-- Bouton de soumission -->
</form>

</body>
</html>