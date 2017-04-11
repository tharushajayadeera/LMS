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

    $name = mysqli_real_escape_string($conn,$_POST['nm']);
    $subject = mysqli_real_escape_string($conn,$_POST['sb']);
    $email = mysqli_real_escape_string($conn,$_POST['em']);
    $tel = mysqli_real_escape_string($conn,$_POST['tel']);
    $msg = mysqli_real_escape_string($conn,$_POST['msg']);


    $sql = "insert into contact (Name,Subject,Email,Mobile,Message)
VALUES ('$name','$subject','$email','$tel','$msg')";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
        echo"Your Inquiry sent sucessfully";
    }else {
        echo "Your Login Name or Password is invalid";
    }
}
?>

</html>



