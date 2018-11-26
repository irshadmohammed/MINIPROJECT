<?php
if($_SERVER['REQUEST_METHOD'] =='POST'){
	$name = $_POST['name'];
    $email = $_POST['email'];
	$phone = $_POST['phno'];
	$cname = $_POST['clgname'];

	$gender = $_POST['gend'];
	$course = $_POST['cour'];
	$accodomation = $_POST['acco'];
	$food = $_POST['ftype'];
	$poolevent = $_POST['pool1'];
	$eve1 = $_POST['ev1'];
	$eve2 = $_POST['ev2'];
	$eve3 = $_POST['ev3'];
	$eve4 = $_POST['ev4'];
	$eve5 = $_POST['ev5'];
	$eve6 = $_POST['ev6'];
	$eve7 = $_POST['ev7'];
	$eve8 = $_POST['ev8'];
	$eve9 = $_POST['ev9'];
	$eve10 = $_POST['ev10'];
	$eve11 = $_POST['ev11'];
	$eve12 = $_POST['ev12'];
	$eve13 = $_POST['ev13'];
	$eve14 = $_POST['ev14'];
	$eve15 = $_POST['ev15'];
	$eve16 = $_POST['ev16'];
	$eve17 = $_POST['ev17'];
	$eve18 = $_POST['ev18'];
	$eve19 = $_POST['ev19'];
	
	require_once('connect.php');
	$sql = "INSERT INTO trysam(name,email,phone,clg,gend,cour,accom,food,pool,event1,event2,event3,event4,event5,event6,event7,event8,event9,event10,event11,event12,event13,event14,event15,event16,event17,event18,event19) VALUES ('$name', '$email', '$phone', '$cname', '$gender', '$course', '$accodomation', '$food', '$poolevent', '$eve1', '$eve2','$eve3','$eve4','$eve5','$eve6','$eve7','$eve8','$eve9','$eve10','$eve11','$eve12','$eve13','$eve14','$eve15','$eve16','$eve17','$eve18','$eve19')";
	if(mysqli_query($con,$sql)) 
	{
       echo "Successfully registered";
	} 
	else 
	{
		echo "Could not register";
	}
}
?>