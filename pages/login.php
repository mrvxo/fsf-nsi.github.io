<div class="post__content">
	<h1 class="header">Identification</h1>
    <div class="post_info">
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
</div>
