<?php
	function checkLogin(){
		if($_SESSION['loggedin'] != true){
			unset($_SESSION);
			session_destroy();
			header("location:login.html");
		}
	}
    function scramble($number) {//http://stackoverflow.com/questions/18356324/how-to-generate-card-number-so-the-users-cannot-follow-how-much-is-sold
		return (305914000*($number-10)+1516478) % 196983;
	}
	function unscramble($number) {//http://stackoverflow.com/questions/18356324/how-to-generate-card-number-so-the-users-cannot-follow-how-much-is-sold
		return (605673000*($number-1516478)+10) % 196983 ;
	}
	function generatecrahkaijid($username, $phone){
		$alphabets = $username;
		$crahkaijid = $alphabets;
		return $crahkaijid;
	}
	
	function generateStaffSchoolID($spno, $phone){
		$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		$staffschoolid = $alphabets[rand(0,23)];
		$staffschoolid .= date("y");
		$staffschoolid .= scramble($spno*rand(0,9));
		$staffschoolid .= scramble($phone)*rand(0,9);
		$staffschoolid = str_replace("-", "",$staffschoolid);
		$staffschoolid = substr($staffschoolid, 0, strlen($staffschoolid)-2).date("YMDHms");
		$staffschoolid = substr($staffschoolid, 0, 8);
		
		return $staffschoolid;
	}
	function generateSchoolID($classtype, $class, $house){
		$alphabets = array("A","B","C","D","E","F","G","H","J","K","L","M","N","P","Q","R","S","T","U","V","W","X","Y","Z");
		//$schoolid = $alphabets[rand(0,23)];
		$schoolid = date("y");
		$schoolid .= $classtype;
		$schoolid .= $class;
		$schoolid .= $house;
		$schoolid .= $alphabets[rand(0,23)];
		$schoolid .= $alphabets[rand(0,23)];
		//$schoolid .= $house;
		
		return $schoolid;
	}
	function generateCertNo(){
		$certno = 0;
		$certno .= rand(0,4);
		$certno .= rand(3,25);
		$certno .= rand(2,9);
		//$certno .= rand(2,97);
		return $certno;
	}
	
	function calculateGrade($total){
		$grade = "F";
		if($total >= 70){
			$grade = "A";
		}elseif($total >= 60){
			$grade = "B";
		}elseif($total >= 50){
			$grade = "C";
		}elseif($total >= 40){
			$grade = "D";
		}elseif($total >= 30){
			$grade = "E";
		}else{
			$grade = "F";
		}
		return $grade;
	}
	
	function marksum($add){
		$sum = array_sum($add);
		return $sum;
	}
	
	function calculateGradeValue($total){
		$grade = 0;
		if($total == "A"){
			$grade = 5;
		}elseif($total == "B"){
			$grade = 4;
		}elseif($total == "C"){
			$grade = 3;
		}elseif($total == "D"){
			$grade = 2;
		}elseif($total == "E"){
			$grade = 1;
		}else{
			$grade = 0;
		}
		return $grade;
	}
	
	function remarksValue($grade){
		$value = "Fail";
		if($grade == "A"){
			$value = "Excellent";
		}elseif($grade == "B"){
			$value = "Very Good";
		}elseif($grade == "C"){
			$value = "Good";
		}elseif($grade == "D"){
			$value = "Fair";
		}elseif($grade == "E"){
			$value = "Pass";
		}elseif($grade == "F"){
			$value = "Fail";
		}
		return $value;
		
	}
	function calculateTotal($ca1,$ca2,$ca3,$exams){
		$status = "-";
		if($ca1 != '-' and $ca2 != '-' and $ca3 != '-' and $exams != '-'){
			$status = $ca1+$ca2+$ca3+$exams;
		}
		return $status;
	}
	function positionValue($position){
		$positionval = $position."th";
		if($position == 1){
			$positionval = "1st";
		}elseif($position == 2){
			$positionval = "2nd";
		}elseif($position == 3){
			$positionval = "3rd";
		}elseif($position == 21){
			$positionval = "21st";
		}elseif($position == 22){
			$positionval = "22nd";
		}elseif($position == 23){
			$positionval = "23rd";
		}elseif($position == 31){
			$positionval = "31st";
		}elseif($position == 32){
			$positionval = "32nd";
		}elseif($position == 33){
			$positionval = "33rd";
		}elseif($position == 41){
			$positionval = "41st";
		}elseif($position == 42){
			$positionval = "42nd";
		}elseif($position == 43){
			$positionval = "43rd";
		}elseif($position == 51){
			$positionval = "51st";
		}elseif($position == 52){
			$positionval = "52nd";
		}elseif($position == 53){
			$positionval = "53rd";
		}elseif($position == 51){
			$positionval = "51st";
		}elseif($position == 52){
			$positionval = "52nd";
		}elseif($position == 53){
			$positionval = "53rd";
		}elseif($position == 61){
			$positionval = "61st";
		}elseif($position == 62){
			$positionval = "62nd";
		}elseif($position == 63){
			$positionval = "63rd";
		}elseif($position == 71){
			$positionval = "71st";
		}elseif($position == 72){
			$positionval = "72nd";
		}elseif($position == 73){
			$positionval = "73rd";
		}elseif($position == 81){
			$positionval = "81st";
		}elseif($position == 82){
			$positionval = "82nd";
		}elseif($position == 83){
			$positionval = "83rd";
		}elseif($position == 91){
			$positionval = "91st";
		}elseif($position == 92){
			$positionval = "92nd";
		}elseif($position ==93){
			$positionval = "93rd";
		}
		return $positionval;
	}
	
?>