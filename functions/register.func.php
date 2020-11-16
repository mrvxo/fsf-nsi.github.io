<?php

  function register($email, $username){ 
    global $db;
    $sql = "INSERT INTO users(email, username) VALUES(:email,:username)";
    $req = $db->prepare($sql);
    $req->execute(array(
      'email'=> $email,
      'username'=> $username));
  }
