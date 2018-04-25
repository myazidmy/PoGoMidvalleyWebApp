<?php include 'includes/header.php';
	  include_once 'includes/includes.php';
	  //session_start();
?> 

<!-- includes header file to the top of the html -->

	<div id="content"> <!-- we will call the content dynamically -->
		<h3>Content</h3>

	 <!-- //sql div -->
	<form id="signup" action="includes/signup.php" method="POST">
			<input type="text" name="first" placeholder="Firstname">
		<br><input type="text" name="last" placeholder="Lastname">
		<br><input type="text" name="email" placeholder="E-mail">
		<br><input type="text" name="uid" placeholder="Username">
		<br><input type="password" name="pwd" placeholder="Password">
		<br><button type="submit" name="submit">Sign up</button>
	</form>

		<?php

			if(isset($_GET['about'])){

				include 'about.php';

			}else if (isset($_GET['products'])){

				include 'products.php';

			}else if (isset($_GET['contact'])){

				include 'contact.php';

			}

			//start a session
			// $_SESSION['username'] = "myazidmy";
			// echo $_SESSION['username'];
		?>

	</div>



	<?php
			// $data = "admin";
			// //Created a template
			// $sql ="SELECT * FROM users WHERE user_uid=?;";
			// //Create a prepare statement
			// $stmt = mysqli_stmt_init($conn);
						
			// //catch an error
			// if(!mysqli_stmt_prepare($stmt, $sql)){
			// 	echo "SQL STATEMENT FAILED";
			// }else{
			// 	//Prepare the prepared statement by binding the parameters to the placeholder
			// 	//s means string write ss if there is two where in line 46
			// 	//if ss we need to add another data place holder ie: $dataTwo after the first data placeholder ($data)
			// 	mysqli_stmt_bind_param($stmt, "s", $data);
			// 	//run parameters inside database
			// 	mysqli_stmt_execute($stmt);
			// 	$result = mysqli_stmt_get_result($stmt);

			// 	while($row = mysqli_fetch_assoc($result))
			// 		echo $row['user_uid'] . "<br>";
			// }




		?>

	</div>



<?php include 'includes/footer.php'; ?> 

</body>

</html>