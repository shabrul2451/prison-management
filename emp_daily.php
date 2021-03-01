<?php
             $conn;
            include 'connection.php';
            
            $status = $_POST["status"];
            $task = $_POST["comment"];
            if($status == "Complete")
            {
                
                $sql = "UPDATE task_details set finish= '" . date('Y-m-d H:i:s') . "' where description='$task' ";
            }
            if($status == "Start")
            {
                
                $sql = "UPDATE task_details set start= '" . date('Y-m-d H:i:s') . "' where description='$task' ";
                
            }


                        
            $query = "UPDATE task_details set status='$status' where description='$task' ";
            
        
            if($conn->query($query) == false){
				 die("Data is not inserted: ");
                   header("Location: job_details.php");
         }
            else
         {
                header("Location: emp_daily_job.php");
         }
        
		
		?>