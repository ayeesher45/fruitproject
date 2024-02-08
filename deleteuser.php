<?php 
	require_once("conn/connection.php");
	
	$pdo = prepareConnection();

$userid = $_REQUEST['id'];
var_dump($userid);

$sql="delete from users where id =:userid";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':userid', $userid);

try{
    $stmt->execute();
    $sql="delete from users where id =:userid";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':userid', $userid);
    $stmt->execute();
    echo "<script>alert('Client deleted successfully'); location.href='clientlist.php'; </script>";
}
catch(Exception $e){echo $e->getMessage();
    echo "<script>alert('Client deleting failed. Try again'); location.href='clientlist.php'; </script>";
    
} 
?>