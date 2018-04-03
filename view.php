<?php 
include_once 'dbconfig.php';
?>



<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CODE CHECK RESULTS</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="header">
<label> File Uploading </label> 	
</div>

<div id = "body">
	
	
<table width="80%" border="1">
    <tr>
    <th colspan="5">your uploads...<label><a href="index.php">upload new files...</a></label></th>
    </tr>
    <tr>
    <td>File Name</td>
    <td>File Type</td>
    <td>File Size(KB)</td>
    <td>View</td>
    <td>Last Modified</td>
    </tr>
    <?php
	$sql="SELECT * FROM tbl_uploads";
	$result_set=mysql_query($sql);
	while($row=mysql_fetch_array($result_set))
	{
		?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        <td><?php echo $row['mtime'] ?></td>
        </tr>
        <?php
	}
	?>
    </table>

	</div>

</body>
</html>
