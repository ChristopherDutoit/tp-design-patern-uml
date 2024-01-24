<h2>Formulaire d'Inscription</h2>

<form action="#" method="post">
    <label for="fname">Prénom:</label><br>
    <input type="text" id="fname" name="fname" required><br>

    <label for="lname">Nom:</label><br>
    <input type="text" id="lname" name="lname" required><br>

    <label for="email">E-mail:</label><br>
    <input type="email" id="email" name="email" required><br>
    
    <label for="password">Mot de passe</label><br/>
    <input type="password" id="password" name="password" required><br/>

    <input type="submit" name="submit" value="S'inscrire">
</form> 

<?php

if(isset($_POST["submit"])){
    require_once("Controllers/UserController.php");
    $UserController = new UserController($_POST["fname"], $_POST["lname"], $_POST["email"], $_POST["password"]);
    
}
?>