<?php

 $mysql = new mysqli('localhost','root','','farum');
 if(isset($_POST) & !empty($_POST)){
	$Cn = mysqli_real_escape_string($mysql, $_POST['Cn']);
	$Com = mysqli_real_escape_string($mysql, $_POST['Com']);


	$isql = "INSERT INTO comments (Cn, Com) VALUES ('$Cn', '$Com')";
	$ires = mysqli_query($mysql, $isql) or die(mysqli_error($mysql));
	if($ires){
		$smsg = "Your Comment Submitted Successfully";
	}else{
		$fmsg = "Failed to Submit Your Comment";
	}
    
    
 


    header('Location: /');
}

?>