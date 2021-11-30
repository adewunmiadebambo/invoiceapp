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
<link rel="stylesheet" href="dist/setup.css">
</head>
<body style="background-color: #F2F2F2;">
  <div id="set1">
    <div class="container">
		<div class="row">
			<div class="col-md-2">
				<div id="logo">
					<img src="images/logo_white.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="col-md-3">
			</div>
			<div class="col-md-7">
				 <nav class="navbar navbar-expand-md" id="nav">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="creatinv.php">Invoices </a>
                                </li>
                                <li class="nav-item dropdown" class="nav-item" id="drop">
                                  <a class="nav-link dropdown-toggle" href="setup.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Set up
                                  </a>
                                  <!-- <button id="dropbtn">Set Up</button> -->
                                  <div class="dropdown-content">
                                  <!-- <div class="dropdown-menu" aria-labelledby="navbarDropdown" id="dropbox"> -->
                                    <a class="dropdown-item" href="setup.php">Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="setup.php">Client list</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="setup.php">Information</a>
                                    <!-- <div class="dropdown-divider"></div> -->
                                    <!-- <a class="dropdown-item" href="setup.html"></a> -->
                                  </div>
                              </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="password.php">Password </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Logout</a>
                                </li>
                        
                            </ul>
                            <button type="submit"> Create Invoice </button>
                        </div>
                    <!-- </div>-->
                </nav>
			</div>
		</div>
    </div>
  </div>

   <!-- <div id="inv1"> -->
    <div class="container">
           <div class="row">
              <div class="col-md-5" id="inv">
                <h1> Create an Invoice</h1>
                <h3>
                  Enter your details here!
                </h3>       
               <hr>
                <input type="email" placeholder="Enter Email" name="email" required>
                <input type="number" placeholder="Phone number"  name="number" required>
                <!-- <input type="email" placeholder="Enter Email" name="email" required>
                <input type="number" placeholder="Phone number"  name="number" required> -->
                <input type="password" placeholder=" Password" name="psw" required>
                <input type="password" placeholder="Confirm Password" name="psw-repeat" required value="secret">
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
                </label>
                <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>  
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>

            <!-- <div id="inv2"> -->
                <div class="col-md-7" id="inv2"> 
                  <img src="images/sssss.png" class="img-fluid" alt="">               
                </div>
            <!-- </div> -->
          </div>
    </div>
  <!-- </div>  -->
<div id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p style="float: left;">Copyright © Whois.com. All rights reserved</p>
            </div>
            <div class="col-md-6">
                <p style="float: right;"> Legal Agreement   |   Privacy Policy </p>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
