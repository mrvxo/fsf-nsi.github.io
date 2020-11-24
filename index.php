<?php
  include './config/main-function.php';
	$pages = scandir("pages/");
  //On cherche notre page
	if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
		$page = $_GET['page'];
  }else{ 
    $page = "home";
  }
  //On regarde si un mécanisme existe
  $pages_functions = scandir("functions/");
  if(in_array($page.'.func.php', $pages_functions)){
    include 'functions/'.$page.'.func.php';
  }
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
    	<meta charset="UTF-8">
		<title><?= $name ?></title>
		<link rel="shortcut icon" href="./image/favicon.ico" type="image/x-icon">
		<link rel="icon" href="./image/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
		<link href="https://fonts.googleapis.com/css2?family=Overpass&family=Commissioner&family=Staatliches&display=swap" rel="stylesheet">
	</head>
  <body> 
    <header><?php include 'body/topbar.php' ?></header>
		<div id="all-container">
			<div id="container">
        <div id="middle-content">
            <?php include 'pages/'.$page.'.php' ?>
        </div> 
        <?php
          if($page != "menu-fiche"){	
        ?> 
        <div id="rightbar">
          <div id="sponsor">
            <center><img src="./image/vooxo.png"></center>
          </div> 
        </div>
        <?php }  ?>
		</div>
    </div>
	<!-- Ajout du js-->
    <?php $pages_js = scandir('js/');
      if(in_array($page.'.func.js',$pages_js)){
    ?>
        <script src="js/<?= $page ?>.func.js"></script>
    <?php
        }
    ?>
    <footer><?php include 'body/footer.php' ?></footer>
  </body>
</html>
