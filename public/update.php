<html><head>
  <?php
  include("connection.php");

  $busno = $_POST['busno'];
  $noofbus = $_POST['noofbus'];

  $sql = "UPDATE `businfo` SET `noofbus` = '$noofbus' WHERE `businfo`.`busno` = '$busno'";

  if(mysqli_query($per, $sql) == true){
    header("refresh:0.001 ; url=businfo.php");
  }
  else{
    echo '<script type="text/javascript"> window.alert("Error !!,value not entered");</script>';
    header("refresh:0.001 ; url=index.html");
  }

 ?>
</head></html>
