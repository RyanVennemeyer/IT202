$servername = "sql1.njit.edu";
$username = "rv356";
$password = "Superman*^8520";
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
