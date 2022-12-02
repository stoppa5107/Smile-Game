<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	// User data validated against sql injection

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	// store the username and password into our new variable name
	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		// redirect user if submitted data is empty
		header("Location: .php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
		// prevent user from submitting null password
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
		// hash user password for security purposes
        $pass = md5($pass); 

        // query database for to retrieve user
		$sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

		// fetch user from database
		$result = mysqli_query($conn, $sql);

		// check if user exists
		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) {
				
				// start a new session with username to keep the user logged in
            	$_SESSION['user_name'] = $row['user_name'];
            	$_SESSION['name'] = $row['name'];
            	$_SESSION['id'] = $row['id'];
				
				// redirect user back to the home page
            	header("Location: home.php");
		        exit();
            }else{

				// redirect to the index page with appropriate error message 
				header("Location: index.php?error=Incorect User name or password");
		        exit();
			}
		}else{
			// else redirect to the index page with appropriate error message if no table row was found for queried user
			header("Location: index.php?error=Incorect User name or password");
	        exit();
		}
	}
	
}else{
	// redirect user to the index page if empty fields were provided
	header("Location: index.php");
	exit();
}