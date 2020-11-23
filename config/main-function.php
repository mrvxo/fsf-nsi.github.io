<?php
	
	//Website configuration:
	$name = "FSF>> NSI";
	$envFile = json_decode(file_get_contents("/home/pi/setting.json"));
	//Db configuration
    $db_host = $envFile->{'db_host'};
    $db_name = $envFile->{'db_name'};
    $db_user = $envFile->{'db_user'};
	$db_pswd = $envFile->{'passwd_gnu'};
	try{
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name,$db_user,$db_pswd, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
    }catch(PDOException $e){	
		die($db_pswd);
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
		
