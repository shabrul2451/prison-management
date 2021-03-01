<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Add Officer</title>
<link href="resources/css/emp_style.css" rel="stylesheet" type="text/css">
<link href="resources/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
         a { margin-left: 150px;}
         .logo{margin-left: 00px;
         margin-right: 10px;
         margin-top: 10px;
         margin-bottom: : 10px;
         float: left;}
         ul{margin-left: 150px;}
        
      </style>
</head>

<body>
	<div class="w3-container w3-black">

  <ul>
         <img class="logo" src="resources/img/logo2.png" width="100" alt="image" height="70">

      </ul>
  <h1>Task Manager</h1>      
       
</div>



	<form  action="http://localhost:80/webTec_Pro/why.php" method="post">	
	<div id="maincont">
	<br>
	<div class="ki">
			
			<textarea class="form-control" name="tasktitle" placeholder="Task title" rows="1" cols="50" required></textarea>
			
		</div>
		
		</div>
	    <br>

		<div id="optionbar">

		<div class="form-group">

 		 <textarea class="form-control" name="description" placeholder="Task Description" rows="8" cols="50"></textarea>
 		 
		</div>
		<div class="kita">
		<div class="input-group">

 		 <input type="text" class="form-control" name="assign" placeholder="Assign To" aria-describedby="basic-addon2" required>
  		<span class="input-group-addon" id="basic-addon2">@gmail.com</span>
		</div>
			</div>

			<ul>
			<input type="submit"  name="signUp" value="Submit" class="btn btn-success" />
			</ul>
 		</ul>
		</nav>
		</div>
		</form>
	
		<div id="emp_messageform">
			


		</div>

		
	</div>


	
</body>
</html>
