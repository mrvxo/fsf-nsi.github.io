<?php
    if(isset($_POST['submit'])){
        $email = htmlspecialchars(trim($_GET['email']));
        $username = htmlspecialchars(trim($_POST['name']));
        if(!empty($email) &&  !empty($username)){
            if(emailFound($email) == 0){
                register($email, $username);
                $_SESSION = $email;         
            }else{
                header('Location index.php?page=login&email='.$email);
            }
        }
    }

?>

<div id="home">
    <h1 class="header">S'enregister</h1>
    <form method="post" id="regForm">
    <div>
        <label class="field-label" for="email">Votre E-mail: <?= $_GET['email'] ?></label><br>
    </div>
    <div>
        <label class="field-label" for="name">Pseudo: </label>
        <input class="field-input" name="name" id="name" type="name"></input>
    </div>
    <div>
        <label class="field-label" id="warning">Pour une question de sécurité nous vous enverrons le mot de passe depuis votre boite mail !<br>
        à chaque connexion de votre part. [Nous essaierons de respecter votre Anonymat à tout prix]</label>
    </div>
    <button type="submit" name="submit">S'enregistrer</b>
    </form>
</div>
