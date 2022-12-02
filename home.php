<?php 
session_start();

// a check to assertain if the user is logged in or not
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>🤔</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body style="background-image:url('images/i.jpg') !important">
    <!-- feedback message for logged in user,
    this denotes the message the user sees if he/she is logged in
    -->
     <h1 style="color:black !important;">Hello, <?php echo $_SESSION['name']; ?></h1>
     <a style="color:black !important;" href="logout.php">Logout</a>
     <p id = "result"></p>
</body>
</html>

<?php 

// Else statement to redirect logged out user to home page
}else{
     header("Location: index.php");
     exit();
}
 ?>

<script>
    var count = 5;
setInterval(function(){
    count--;
    document.getElementById('result').innerHTML = "The game will start in " + count + " seconds";
    if (count == 0) {
        window.location = 'game.php'; 
    }
},1000);
   </script>