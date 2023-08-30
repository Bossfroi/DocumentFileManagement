<?php

 require_once("include/connection.php");

$id = mysqli_real_escape_string($conn,$_GET['ID']);


mysqli_query($conn, "UPDATE upload_files SET archive='1' WHERE ID='$id'") or die(mysqli_error($conn));
echo "<script type='text/javascript'>alert('Deleted File!');document.location='add_document.php'</script>";
?>
