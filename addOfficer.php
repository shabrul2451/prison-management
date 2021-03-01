<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db="management_of_prison";

   // Create connection
   $conn = new mysqli($servername, $username, $password,$db);
   
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
?> 

<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
          <!-- Title Page-->
    <title>Officer Register Forms</title>
        <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      
      <link rel="stylesheet" href="resources/css/boostrap.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
      h2{margin-right : 950px;}
         .logo{margin-left: 10px;
         margin-right: 10px;
         margin-top: 10px;
         margin-bottom: : 10px;
         float: left;}

        
         .nav ul {
     float: left;
     width: 100%;
	
}
.nav ul li {
     float: right;
	 
}
.nav ul li:last-child {
     float: right;
}

.navLi {
    
   margin-left: 10px;
    font-size: 1em;
    text-transform: uppercase;
    color: #594f4f;
    display: inline;
    background-color: #167F92;
    font-family:sans-serif;
}


li {
    float: right;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 30px 30px;
    text-decoration: none;
}

li a:hover {
    background-color: #122;
}
         .form-margin{
         	margin-left: 180px;
         }
      </style>
   </head>
   <body>
      <div class="header">
         <div class="w3-container w3-black">
          <img class="logo" src="resources/img/logo2.png" width="100" alt="image" height="70">
            <div class="lining">
               <ul b class="navUl">

                  <li class="navLi"><a href="Login.html"> LogOut</a></li>
                  <li class="navLi"><a href="main.php"> Home</a></li>

               </ul>

            </div>
            <h2>Prison Mangement</h2>
         </div>
      </div>
	  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title form-margin">Registration</h2>
                    <form  action="http://localhost:80/webTec_Pro/createUser.php" method="post">
                        <div class="input-group form-margin">
                            <input class="input--style-1 " type="text" placeholder="First Name" name="firstName" required>
                        </div>
                        <div class="input-group form-margin">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lastName" required>
                        </div>
                        <div class="input-group form-margin">
                            <input class="input--style-1" type="text" placeholder="Email" name="email" required>
                        </div>
                        <div class="input-group form-margin">
                            <input class="input--style-1" type="password" placeholder="Password" name="password" required>
                        </div>
                        <div class="input-group form-margin">
                            <input class="input--style-1" type="password" placeholder="Confirm Password" name="conf_password" required>
                        </div>
                        <div class="input-group form-margin">
                            <input class="input--style-1" type="text" placeholder="Phone no" name="phone_no" required>
                        </div>
                        <div class="row row-space">
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="secId">
                                            <option disabled="disabled" selected="selected">Section Name</option>
                                            <option value="Ruposhi">Ruposhi</option>
                                            <option value="Jamuna">Jamuna</option>
                                            <option value="Padma">Padma</option>
                                            <option value="Meghna">Meghna</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="role">
                                            <option disabled="disabled" selected="selected">Authority Options</option>
                                            <option value="ROLE_OFFICER">Role Officer</option>
                                            <option value="ROLE_ADMIN">Role Admin</option>
                                            <option value="ROLE_GUEST">Role Guest</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        
                            <div class="col-3">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="designation">
                                            <option disabled="disabled" selected="selected">Designation</option>
                                           <option value="Duty officer">Duty officer</option>
                                            <option value="Incharge">Incharge</option>
                                            <option value="Other">Other</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- add script-->
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
      <script src="resources/js/index.js"></script>
   </body>
</html>