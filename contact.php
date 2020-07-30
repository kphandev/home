	<!DOCTYPE html>
	<html>
	<head>
		<title>KPhan Personal Page</title>

		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" 

		href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">

		<link rel="stylesheet"
		href="https://fonts.googleapis.com/css?family=Space+Mono">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>

	<body>
		<nav class = "container">
			<input type="checkbox" id ="check">
			<label for="check" class = "checkbtn">
				<i class = "fas fa-bars" id = "hamburgerIcon"></i>

			</label>
			<label class = "logo"> KEVIN PHAN </label>
			<ul>
				<li><a href = "https://kphanplan.github.io/home/"> ○ HOME</a></li>
				<li><a href = "https://kphanplan.github.io/home/about"> ○ ABOUT </a></li>
				<li><a href = "https://kphanplan.github.io/home/projects"> ○ PROJECTS </a></li>
				<li><a class = "active" href = "https://kphanplan.github.io/home/contact"> ○ CONTACT </a></li>
			</ul>		
			<section></section>
		</nav>

		<!-- CONTENT BELOW -->
		<div class = "container flex black">
			<div class = "row">
				<div class = "col col-lg-6 ">

					<form action="" method="POST">
						<label> Name: 
							<input type="text" name="Name" class="Input" style="width: 225px" required>
						</label>
						<br><br>
						<label> Comment: <br>
							<textarea name="Comment" class="Input" style="width: 300px" required></textarea>
						</label>
						<br><br>
						<input type="submit" name="Submit" value="Submit Comment" class="Submit">
						<h2><br>C O M M E N T S</h2>
					</form> 
				</div>
			</div>
		</div>

		<div class = "container">

		</div>
	</body>
	</html>

<?php
 
 if($_POST['Submit']){
  print "<h1>Your comment has been submitted!</h1>";

  $Name = $_POST['Name'];
  $Comment = $_POST['Comment'];

  #Get old comments
  $old = fopen("comments.txt", "r+t");
  $old_comments = fread($old, 1024);

  #Delete everything, write down new and old comments
  $write = fopen("comments.txt", "w+");
  $string = "<b>".$Name."</b><br>".$Comment."<br>\n".$old_comments;
  fwrite($write, $string);
  fclose($write);
  fclose($old);
 }

 #Read comments
 $read = fopen("comments.txt", "r+t");
 echo "<br><br>Comments<hr>".fread($read, 1024);
 fclose($read);