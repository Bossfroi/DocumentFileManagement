<?php

 require_once("include/connection.php");

$id = mysqli_real_escape_string($conn,$_GET['ID']);


mysqli_query($conn, "UPDATE upload_files SET archive='0' WHERE ID='$id'") or die(mysqli_error($conn));
echo "<script type='text/javascript'>alert('Restore File!');document.location='view_userfile.php'</script>";
?>
