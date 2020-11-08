<div id="container">
    <div id="middle-content">
        
        <div class="headerpath">
            <h1> S'inscrire ou se connecter au Projet GNU de NSI </h2><div></div></a>	
        </div>							
        <center>
            <br><br>
            <span style="font-family:'RalewayLight', sans-serif;font-size:30px;">Se connecter...</span>
            <br><br>
            <div id="div_connect">
                <form method="post" id="logForm">
                    <div class="field">
                        <label class="field-label" for="username">Pseudo</label>
                        <input class="field-input" type="username" name="username" id="username"/>
                    </div>
                    <div class="field">
                        <label class="field-label" for="email">Votre adresse email</label>
                        <input class="field-input" type="email" name="email" id="email"/>
                    </div>
                    <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
                </form>
                <br><br>
                <button type="submit" name="submit">Se connecter/S'inscrire</button>

            </div>
        </center>
    

        <br><br><br><br>
    </div>
    <div id="rightbar">

    </div>
</div>