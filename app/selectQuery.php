<?php require_once('include/connection.php'); ?>

<?php

$query="SELECT first_name,email FROM user";
$result_set=mysqli_query($connection,$query);

if($result_set){
    echo mysqli_num_rows($result_set); //cheking how many records
    echo "<br>";
    echo "query sucesful";

    //$record=mysqli_fetch_assoc($result_set);    getting first record
    //print_r($record);

    $table= '<table>';
    $table .='<tr>
    <th>FirstName</th>
    <th>Email</th>
    </tr>';
    while($record=mysqli_fetch_assoc($result_set)){
        //print_r($record);

        $table .='<tr>';
        $table .='<td>' . $record['first_name'].'</td>';
        $table .='<td>' . $record['email'].'</td>';
       
    }

    $table .='</table>';


}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>select query</title>
    <style>
    table{border-collapse: collapse;}
    td,th{border: 1px solid black;
    padding: 10px;}
    </style>
</head>
<body>
    <!-- <h1>hello</h1> -->
    <?php 
    echo $table;
    ?>

</body>
</html>

<?php mysqli_close($connection); ?>
