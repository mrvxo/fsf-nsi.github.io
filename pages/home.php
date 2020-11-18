<?php 
    if(isset($_POST['submit'])){
        $email = htmlspecialchars(trim($_POST['email']));
        if(!empty($email)){
            if(emailFound($email) == 1){
                ini_set( 'display_errors', 1 );
                error_reporting( E_ALL );
                $from = "you@example.com";
                $subject = "Essai de PHP Mail";
                $message = "PHP Mail fonctionne parfaitement";
                $headers = "De :" . $from;
                mail($email,$subject,$message, $headers);
                echo "L'email a été envoyé.";
                header('Location: index.php?page=login&email='.$email);
            }else{
                header('Location: index.php?page=register&email='.$email);
            }
        }
    }   
       
?>
<div class="post__content">
	<h1 class="header">Identification</h1>
    	<div class="post_annotation">
            <form method="post" id="Form">
                <div class="field">
                    <img src="./image/The_GNU_logo.png" width="100" height="100">
                    <div>
                        <label class="field-label" for="email">Votre E-mail</label>
                        <input class="field-input" type="email" name="email" id="email"/>
                        <button  type="submit" name="submit">S'identifier</b>
                    </div>
                </div>
                <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
            </form>
			<div class="warning">
      	    	Nous espérons que vous avez reçu la conférence habituelle de l'administrateur système local.<br>
        	    Cela se résume généralement à ces trois choses:
             	<br># 1) Respectez la vie privée des autres.
             	<br># 2) Réfléchissez avant de taper.
             	<br># 3) Une grande puissance s'accompagne d'une grande responsabilité.
             	<br> <span class="copy-left">©</span>. Libre pour tous.
   		</div>
	</div>
</div>
