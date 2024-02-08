<?php
	require_once("conn/connection.php");
	require_once("conn/functions.php");
	
	$pdo = prepareConnection();
    

	$firstname = addslashes($_POST['fname']);
	$surname = addslashes($_POST['sname']);
	$phone = $_POST['phone'];
	$username = $_POST['username'];
    $email = $_POST['email'];
    $pword = $_POST['pword'];
	$comfirmpword = $_POST['confirmpword'];
	$status = $_POST['address'];
	var_dump($firstname);
	var_dump($surname);
	var_dump($phone);
	var_dump($username);
	var_dump($pword);
	var_dump($comfirmpword);
	var_dump($email);
	
	
	$username = generatecrahkaijid($username, $phone);
	//$date = date('d/m/Y');
	//var_dump($staffschoolid);
	//echo $staffschoolid; 
	if($pword != $comfirmpword){
		echo '<script>alert("Comfirm Password Incorrect.........."); location.href="signup.php";</script>';
	}
	//var_dump($crahkaijid);
	//die();
	
	$sql = "insert into users (username, phone, password, address) values(:username, :phone, :password,address)";
	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(':username', $username);
	$stmt->bindParam(':password', $comfirmpword);
	$stmt->bindParam(':address', $status);
	try{
		$stmt->execute();
		$userid = $pdo->lastInsertID();
	$sql = "insert into profile (userid	,crahkaijid, firstname, surname, gender, email, phone) values (:userid, :crahkaijid, :firstname, :surname, :gender, :email, :phone)";
		$stmt = $pdo->prepare($sql);
		$stmt->bindParam(':userid', $userid);
		$stmt->bindParam(':crahkaijid', $username);
		$stmt->bindParam(':firstname', $firstname);
		$stmt->bindParam(':surname', $surname);
		$stmt->bindParam(':email', $email);
		$stmt->bindParam(':phone', $phone);
	try{
		$stmt->execute();
		@session_start();
		$_SESSION['crahkaijid'] = $username;
		$_SESSION['password'] = $comfirmpword;
		echo '<script>alert("Account Registration Successful"); location.href="accountsucc.php";</script>';
	}catch(Exception $e){
		echo $e->getMessage();
		echo '<script>alert("Account Registration Failed Try again...."); location.href="signup.php";</script>';
	}
	}catch(Exception $e){
		echo $e->getMessage();
		header("location:");
	}
	
?>