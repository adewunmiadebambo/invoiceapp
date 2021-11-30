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

  <div id="now">
      <div class="container">
        <h1>Total No. of Invoices (15)</h1>
          <div class="row">
              <div class="col-md-9">
                  <div class="row">
                    <div class="col-md-4">
                        <input type="button" value="Completed Invoices (0)" style="background-color: #679034;">
                      </div>
                      <div class="col-md-4">
                        <input type="button" value="Pending Invoices (10)" style="background-color: #F2713F;">
                    </div>
                    <div class="col-md-4">
                        <input type="button" value="Part Invoices (5)">
                    </div> 

                  </div>
              </div>
            
            
            
            
            <div class="col=md=3">
            </div>
          </div>
          <div id="search">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <div class="input-group">
                        <input class="form-control py-2 rounded-pill mr-1 pr-5" type="search" value="search" id="example-search-input">
                        <span class="input-group-append">
                            <button class="btn rounded-pill border-0 ml-n5" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
      </div>
  </div>

 <div id="table">
    <div class="container">
        <div class="row">
         <div class="col-md-12">
            <table style="width:100%">
                 <thead>
                     <tr>
                         <th>Invoice Date</th>
                         <th>Bills To</th>
                         <th>Subject</th>
                         <th>Sent to</th>
                         <th>Paid (%)</th>
                         <th>Action</th>
                     </tr>
                 </thead>
                 <tbody style="width: 100%;">
                     <tr style="background-color: #F3F3F3;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
                     <tr style="background-color: #D5D5D5;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
                     
                     <tr style="background-color: #F3F3F3;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
                     
                     <tr style="background-color: #D5D5D5;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
         
                     <tr style="background-color: #F3F3F3;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
         
                     <tr style="background-color: #D5D5D5;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
                     
                     <tr style="background-color: #F3F3F3;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
                     
                     <tr style="background-color: #D5D5D5;">
                         <td>02-NOV-2020</td>
                         <td>Femi Oudola Micha...</td>
                         <td>Invoice for Brnd Design and...</td>
                         <td>femioduola@ahoo.com</td>
                         <td>80%</td>
                         <td><i class="fa fa-check" id="btn1"></i><i class="fa fa-pause" id="btn1"></i><i class="fa fa-redo-alt" id="btn1"></i><i class="fa fa-trash" id="btn1"></i></td>
                     </tr>
         
                 </tbody>
         
               </table>
         </div>
        </div>
       </div>
      
 </div>
  
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
