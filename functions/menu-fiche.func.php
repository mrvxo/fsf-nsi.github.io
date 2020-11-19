<?php
	
global $db;
$Mat=$db->query("SELECT * FROM cours_matiere ORDER BY id");
$Chapter=$db->prepare("SELECT * FROM cours_chapitre WHERE id_coursmatiere = ?");
