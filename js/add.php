<?php
$conn = mysqli_connect("sql205.unaux.com", "unaux_28661800", "neelam60", "unaux_28661800_nandanbank");

if (mysqli_connect_errno()) {
  echo ("Failed to connect to MySQL: " . mysqli_connect_error());
  exit();
}

$name=$_POST['name'];
$email=$_POST['email'];
$amount=$_POST['amount'];

$update="INSERT INTO customers(name, email, amount) VALUES('$name', '$email', '$amount')";
			
$set1 = mysqli_query($conn, $update);

echo ($set1);

exit();
?>