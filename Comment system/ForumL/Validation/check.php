
<?php

     $mysql = new mysqli('localhost','root','','forum');
    
    
     $login= filter_var(trim($_POST['login']),
     FILTER_SANITIZE_STRING);
     $password= filter_var(trim($_POST['password']),
     FILTER_SANITIZE_STRING);
     
   


     $result = $mysql->query("SELECT * FROM `users` WHERE `login` = 
     '$login' AND `password` = '$password'");
     $user = $result->fetch_assoc();
     
     if($user["usertype"]=="user")
	{	

		$_SESSION["login"]=$login;

		header("location:/user.php");
     
	}

	elseif($user["usertype"]=="admin")
	{

		$_SESSION["login"]=$login;
		
		header("location:/index.php");
      
	}
    
    


    $mysql->close();
    


    
?>