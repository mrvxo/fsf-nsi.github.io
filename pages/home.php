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
	<h1 class="header">Principe du Copylefts</h1>
    	<div class="post_annotation">
			<div class="warning">
            (0) exécuter le programme,<br>
            (1) étudier et modifier le programme sous forme de code source,<br>
            (2) en redistribuer des copies exactes,<br>
            (3) en redistribuer des versions modifiées.
   	    </div>
	</div>
</div><br><br>
<div class="post__content">
	<h1 class="header">Identification</h1>
    <form method="post">
        <div id="Form">
            <label for="email">Votre E-mail</label>
            <input type="email" name="email" id="email"/>
            <button  type="submit" name="submit">S'identifier</b>
        </div> 
        <p class="error"><?php echo (isset($error_user_not_found)) ? $error_user_not_found : ''; ?></p>
    </form>
</div>


