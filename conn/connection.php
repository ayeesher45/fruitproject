<?php
	$pdo = null;
	function prepareConnection(){
		$host ="localhost";
		$db ="crahkaij";
		$username ="root";
		$password ="";
		
		try{
			$pdo = new PDO('mysql:host='.$host.';dbname='.$db , $username , $password);
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $e){
			echo "Ooops! Something is wrong with the Connection\nPlease Contact the System Adminstrator";
			echo $e->getMessage();
		}
		return $pdo;
	}
	if($pdo == null){
		$pdo = prepareConnection();
	}
?>