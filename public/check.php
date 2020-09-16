<html><head></head><body>

  <?php
  include("connection.php");


  $email = $_POST['email'];
  $password = $_POST['password'];

  //echo $email." ".$password;

  $sql = "select * from login";
  $result = mysqli_query($per, $sql);

  if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      //echo "email: " . $row["email"]. " - pass: " . $row["password"]."<br>";
        if($email === $row["username"] && $password === $row["password"]){
              $count++;
        }
    }

            if($count!=0){
              header("refresh:0.001 ; url=businfo.php");
            }
            else{
              echo '<script type="text/javascript"> window.alert("Please, Check the Email and Password");</script>';
              header("refresh:0.001 ; url=index.html");
            }
}
 else {
    echo "0 results";
}



?>
</body></html>
