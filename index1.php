<?php
$con = mysqli_connect('127.0.0.1','root','','sagardb');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error());
  }
if (!mysqli_select_db($con,'epiz_25942473_sagardb'))
{
	echo 'database not selected';
}
$name = $_POST['name'];
$Gender = $_POST['Gender'];
$house = $_POST['house'];
$dislike = $_POST['DONTWANT'];

$sql = "INSERT INTO admissions(`Name`, `Gender`, `House`, `Dislike`) VALUES ('$name','$Gender','$house','$dislike')";
if (!mysqli_query($con, $sql))
{
	echo 'not inserted';
}
else
{
	echo 'inserted';
}
header("refresh:2; url=index.html");
?>
