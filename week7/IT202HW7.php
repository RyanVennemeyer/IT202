<!DOCTYPE html>
<html>
    <head>

    </head>
<body>

<h1>PHP Connect TEST</h1>
<?php
//Makes DB connection
$servername = "sql1.njit.edu";
$username = "rv356";
$password = "password";
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

$sql = "CREATE TABLE SecondTable (
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    PhoneNumber VARCHAR(255),
    Address VARCHAR(255)
    
)";

if ($con->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}


$sql = " INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Jane', 'Smith', '2324456677', '123 Locke Street Newark, NJ 07102')";
$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Simon', 'Says', '8901234567', '3400 Central Avenue Newark, NJ 07102')";
$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Harry', 'Potter', '7891234567', '345 Warren Street Newark, NJ 07102')";
$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('John', 'Doe', '555-555-5555', '555 James Street Newark, NJ 07102')";
$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Lydia', 'Johnson', '6789123456', '6565 Summit Street Newark, NJ 07102')";

?>

</body>
</html>