<!DOCTYPE html>
<html>
<head>
	<title>Make An Order</title>
	<link rel="stylesheet" type="text/css" href="Order_page.css" />
</head>
<body>
	<div class = "navbar">
		<ul>
  			<li><a href="mainpage.html">Home</a></li>
  			<li><a href="login.html">Admin Login</a></li>
  			<li><a href="userLogin.html">User Login</a></li>
 			
		</ul>
	</div>

	<div class = "bodypart" align = "center">
		<p>Welcome to the Library Management System</p>
		<br>
		<p>You Can Use The Product Table To Select The Products </p>
		<br>
		<div id="table">
				<?php
				$con=mysqli_connect("localhost","root","","library_management");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result = mysqli_query($con,"SELECT * FROM Views");

				echo "<table border='1' background-color: white;>
				<tr>
				<th>product_id</th>
				<th>user_id</th>
				
				</tr>";

				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
				{
				echo "<tr>";
				echo "<td>" . $row['product_id'] . "</td>";
				echo "<td>" . $row['user_id'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
				?>
		</div> 
		<div id="table2">
				<?php
				$con=mysqli_connect("localhost","root","","library_management");
				// Check connection
				if (mysqli_connect_errno())
				{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}

				$result2 = mysqli_query($con,"SELECT * FROM Products");

				echo "<table border='1' background-color: white;>
				<tr>
				<th>product_id</th>
				<th>title</th>
				<th>rating</th>
				<th>author</th>
				<th>publication_date</th>
				<th>page_count</th>
				<th>product_count</th>
				</tr>";

				while($row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC))
				{
				echo "<tr>";
				echo "<td>" . $row['product_id'] . "</td>";
				echo "<td>" . $row['title'] . "</td>";
				echo "<td>" . $row['rating'] . "</td>";
				echo "<td>" . $row['author'] . "</td>";
				echo "<td>" . $row['publication_date'] . "</td>";
				echo "<td>" . $row['page_count'] . "</td>";
				echo "<td>" . $row['product_count'] . "</td>";
				echo "</tr>";
				}
				echo "</table>";
				?>
		</div> 
		<p>Please Fill Out The Form Below</p>
		<div class = "Orderform">
				<div id="form"> 
					<h3> Make Order </h3> 
					<div class = "forminside">
						<form action='add_user_Order.php' method=POST>
						
						<label for="user_id">user id: </label>
						<input type='text' id ="user_id" name='user_id' placeholder="Please Enter id"> 
						<br>
						<br>
						
						<label for="fname">Name: </label>
						<input type='text' id ="fname" name='user_name' placeholder="Please Enter Your Name"> 
						<br>
						<br>

						<label for="sname">surname: </label>
						<input type='text' id ="sname" name='user_surname' placeholder="Please Enter Your surname"> 
						<br>
						<br>
						
						<label for="fmail">E-Mail: </label>
						<input type='text' id ="fmail" name='user_email' placeholder="Please Enter your Mail"> 
						<br>
						<br>
						
						<label for="faddress">Address: </label>
						<input type='text' id ="faddress" name='user_address' placeholder="Please Enter Address"> 
						<br>
						<br>
						
						
						<label for="pid">product ID: </label>
						<input type='text' id ="pid" name='product_id' placeholder="Please Enter product ID"> 
						<br>
						<br>
						
						<input type='submit' value="Make Order">
						<br>
						</form>
					</div>
				</div> 
			</div>
	</div>

</body>
</html>
