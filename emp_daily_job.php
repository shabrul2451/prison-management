<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $db="prison";

   $filterStatus = isset($_GET["status"]) == true ? $_GET["status"] : null;

   // Create connection
   $conn = new mysqli($servername, $username, $password,$db);
   session_start();
   $email = $_SESSION["login_email"];
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
   }
   if($filterStatus != null) {
    $sql="SELECT * FROM task_details where assigned_to = '$email' and status = '$filterStatus'";
   } else {
    $sql = "SELECT * FROM task_details where assigned_to = '$email'";
   }
   $result = mysqli_query($conn, $sql);
   $result_array = [];
    while($row = mysqli_fetch_assoc($result)) {
        $result_array[] = $row;
    }
   mysqli_close($conn);
?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>emp | Daily Job</title>
<link href="resources/css/emp_style2.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<style>
h2{margin-left: 750px;}

         .logo{margin-left: 10px;
         margin-right: 10px;
         margin-top: 10px;
         margin-bottom: : 10px;
         float: left;}

         #search_bar{
            
         }
    
</style>
<body>
<div id="nev1">
<img class="logo" src="resources/img/logo2.png" width="100" alt="image" height="70">
	<h2>Task Manager</h2>
	<ul>
		<li><a id="active" href="emp_daily_job.php">Worksheet</a></li>
		<li><a href="emp_message.html">Message</a></li>
		<li><a href="Login.html">Logout</a></li>
		
	</ul>
</div>




	<div id="maincont">
	<br>
	<br>
	 <h2>Task List</h2>
	<span id="task_name">
  
   		 <?php
               foreach($result_array as $row) { ?>

               <a href="http://localhost:80/webTec_Pro/job_details.php?id=<?=$row['id']?>" class="list-group-item"><?=$row["taskname"]?></a>
  				
  				<?php }
            ?>   

	</span>
		<span id="">
		<div id="optionbar">
			<form id="filterForm" action="emp_daily_job.php" method="GET">
			<select name="status" onchange="filterSubmit()">
         <option value="">ALL</option> 
        <?php 
          if($filterStatus == "Pause") { ?>
            <option value="Pause" selected>Pause</option>
          <?php } else { ?>
            <option value="Pause">Pause</option>
          <?php }
        ?>
        <?php 
          if($filterStatus == "Start") { ?>
            <option value="Start" selected>Start</option>
          <?php } else { ?>
            <option value="Start">Start</option>
          <?php }
        ?>
        <?php 
          if($filterStatus == "Complete") { ?>
            <option value="Complete" selected>Complete</option>
          <?php } else { ?>
            <option value="Complete">Complete</option>
          <?php }
        ?>        
       
      </select>
			</form>
		</div>
		</span>
		
	</div>

<script>
    function filterSubmit() {
      document.getElementById("filterForm").submit();
    }
</script>

</body>
</html>
