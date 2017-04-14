<?php
include_once 'configuration.php';
if(isset($_POST['uploadbutton']))
{    
     
	$file = rand(1000,100000)."-".$_FILES['file']['name'];
    $fileLoc = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileType = $_FILES['file']['type'];
	$folder="uploads/";

	$newSize = $fileSize/1024;

	$newFileName = strtolower($file);

	$finalFile=str_replace(' ','-',$newFileName);
	
	if(move_uploaded_file($fileLoc,$folder.$finalFile))
	{
		$sql="INSERT INTO dbms(file,type,size) VALUES('$finalFile','$fileType','$newSize')";
		mysqli_query($con,$sql);
		?>
		<script>
		alert('successfully uploaded');
        window.location.href='index.php?success';
        </script>
		<?php
	}
	else
	{
		?>
		<script>
		alert('error while uploading file');
        window.location.href='index.php?fail';
        </script>
		<?php
	}
}
?>