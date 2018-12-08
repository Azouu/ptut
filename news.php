<?php
	try{
		$link = new PDO('mysql:host=localhost;dbname=ptut','root','$iutinfo');
	}catch(Exception $e){
		die('Erreur :'. $e->getMessage());
	}
	
	$req = $link->prepare('select * from news order by id_news desc limit 5');
	$req->execute();
	
	$i = 1;
	
	while($data = $req->fetch()){
		echo '<article class="news'.$i.'"> <h1>'.$data['title']. '</h1> <br /><p class="news_contenu">'.$data['contenu'] .' </br ></article>' ;
		$i++;
	}
	
?>