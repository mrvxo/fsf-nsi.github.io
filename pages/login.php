<div id="home">
    <h1 class="header">Se connecter</h1>
    <form method="post" id="regForm">
    <div>
        <label class="field-label" for="email">Votre E-mail: <?= $_GET['email'] ?></label><br>
    </div>
    <div>
        <label class="field-label" for="name">Mot de passe: </label>
        <input class="field-input" name="passwd" id="passwd" type="passwd"></input>
    </div>
    <div>
        <label class="field-label" id="warning">Allez voir vos mails</label>
    </div>
    <button type="submit" name="submit">S'enregistrer</b>
    </form>
</div>
