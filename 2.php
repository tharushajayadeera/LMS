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

    $sql = "SELECT id FROM login WHERE username = '$usern' and password = '$passw'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    $admin = "SELECT id FROM login WHERE username = '$usern' and password = '$passw' and permission='admin'";
    $result2 = mysqli_query($conn,$admin);
    $row2 = mysqli_fetch_array($result2,MYSQLI_ASSOC);
    $active2 = $row2['active'];

    $count2 = mysqli_num_rows($result2);

    if($count2 == 1)
    {
        session_start("usern");
        $_SESSION['login_user'] = $usern;
        header("location: redirectadmin.php");
    }
    else if($count == 1)
    {
        session_start("usern");
        $_SESSION['login_user'] = $usern;
        header("location: redirect.php");
        }
    else
    {
            echo "Your Login Name or Password is invalid";
    }
}
?>

</html>
