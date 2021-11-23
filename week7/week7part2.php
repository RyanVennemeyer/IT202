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
/*
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


$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Jane', 'Smith', '2324456677', '123 Locke Street Newark, NJ 07102')";

$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Simon', 'Says', '8901234567', '3400 Central Avenue Newark, NJ 07102')";

$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Harry', 'Potter', '7891234567', '345 Warren Street Newark, NJ 07102')";

$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('John', 'Doe', '555-555-5555', '555 James Street Newark, NJ 07102')";
$sql = "INSERT INTO SecondTable (FirstName, LastName, PhoneNumber, Address)
VALUES ('Lydia', 'Johnson', '6789123456', '6565 Summit Street Newark, NJ 07102')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $con->error;
}


connecting 2 tables 
project3client
project3Appointment

SELECT * FROM project3client LEFT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID UNION SELECT * FROM project3client RIGHT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID




connecting 3 tables

project3client
project3Appointment
project3Product


SELECT * FROM project3client 
LEFT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID 
LEFT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID 
UNION 
SELECT * FROM project3client 
RIGHT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID 
LEFT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID 
UNION 
SELECT * FROM project3client 
RIGHT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID 
RIGHT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID

*/



$sql = "
SELECT * FROM project3client 
LEFT JOIN project3Appointment 
ON project3client.ClientID = project3Appointment.ClientID 
LEFT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID 
UNION SELECT * FROM project3client 
RIGHT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID 
LEFT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID 
UNION SELECT * FROM project3client 
RIGHT JOIN project3Appointment ON project3client.ClientID = project3Appointment.ClientID 
RIGHT JOIN project3Product ON project3Appointment.ClientID = project3Product.ClientID
";
$result = mysqli_query($con,$sql);
echo "<table>";


echo "<tr><td style='border: 1px solid black ;padding: 15px;'>Client First Name</td><td style='border: 1px solid black ;'> Client Last Name</td><td style='border: 1px solid black ;'>Client ID</td><td style='border: 1px solid black ;'>Appointment Type</td><td style='border: 1px solid black ;'>Date And Time</td><td style='border: 1px solid black ;'>Appointment ID</td><td style='border: 1px solid black ;'>Product Type</td><td style='border: 1px solid black ;'>Shipping Address</td><td style='border: 1px solid black ;'>Order ID</td></tr>";


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td style='border: 1px solid black ;padding: 15px;'>" . $row["ClientFirst"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["ClientLast"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["ClientID"]."</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["AppointmentType"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["DateAndTime"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" .$row["AppointmentID"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" .$row["ProductType"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" .$row["ShippingAddress"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" .$row["OrderNumber"]. "</td>
    </tr>";
    }
  } else {
  echo "0 results";
}
echo "</table>";
?>

</body>
</html>