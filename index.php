<?php require "db.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>Basic Crud with PHP and mysqli | Insert Data</h1>
	<p><a href="view.php">view</a></p>
	<?php 

		if( isset( $_POST['submit'] ) ) {
			if ( isset( $_POST['name'] ) ) {
				$name=$_POST['name'];
			}
			if ( isset( $_POST['email'] ) ) {
				$email=$_POST['email'];
			}
			
			$insert=" INSERT INTO students ( name,email ) VALUES ( '$name' , '$email' )";
			if ( $con->query( $insert ) == true ) {
				echo "data insterted successfully";
			}
			else {
				echo "Error $insert $con->error";
			}
		}

	?>
	<form method="post" action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ) ?>">
		<p>
			<label for="name" title="Name">Name
				<input type="text" name="name" id="name" placeholder="Name" required>	
			</label>
	    </p>
	    <p>
			<label for="email" title="Email" >Email
				<input type="email" name="email" id="email" placeholder="Email" required>
			</label>
		</p>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>
