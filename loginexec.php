<?php
	require("conn/connection.php");
	require("conn/functions.php");
	$pdo = prepareConnection();
	$username = $_POST['username'];
	$password = $_POST['password'];
	$status = "Active";
	
	$sql = "select * from users join profile join role on users.id = profile.userid and users.roleid=role.id where username = :username and password = :password and users.status = :status";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(":username", $username);
	$stmt->bindParam(":password", $password);
	$stmt->bindParam(":status", $status);
	try{
		$stmt->execute();
		if($stmt->rowCount() == 1){
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
			//var_dump($rows);
			//exit();
			session_start();
			$_SESSION['userid'] = $rows[0]['userid'];
			$_SESSION['username'] = $rows[0]['username'];
			$_SESSION['roleid'] = $rows[0]['roleid'];
			$_SESSION['loggedin'] = true;

			if($rows[0]['roleid'] == 1){ // if admin
				header("location:index.php");
			}
			else if($rows[0]['roleid'] == 2){ // if staff
				header("location:order.php");
			}
			else if($rows[0]['roleid'] == 3){ // if bidder
			header("location:contact.php");
			}
			
			//echo "<script>location.href='home.php'; </script>";
			//header("location:home.php");
		}
		else{ 
			echo "<script>alert('Invalid Username/Password. Please Try Again or Contact the Admin'); location.href='index.php'; </script>";
			}
	}catch(Exception $e){echo $e->getMessage();
		echo "<script>alert('Login Failed. Contact The Admin at aifcf@gove.ng'); location.href='index.php'; </script>";
		
	} 
?>