<?php
include_once 'dbconfig.php';
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code Check</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div id = "body">
<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file" />
	<button type="submit" name="btn-upload">upload</button>
	
</form>
<br/> <br/>
<?php 
if(isset($_GET['success']))
{
	?><label>File Uploaded Successfully...!!!!  <a href="view.php">click here to view file.</a></label>
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
        /*<label>Try to upload any files(PDF, DOC, EXE, VIDEO, MP3, ZIP,etc...)</label>*/
        <?php
	}
?>



	<h2> This is a test !!! </h2>
			
</div>
</body>
</html>
