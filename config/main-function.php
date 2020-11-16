<?php
    $name = "GNU>> NSI";

    //Db configuration
    $db_host = "localhost";
    $db_name = "site";
    $db_user = "admin";
    $db_pswd = "vooxo089";

    try{
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOException $e){
        die("Une erreur vient de surgir à la connexion à la base de donnée");
    }


  	function emailFound($email){
    	global $db;
    	$e = array('email' => $email);
    	$sql = 'SELECT * FROM users WHERE email = :email';
    	$req = $db->prepare($sql);
    	$req->execute($e);
    	$free = $req->rowCount($sql);
  
		return $free;
  	}
		
