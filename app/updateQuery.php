<?php require_once('include/connection.php'); ?>
<?php


    $query= "UPDATE user
    set first_name='john' WHERE id=5";
    $result=mysqli_query($connection,$query);
    if($result){
        echo mysqli_affected_rows($connection). "updated";    //return number rows afffected
    }

    else{
        echo "failed";
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
