<?php
      $conn;
            include 'connection.php';
        
            $email = $_POST["login_email"];
            $password = $_POST["login_password"];
            
            $sql = "SELECT * from login where email ='$email' and password ='$password'";
            
            $result = mysqli_query($conn, $sql);
            if(mysqli_fetch_assoc($result)) {
               
            }
            else
            {
                echo file_get_contents("Login.html");
            }
            
        ?>

<!DOCTYPE html>
<html >
   <head>
      <meta charset="UTF-8">
      <title>TASK MANAGER</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link rel="stylesheet" href="resources/css/login_style.css">
      <link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css">

      <style>
         .bg {
         /* The image used */
         background-image: url("resources/img/pic.png");
         /* Full height */
         height: 100%; 
         /* Center and scale the image nicely */
         background-position: center;
         background-repeat: no-repeat;
         background-size: cover;
         }
         .li{float: left;}
      </style>
   </head>
   <body>
      <li>
         <img class="logo" src="resources/img/logo2.png" width="100" alt="image" height="70">
      </li>
      <div class="bg">
         <div class="cont_centrar">
            <div class="cont_login">
               <div class="cont_info_log_sign_up">
                  <div class="col_md_login">
                     <div class="cont_ba_opcitiy">
                        <h2>LOGIN</h2>
                        <p>Provide Your Registered Email And Password To LogIn.</p>
                        <button class="btn_login" onclick="cambiar_login()">LOGIN</button>
                     </div>
                  </div>
                  <div class="col_md_sign_up">
                     <div class="cont_ba_opcitiy">
                        <h2>SIGN UP</h2>
                        <p>Please SingUp If You Don't Have Any Registered Account.</p>
                        <button class="btn_sign_up" onclick="cambiar_sign_up()">SIGN UP</button>
                     </div>
                  </div>
                  </div
               </div>
               <div class="cont_forms" >
                  <div class="cont_img_back_">
                     <img src="https://images.unsplash.com/42/U7Fc1sy5SCUDIu4tlJY3_NY_by_PhilippHenzler_philmotion.de.jpg?ixlib=rb-0.3.5&q=50&fm=jpg&crop=entropy&s=7686972873678f32efaf2cd79671673d" alt="" />
                  </div>
                  <div class="cont_form_login"> 
                     <a href="SignUp.php" onclick="ocultar_login_sign_up()" ><i class="material-icons">&#xE5C4;</i></a>
                     <h2>LOGIN</h2>
                     <form  action="http://localhost:8080/webTec_Pro/main.php" method="POST">
                           <input type="text" name="login_email" placeholder="Email" id="log_form_email" required />
                           <input type="password" name="login_password" placeholder="Password" id="log_form_email" required/>
                           <input type="submit" value="Login" class="btn_login"/>

                     </form>

                  </div>
                  <div class="cont_form_sign_up">
                     <a href="#" onclick="ocultar_login_sign_up()"><i class="material-icons">&#xE5C4;</i></a>
                     <h2>SIGN UP</h2>
                     <form  action="http://localhost:8080/webTec_Pro/signup_controller.php" method="post">
                     <input type="text" name="signUp_email" placeholder="Email" id="SignUp_form_email"  required/>
                     <input type="text" name="signUp_user" placeholder="User" id="SignUp_form_email" required/>
                     <input type="password" name="signUp_password" placeholder="Password" id="SignUp_form_email" required/>
                     <input type="password" name="signUp_passwordConfirm" placeholder="Confirm Password" id="SignUp_form_email" required/>
                     <input type="text" name="signUp_designation" placeholder="Designation"id="log_form_email" required/>
                      <input type="submit" name="signUp" value="SignUP" class="btn_sign_up" required/>
                       </form>

             
                  </div>
               </div>
            </div>
             
            <div class="icon-bar">
               <div class="dropdown">
                  <div class="dropdown-content">
                     <p style="background-color: #122;margin-left: 50%; margin-bottom:50%; color: white;">Home</p>
                  </div>
                  <span><a class="active" href="#"><i class="fa fa-home"></i></a></span>
               </div>
               <div class="dropdown">
                  <div class="dropdown-content">
                     <p style="background-color: #122; margin-left: 50%;color: white;">Search</p>
                  </div>
                  <span><a href="#"><i class="fa fa-search"></i></a> </i></a></span>
               </div>
               <div class="dropdown">
                  <div class="dropdown-content">
                     <p style="background-color: #122; margin-left: 50%;color: white;">Email</p>
                  </div>
                  <span><a href="#"><i class="fa fa-envelope"></i></a></i></a></span>
               </div>
               <div class="dropdown">
                  <div class="dropdown-content">
                     <p style="background-color: #122; margin-left: 50%;color: white;">Contact</p>
                  </div>
                  <span>
                     <a href="#">
                        <i 
                        <p>&#x260E"</p>
                        </i>
                     </a>
                     </i></a>
                  </span>
               </div>
               <div class="dropdown">
                  <div class="dropdown-content">
                     <p style="background-color: #122; margin-left: 50%;color: white;">About Us</p>
                  </div>
                  <span><a href="Login.html"><i class="fa fa-male"></i></a></i></a></span>
               </div>
            </div>
         </div>
      </div>
      </div>
      <script src="resources/js/bootstrap.js"></script>
      <script src="resources/js/index.js"></script>
   </body>
</html>

<?php 
                  $sql = "DELETE FROM user WHERE user_id == id";
                  if($conn->query($query) == false){
                     die("user id not found !!");
                  }
                  else{
                    header("Location: main.php");
                  }
               ?>



               <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
      <script src="js/index.js"></script>