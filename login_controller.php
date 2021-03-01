<html>
<?php
		$conn;
            include 'connection.php';
        
            $email = $_POST["login_email"];
            $password = $_POST["login_password"];
            
            $sql = "SELECT * from officer where email ='$email' and password ='$password'";
            
            $result = mysqli_query($conn, $sql);
            session_start();
            $_SESSION["login_email"] = $_POST["login_email"];
            $row = mysqli_fetch_assoc($result);
            if($row) {
                if( $row["authority"] == "ROLE_ADMIN"){
                    header("Location: main.php");
                }
                else if($row["authority"] == "ROLE_OFFICER"){
                        header("Location: officerMain.php");
                //include 'emp_daily_job.php';
                } else {
                    header("Location: about.html");
                 }
            }
            else{
                header("Location: login.html");
            }
            
        ?>
        </html>