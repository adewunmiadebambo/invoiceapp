<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>myinnvoice</title>
<link rel="stylesheet" href="dist/css/bootstrap.css">
	
<script src="dist/js/jquery.3.4.1.min.js"></script>
<script src="dist/js/popper.js"></script>
<script src="dist/js/bootstrap.js"></script>
	
<link rel="stylesheet" href="dist/font-awesome/css/all.css">
	
<link rel="stylesheet" href="dist/style.css">
<!-- <link rel="stylesheet" href="dist/inv.css"> -->
<link rel="stylesheet" href="dist/sign.css">
</head>
<body>
    <div class="container">
		<div class="row">
			<div class="col-md-3">
				<div id="logo">
					<img src="images/Invoice_logo.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-6">
			</div>
			<div class="col-md-3">
				<div id="sign-btn">
					<a href="index.php"><button type="button"> Login </button></a>
				</div>
			</div>
		</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div id="sign-form">
                    <form action="create-account.php" method = "post">
                        <div class="container">
                          <h1>E-Invoice for Small & Medium Scale Businesses</h1>
                          <p>Sign up for free. No payment required. No hidden charges</p>
                         <hr>
                         
                         <?php if($error) { 
                            ?>
<div class="alert alert-danger"><?php echo $error; ?></div>


                          <?php   } ?>
                      
                          <!-- <label for="email"><b>Email</b></label> -->
                          <input type="email" placeholder="Enter Email" name="email" required>

                          <input type="number" placeholder="Phone number"  name="phone" required>
                      
                          <!-- <label for="psw"><b>Password</b></label> -->
                         
                          <div>
                            <input type="password" placeholder=" Password" name="password" required>
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                          </div>
                      
                          <!-- <label for="psw-repeat"><b>Repeat Password</b></label> -->
                          <div >
                            <input type="password" placeholder="Confirm Password" name="confirm" required value="secret">
                            <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span> 
                          </div>
                          <script>
                              
                            $(".toggle-password").click(function() {
                            
                            $(this).toggleClass("fa-eye fa-eye-slash");
                            var input = $($(this).attr("toggle"));
                            if (input.attr("type") == "password") {
                              input.attr("type", "text");
                            } else {
                              input.attr("type", "password");
                            }
                            });
                            </script>


                           <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" require> Remember me
                          </label>
                          
                          <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
                      
                          <div class="clearfix">
                            <!-- <button type="button" class="cancelbtn">Cancel</button> -->
                            <button type="submit" class="signupbtn">Sign Up</button>
                          </div>
                        </div>
                      </form>                   
                </div>
            </div>
            <div class="col-md-7"></div>
        </div>
    </div>
</body>
</html>
