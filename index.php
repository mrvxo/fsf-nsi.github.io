<?php
    include './config/main-function.php';

	$pages = scandir("pages/");

	if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
		$page = $_GET['page'];
	}else{
		$page = "home";
	}

?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?= $name ?></title>
    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
  </head>
  <body>
    <header><?php include 'body/topbar.php' ?></header>
    <div id="all-container">
      <?php include 'pages/'.$page.'.php' ?>
    </div>
    <footer><?php include 'body/footer.php' ?></footer>
    <script src="js/jquery.js"></script>
    <?php $pages_js = scandir('js/');
      if(in_array($page.'.func.js',$pages_js)){
    ?>
        <script src="js/<?= $page ?>.func.js"></script>
    <?php
        }
    ?>
  </body>
</html>
