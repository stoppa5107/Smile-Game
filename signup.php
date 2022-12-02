

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>🤔</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Report Login Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
    <link href="//fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700;900&display=swap" rel="stylesheet">
    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/style2.css" type="text/css" media="all" />
    <!--//Style-CSS -->



</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form" style="background-image:url('images/i.jpg') !important">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                    <h2>SIGN UP 🤔</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>
                        <form action="signup-check.php" method="post">
                          &nbsp;&nbsp;&nbsp;&nbsp; <label>Name</label> <br/>
                            <input type="text" class="text" name="name" placeholder="Full Name" required="" autofocus>
                            &nbsp;&nbsp;&nbsp;&nbsp; <label>User Name</label> <br/>
                            <input type="email" class="text" name="uname" placeholder="Email Address" required="" autofocus>

                            &nbsp;&nbsp;&nbsp;&nbsp; <label>Password 🙈</label> <br/>
                            <input type="password" class="text" name="password" placeholder="Password" required="" pattern=".{6,}" autofocus >
                            <p>Passwords are case sensitive, must not contain symbols and must be at least 8 characters.</p>

                            &nbsp;&nbsp;&nbsp;&nbsp; <label>Confirm Password 🙊</label> <br/>
                            <input type="password" class="text" name="re_password" placeholder="Confirm Password" required="" autofocus>
                            <button class="btn" type="submit">Sign Up</button>
                        </form>
                        
                        <p class="account">Already have an account?<a class="btn btn-success" href="index.php">Login</a></p>
                    </div>
                    <div class="w3l_form align-self">
                        <div class="left_grid_info">
                            <img src="images/img1.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            <!-- //form -->
        </div>
        <!-- copyright-->
        <div class="copyright text-center">
            <p class="copy-footer-29">© 2022🤔. All rights reserved | Design by <a
                        href="#">Adikwu Joseph Ochigbo</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>