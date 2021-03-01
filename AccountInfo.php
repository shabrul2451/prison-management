<?php
             $conn;
            include 'connection.php';
                
            $sql = "SELECT username,email,designation from signup where email !='nahid@gmail.com'";
            
            $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        $result_array[] = $row;
    }

   mysqli_close($conn);
    
    ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Task Manager</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="resources/css/account_style.css">
 
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

  <style>
    h2{margin-left: 100px;}
  </style>
</head>

<body>
<div class="w3-container w3-black">

      <ul>
         <img class="logo" src="resources/img/logo2.png" width="100" alt="image" height="70">

      </ul>
      
       
</div>

   <div class="table-users">
   <div class="header">Employee Information</div>
   
   <table cellspacing="0">
      <tr>
         
         <th>UserName</th>
         <th>Email</th>
         <th width="230">Designation</th>
      </tr>

       <?php
               foreach($result_array as $row) { ?>
               <tr>
                  <td><?=$row["username"]?></td>
                  <td><?=$row["email"]?></td>
                  <td><?=$row["designation"]?></td> 
                                
               </tr>
               <?php }
            ?> 

      
   </table>
</div>
   
  
</body>
</html>
