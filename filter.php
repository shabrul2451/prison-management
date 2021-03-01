<?php
			include 'connection.php';
			$status= $_POST["status"];
			$email= $_SESSION["login_email"];
			$sql="SELECT * FROM task_details where assigned_to = '$email' and status = '$status";
       
            $result = mysqli_query($conn, $sql);
    		while($row = mysqli_fetch_assoc($result)) {
      		  $result_array[] = $row;
    		}
   				mysqli_close($conn);

?>