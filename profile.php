<html>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="nsbm";


// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
else
{
    echo "Connected successfully<br>";
}


if($_SERVER["REQUEST_METHOD"] == "POST") {

    $usern = mysqli_real_escape_string($conn,$_POST['username']);
    $passw = mysqli_real_escape_string($conn,$_POST['password']);

    $sql = "SELECT * FROM login WHERE username = '$usern' and password = '$passw'";
    $result = mysqli_query($conn,$sql);

    if($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
    {
       echo("hi");
    }else {
        echo "Your Login Name or Password is invalid";
    }
}

?>

</html>