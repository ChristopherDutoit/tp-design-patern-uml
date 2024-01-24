<h2>Se connecter</h2>

<form action="" method="post">
    
    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br>

    <label for="password">Mot de passe</label><br/>
    <input type="password" idp="password" name="password" required><br/>

    <input type="submit" name="submit" value="Connexion">
</form> 

<?php

if(isset($_POST["submit"])){
    require_once("Controllers/UserController.php");
    $UserController = new UserController;
    $UserController->login($_POST["email"], $_POST["password"]);
}
?>