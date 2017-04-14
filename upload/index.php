<?php
include_once 'configuration.php';
?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>

	<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="uploadbutton">upload</button>
	</form>
    <br /><br />
    <?php
	if(isset($_GET['success']))
	{
		?>
        <label>File Uploaded Successfully...  <a href="redirect2admin.php">click here to view file.</a></label>
        <?php
	}
	else if(isset($_GET['fail']))
	{
		?>
        <label>Problem While File Uploading !</label>
        <?php
	}
	else
	{
		?>
        <label>File types that you can upload (.pdf, .ppt, .doc, .jpg, .exe, .mp3, vedio, .zip)</label>
        <?php
	}
	?>

</body>
</html>