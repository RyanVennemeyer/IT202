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


?>


<?php 
session_start();

$ans = $_GET["StudentID"]; 
echo ".$ans.";
$sql = "SELECT IT202Student.Name ,IT202Transcript.StudentID, IT202Student.Major, IT202Transcript.Course,IT202Transcript.Grade 
FROM IT202Student 
INNER JOIN IT202Transcript ON IT202Student.StudentID = IT202Transcript.StudentID 
Where IT202Student.StudentID =$ans";

  
  $result = mysqli_query($con,$sql);
echo "<table>";


echo "<tr><td style='border: 1px solid black ;padding: 15px;'>Name</td><td style='border: 1px solid black ;'> ID</td><td style='border: 1px solid black ;'>Major</td><td style='border: 1px solid black ;'>Course</td><td style='border: 1px solid black ;'>Grade</td></tr>";


if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td style='border: 1px solid black ;padding: 15px;'>" . $row["Name"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["StudentID"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["Major"]. "</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["Course"]."</td><td style='border: 1px solid black ;padding: 15px;'>" . $row["Grade"]. "</td></tr>";
    }
  } else {
  echo "0 results";
}
echo "</table>";

?>
<input Type="button" name="home" value = "home" onClick="window.location.href= 'https://web.njit.edu/~rv356/IT202HW11/' ">

</body>
</html>