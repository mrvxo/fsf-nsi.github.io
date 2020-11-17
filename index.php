<?php
    include './config/main-function.php';
	$pages = scandir("pages/");

	if(isset($_GET['page']) && !empty($_GET['page']) && in_array($_GET['page'].'.php', $pages)){
		$page = $_GET['page'];
    }else{ 
        $page = "home";
    }
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
    <link rel="stylesheet" type="text/css" href="./css/main.css" media="screen" />
  </head>
  <body>
    <header><?php include 'body/topbar.php' ?></header>
		<div id="all-container">
			<div id="container">
        		<div id="middle-content">
          			<?php include 'pages/'.$page.'.php' ?>
        		</div>     
        		<div id="rightbar">
					<div id="sponsor">
					<center><img src="./image/unnamed.png"></center>
          		</div><br><br>
          		<div id="sponsor">
            		<center><img src="./image/vooxo.png"></center>
          		</div> 
        	</div>
   		</div>
    </div>
    <?php $pages_js = scandir('js/');
      if(in_array($page.'.func.js',$pages_js)){
    ?>
        <script src="js/<?= $page ?>.func.js"></script>
    <?php
        }
    ?>
  </body>
</html>
