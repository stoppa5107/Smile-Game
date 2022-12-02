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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body style="color:black !important; background-image:url('images/i.jpg') !important">
    <!-- feedback message for logged in user,
    this denotes the message the user sees if he/she is logged in
    -->
     <h1 style="color:black !important">Hello, <?php echo $_SESSION['name']; ?> Your game is over😋</h1>
     <h2 style="color:black !important">Your score is <span id="total">0</span></h2>
        <a style="color:black !important" class="btn btn-success" href="game.php">Try again🤔</a>
        <a style="color:black !important" class="btn btn-danger" href="logout.php">Logout</a>

     <script>
        let totalScores = sessionStorage.getItem('scores');
        document.getElementById('total').innerHTML = totalScores;
    </script>
</body>
</html>

<?php 

// Else statement to redirect logged out user to home page
}else{
     header("Location: index.php");
     exit();
}
 ?>

<!-- <script type="text/javascript">   
    function Redirect() 
    {  
        window.location="game.php"; 
    } 
    document.write("You will be redirected to start the game in 5 seconds"); 
    setTimeout('Redirect()', 5000);   
</script> -->