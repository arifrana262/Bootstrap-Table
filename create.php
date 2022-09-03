<?php

include_once './config/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
   $FirstName = $_POST['first_name'];
   $LastName = $_POST['last_name'];
   $DistrictName = $_POST['district_name'];
   $PostCode = $_POST['post_code'];
}

$sql = "INSERT INTO persons (FirstName, DistrictName, LastName, PostCode)  
 VALUES ('$FirstName' , '$DistrictName' , '$LastName' , '$PostCode')";




if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// mysqli_close($conn);

// $conn->close();