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

   $sql = "SELECT officer_id,first_name,section_name,email,designation,status,authority from officer WHERE status = 'active' and email != 'admin' ";
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
      <title>Main</title>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300'>
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
      <link rel="stylesheet" href="resources/css/task_style.css">
      <link rel="stylesheet" href="resources/css/login_style.css">
      <link rel="stylesheet" href="resources/css/boostrap.css">
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
      <style>
     h2{margin-right : 1400px;}
         .logo{margin-left: 10px;
         margin-right: 10px;
         margin-top: 10px;
         margin-bottom: : 10px;
         float: left;}

         .pointer {cursor: pointer;}

         #search_bar{
            
         }
      </style>

   </head>
   <body>
      <script>
         function deleteOfficer(id){
            if (confirm("Are you want to delete?") === true) {
               // Do delete method in PHP
               
               
            } 
            else {
             // Cancel delete
            }
         }
      </script>
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
      <div class="cont_centrar">
         <table class="responstable">
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Section Name</th>
            <th>Authority</th>
            <th>Designation</th>
            <th>Status</th>
            <th>Action</th>
            <?php
               foreach($result_array as $row) { ?>
               <tr>
                  <td><?=$row["officer_id"]?></td>
                  <td><?=$row["first_name"]?></td>
                  <td><?=$row["email"]?></td> 
                  <td><?=$row["section_name"]?></td>
                  <td><?=$row["authority"]?></td>     
                  <td><?=$row["designation"]?></td> 
                  <td><?=$row["status"]?></td>  
                  <td><span class='deleteMe btn-danger pointer' type="button" id="<?=$row["officer_id"]?>">Delete</span></td>        
               </tr>
               <?php }
            ?>                
            
         </table>
      </div>
      <script>
       $(document).ready(function(){

          // Delete 
          $('.deleteMe').click(function(){
            var el = this;
            var delete_officer_id = this.id;
            var deleteid =parseInt(delete_officer_id,10);
            if(confirm('Are you sure you want to delete the officer?')){
            // AJAX Request
            $.ajax({
              url: 'removeOfficer.php',
              type: 'POST',
              data: { id:deleteid },
              success: function(response){
                 
                if(response == 1){
             // Remove row from HTML Table
             $(el).closest('tr').css('background','tomato');
             $(el).closest('tr').fadeOut(800,function(){
                $(this).remove();
                //alert('Officer removed !!');

             });
               }else{
             alert('Invalid Officer ID.');
               }

             }
            });

          }});
 });
      </script>
      <script src="resources/js/index.js"></script>
   </body>
</html>

