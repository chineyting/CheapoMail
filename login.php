<?php
    session_start();

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];
	//$con = false;
	$con=mysqli_connect("127.8.14.1","chineyting", "" ,"cheapomail");
	if (!$con) {
		echo "Connection failed";
		return false;
	}

	
   
    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password';";
    $results= mysqli_query($con,$sql);
    if (sizeof(mysqli_fetch_array($results))==0){
    	// sends something to javascript if it fails
    	echo "fail";
    }else{
    	// ends something to javascript if it succeeds
    	//session_start();
    	$_SESSION['username']=$username;
    	echo "pass";
    }

?>