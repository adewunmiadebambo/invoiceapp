<?php session_start(); ?>
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
<!-- <link rel="stylesheet" href="dist/inv.css"> -->
<!-- <link rel="stylesheet" href="dist/sign.css"> -->

</head>
<body>
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
                    <!-- <div class="container"> -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mr-auto ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="invioce.php">Invoices </a>
                                </li>
                                <li class="nav-item dropdown" class="nav-item" id="drop">
                                  <a class="nav-link dropdown-toggle" href="setup.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      Set up
                                  </a>
                                  <div class="dropdown-content">
                                  <a class="dropdown-item" href="setup.php">Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="setup.php">Client list</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="setup.php">Information</a>
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

  <div id="set2">
   <form action="complete_reg.php" method="post">
   <div class="container">
        <h1>
            Complete Account Setup
          </h1>
          <h3>
            Enter your personal and company details to get started
          </h3>   

          
                         
          <?php if($error) { 
                            ?>
<div class="alert alert-danger"><?php echo $error; ?></div>


                          <?php   } ?>
                          
          <div class="row">
              <div class="col-md-5">
                <input type="text" placeholder="First Name" name="firstname" required>
                <input type="text" placeholder="Last Name" name="lastname" required>
                <input type="text" placeholder="Company Name" name="company_name" required>

                
                <input type="email" placeholder="Enter Email" value="<?php echo $_SESSION['new_user']; ?>" name="email" required readonly>

                <input type="number" placeholder="Phone number"  name="phone" required value="<?php echo $_SESSION['new_user_phone']; ?>" readonly>
                

               

              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5"> 
              <input type="address" placeholder="Address"  name="address" required>
                <input type="city" placeholder="City" name="city" required >
               
	<!-- <select name="state" class="state">
	<option>Chose State</option>
	<option>Abuja</option>
	<option>Kano</option>
	<option>Port Harcourt</option>
	
	</select> -->
                
                <input type="state" placeholder="State" name="state" required>

                <input type="country" placeholder="Country"  name="country" required>
              </div>
              <div class="col-md-1"></div>

            <p>
                <input type="checkbox" checked="checked" name="iagree" style="margin-bottom:15px" value="yes"> I confirm that I have all right to set up an account for the company name stated above
            </p>
          </div>
          <button type="submit"> COMPLETE SETUP </button>
    </div>
  </div>

</form>
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
