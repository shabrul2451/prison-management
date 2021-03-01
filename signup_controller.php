 
 <?php
             $conn;
            include 'connection.php';
            
        
            $name = $_POST["signUp_name"];
            $email = $_POST["signUp_email"];
            $password = $_POST["signUp_password"];
            $conf_password = $_POST["signUp_passwordConfirm"];
            $phone_no= $_POST["signUp_phoneNo"];
            $guest = "Guest";
            $deg = "none";
            $status = "active";
            $authority = "ROLE_GUEST";
            
            if($password == $conf_password){
           
                $query = "INSERT INTO guest(name,email,phone_no,password) 
                VALUES('$name','$email','$phone_no','$password')";
                if($conn->query($query) == false){
                     die("Guest info invalid!! Try Again !!");
                      header("Location: login.html");
                }
                else {
                   $query_user =  "INSERT INTO officer(first_name, last_name, section_name, phone_no, password, email, designation, status, authority) 
                   VALUES ('$guest','$name',' ',$phone_no,'$password','$email','$deg','$status','$authority')";
                   if($conn->query($query_user) == false){
                        die("user info invalid!!");
                    }
                    else{
                        header("Location: login.html");
                    }
                }
                
            } else{
                    die("password did not match try again!!");
                    header("Location: login.html");
            }
        
		
		?>