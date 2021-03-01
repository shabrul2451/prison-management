<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db="prison";

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
    <link href="resources/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="resources/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="resources/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="resources/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="resources/css/main.css" rel="stylesheet" media="all">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="resources/css/task_style.css">
      <link rel="stylesheet" href="resources/css/login_style.css">
      <link rel="stylesheet" href="resources/css/boostrap.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <style>
      h2{margin-right : 950px;}
         .logo{margin-left: 10px;
         margin-right: 10px;
         margin-top: 10px;
         margin-bottom: : 10px;
         float: left;}

         #search_bar{
            
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
                  <li class="navLi"><a href="addOfficer.php"> Add Officer</a></li>

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
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="First Name" name="firstName">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Last Name" name="lastName">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="password" placeholder="Password" name="password">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Phone no" name="phone_no">
                        </div>
                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Email" name="email">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Sec ID">
                                            <option disabled="disabled" selected="selected">Sec Id</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="Designation">
                                            <option disabled="disabled" selected="selected">Designation</option>
                                            <option>Duty officer</option>
                                            <option>Incharge</option>
                                            <option>Other</option>
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

    <!-- Jquery JS-->
    <script src="resources/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="resources/vendor/select2/select2.min.js"></script>
    <script src="resources/vendor/datepicker/moment.min.js"></script>
    <script src="resources/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="resources/js/global.js"></script>
      <script src="js/index.js"></script>
   </body>
</html>


$sql = "SELECT no_of_prisoners from section WHERE sec_name == $section";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result)