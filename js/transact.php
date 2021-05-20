<?php
$conn = mysqli_connect("sql205.unaux.com", "unaux_28661800", "neelam60", "unaux_28661800_nandanbank");

if (mysqli_connect_errno()) {
  echo ("Failed to connect to MySQL: " . mysqli_connect_error());
  exit();
}

$name1=$_POST['from'];
$name2=$_POST['to'];
$change=$_POST['amount'];

echo($name1);
echo("  ".$name2);
echo("  ".$change);

$query1 = "SELECT amount FROM customers WHERE name='$name1'";
$query2 = "SELECT amount FROM customers WHERE name='$name2'";

$get1 = mysqli_query($conn, $query1);

$data1 = array();
while ($row = mysqli_fetch_row($get1))
{
    array_push($data1, $row[0]);
}

$get2 = mysqli_query($conn, $query2);

$data2 = array();
while ($row = mysqli_fetch_row($get2))
{
    array_push($data2, $row[0]);
}

echo (" ".$data1[0]);
echo (" ".$data2[0]);

$setamount1 = (int)$data1[0] - (int)$change;
$setamount2 = (int)$data2[0] + (int)$change;

$update1="UPDATE customers SET amount='$setamount1' WHERE name='$name1'";
$update2="UPDATE customers SET amount='$setamount2' WHERE name='$name2'";
			
$set1 = mysqli_query($conn, $update1);
$set2 = mysqli_query($conn, $update2);

echo ($set1);
echo ($set2);

exit();
?>