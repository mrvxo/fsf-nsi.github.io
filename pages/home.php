<div id="home">
    <div class="post__content">
        <h1>Identification</h1>
        <div class="post_annotation">
            <form method="post" id="logForm">
                <div class="field">
                    <img src="../image/The_GNU_logo.png" width="100" height="100">
                    <div>
                        <label class="field-label" for="email">Votre E-mail</label>
                        <input class="field-input" type="email" name="email" id="email"/>
                        <button  type="submit" name="submit">S'identifier</b>
                    </div>
                </div>
                <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
            </form>
            <div class="post_regle">
                        Nous espérons que vous avez reçu la conférence habituelle de l'administrateur système local. Cela se résume généralement à ces trois choses:
                        <br># 1) Respectez la vie privée des autres.
                        <br># 2) Réfléchissez avant de taper.
                        <br># 3) Une grande puissance s'accompagne d'une grande responsabilité.
            </div>
        </div>
    </div>
</div>

