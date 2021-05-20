<?php
$conn = mysqli_connect("sql205.unaux.com", "unaux_28661800", "neelam60", "unaux_28661800_nandanbank");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}



$result = mysqli_query($conn, "SELECT * FROM customers");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

echo json_encode($data);
exit();
?>
