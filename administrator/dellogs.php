
<?php

 require_once("include/connection.php");

$id = mysqli_real_escape_string($conn,$_GET['id']);


mysqli_query($conn,"DELETE FROM  history_log WHERE id='$id'")or die(mysql_error());
echo "<script type='text/javascript'>alert('Logged User!');document.location='user_log.php'</script>";
?>
