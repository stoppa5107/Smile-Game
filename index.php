

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

    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">
    <script>
        sessionStorage.removeItem('scores');
    </script>
</head>

<body>

    <!-- form section start -->
    <section class="w3l-hotair-form" style="background-image:url('images/i.jpg') !important">
        <div class="container">
            <!-- /form -->
            <div class="workinghny-form-grid">
                <div class="main-hotair">
                    <div class="content-wthree">
                        <h2>Log In 🤔</h2>
                        <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                        <form action="login.php" method="post">
                            <input type="text" class="text" name="uname" placeholder="User Name" required="" autofocus>
                            <input type="password" class="password" name="password" placeholder="User Password" required="" autofocus>
                            <button class="btn" type="submit">Log In</button>
                        </form>
                        
                        <p class="account">Don't have an account? <a href="signup.php">Signup 😄</a></p>
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
            <p class="copy-footer-29">© 2022 🤔. All rights reserved | Design by <a
                        href="#">Adikwu Joseph Ochigbo</a></p>
        </div>
        <!-- //copyright-->
    </section>
    <!-- //form section start -->
</body>

</html>