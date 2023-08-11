<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>

<body>
    <header>
        <h3>Sylhet Food Hub</h3>


        <ul class="navbar">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="index.php" #about>About Us</a></li>
            <li><a href="resturents.php">Resturants</a></li>

            <li><a href="index.php" #contact>Contact</a></li>
            <!-- <li><a href="#" class="cart"><i class='bx bxs-cart-download'></i></a></li> -->
        </ul>


    </header>

    <section class="login">
        <div class="container">
            <div class="login-side">
                <h4>Sign In</h4>
                <form action="loginAction.php" method="post">
                    <label>Email:</label>
                    <input type="email" name="l_email" placeholder="E.g. apu@gmail.com" required />


                    <label>Password:</label>
                    <input type="password" name="l_pass" placeholder="password" required />

                    <div class="forget-pass">

                        <a href="">Forgot your Password!</a>
                    </div>
                    <div class="login-submit">
                        <button type="submit" name="login">Sign In</button>
                    </div>
                </form>
            </div>
            <div class="signup-side">
                <h3>Hello Friend!</h3>
                <p>If you have don't have an accoout with us please click the below button.</p>
                <div class="signup-submit">
                    <button class="btn"><a href="register.php">Sign Up</a></button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>





<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>SignIn Page!</title>

  
</head>

<body>

<header>
		<h3>Sylhet Food Hub</h3>
		

		<ul class="navbar">
			<li><a href="#home" class="active">Home</a></li>
			<li><a href="#about">About Us</a></li>
			<li><a href="#menu">Menu</a></li>
			<li><a href="#team">Team</a></li>
			<li><a href="#blog">Blog</a></li>
			<li><a href="#contact">Contact</a></li>
		</ul>

		<div class="top-btn">
			<a href="login.php">SIGN IN</a>
			<a href="register.php">SIGN UP</a>
		</div>
	</header>

    <div class="container-fluid temp">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4 col-md-6-sm-12">
                <form action="loginAction.php" method="post" class="bg-light p-4 rounded">
                    <div class="center-text">
                        <p class="welcome-account"> <b>Welcome Back</b></p>
                    </div>

                    

                    <div class="form-group">
                        <label for="inputEmail3">Email:</label>
                        <input type="text" name="l_email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3">Password:</label>
                        <div class="input-group">
                            <input type="password" name="l_pass" class="form-control" placeholder="Password" id="passwordInput" required>
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <input type="checkbox" onclick="togglePasswordVisibility()" id="showPasswordToggle">
                                    <label class="form-check-label" for="showPasswordToggle">Show</label>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-12" name="login">SignIn</button>
                    </div>

                    <p class="text-center">Don't have an account? <a href="register.php">Sign in Here</a></p>
                    <p class="text-center">Not Remember Password? <a href="forgot_password.php">Reset Password</a></p>
                </form>
            </div>
        </div>
    </div>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById("passwordInput");
            const showPasswordToggle = document.getElementById("showPasswordToggle");

            if (showPasswordToggle.checked) {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html> -->


<!-- <?php
        // session_start();
        // if (isset($_SESSION['login_error'])) : 
        ?>
                    //     <div class="alert alert-danger text-center" role="alert">
                    //         <?php echo $_SESSION['login_error']; ?>
                    //     </div>
                    // <?php unset($_SESSION['login_error']);
                        // endif; 
                        ?> -->