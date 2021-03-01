
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
                    
   $id = $_POST["id"]; 

  		
	//$query = "DELETE FROM officer WHERE officer_id=".$id;
	$query = "UPDATE officer SET status = 'inactive' WHERE officer_id=".$id;
	//echo $id;
	//exit;
	if($conn->query($query) == false){
	echo 0;
	exit;
	}
	 //mysqli_query($conn,$query);
	 echo 1;
	exit;

   			 
        	/*$query = "UPDATE officer SET status = 'inactive' WHERE '$id' "
           
            if($conn->query($query) == false){
                 die("officer not found !!");
            }else{
                 header("Location: login.html");
            }*/
?>