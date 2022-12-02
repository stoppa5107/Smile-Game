<?php 
session_start(); 
include "db_conn.php";


if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	// validate parameters
	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;

	// check if user submitted empty data 
	if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

		// query if user already exist with the same username
	    $sql = "SELECT * FROM users WHERE user_name='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			// throw and error if user already exists
			header("Location: signup.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
			// insert user record into database, if user does not already exists
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			// redirect user to signup page on successfull registration
           	 header("Location: index.php?success=Your account has been created successfully");
	         exit();
           }else {
			// redirect user to signup page on failure
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	// redirect to signup page on failure, if empty user data were submitted
	header("Location: signup.php");
	exit();
}