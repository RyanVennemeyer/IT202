<!DOCTYPE html>
<html>
    <head>

    </head>
<body>

<?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "rv356";
$password = "passowrd";
$dbname = "rv356";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
 {
echo "CONNECTED ";
}
/*
$sql = "CREATE TABLE WEEEK8 (
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    PhoneNumber VARCHAR(255),
    Address VARCHAR(255)
    
)";

if ($con->query($sql) === TRUE) {
  echo "Table WEEEK8 created successfully";
} else {
  echo "Error creating table: " . $con->error;
}


$sql = "INSERT INTO WEEEK8 (FirstName, LastName, PhoneNumber, Address)
VALUES ('Maura', 'Deek', '973-596-3368', '323 MLK Blvd Newark, NJ 07102')";


if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}
*/
$sql = "SELECT FirstName, LastName, PhoneNumber,Address FROM WEEEK8";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "First Name: " . $row["FirstName"]. "<br>". "Last Name:" . $row["LastName"]. "<br>". "Phone Number:" . $row["PhoneNumber"]."<br>" . "Address:". $row["Address"]."<br>";
  }
} else {
  echo "0 results";
}


?>

</body>
</html>