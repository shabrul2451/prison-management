 
 <?php
             $conn;
            include 'connection.php';
            
        
            $firstName = $_POST["firstName"];
            $lastName = $_POST["lastName"];
            $password = $_POST["password"];
            $conf_password = $_POST["conf_password"];
            $phone_no= $_POST["phone_no"];
            $section = $_POST["secId"];
            $status = "active";
     
            
            if($password == $conf_password){
           
                $query =  "INSERT INTO user(first_name, last_name, section_name, phone_no, password, email, designation, status, authority) 
                   VALUES ('$firstName','$lastName','$section',$phone_no,'$password','$email','$designation','$status','$authority')";
                if($conn->query($query) == false){
                     die("user info invalid!! Try Again !!");
                }else{
                     header("Location: main.php");
                }
                
            } else{
                    die("password did not match try again!!");
                    header("Location: addOfficer.php");
            }
        
		
		?>