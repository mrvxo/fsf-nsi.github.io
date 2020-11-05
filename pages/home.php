<div>
    <p> S'inscrire ou se connecter au Projet GNU de NSI </p>
</div>


<form method="post" id="logForm">

    <div class="field">
        <label class="field-label" for="username">Pseudo</label>
        <input class="field-input" type="username" name="username" id="username"/>
    </div>
    <div class="field">
        <label class="field-label" for="email">Votre adresse email</label>
        <input class="field-input" type="username" name="username" id="username"/>
    </div>
    <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
    <button type="submit" name="submit">Se connecter/S'inscrire</button>

</form>