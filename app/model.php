<?php require_once('include/connection.php'); ?>
<?php
	$first_name='jee1';
	$last_name='nova';
	$email='jeny@gmail.com';
	$password='jeny@123';
	$is_deleted=0;


	$hashed_password=sha1($password);
	//echo "hashed password:{$hashed_password}";
	$query = "INSERT INTO user (first_name, last_name, email, password, is_deleted) 
			VALUES('{$first_name}','{$last_name}','{$email}','{$hashed_password}','{$is_deleted}')";

	$result = mysqli_query($connection, $query);
	
	if($result){
	    echo "recorded added";
	}
	else{
	    echo "not added";
	}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Query</title>
</head>
<body>
    <!-- <h1>model</h1> -->

</body>
</html>

<?php mysqli_close($connection); ?>
