<?php
session_start();

define('user','root');
define('password','');
define('host','localhost');

$conn = new mysqli(host,user,password,"pollution");
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

if(isset($_POST['func1']))
{
	echo "Maximum Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_POST['func1']."(".$_POST['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_POST['from']." 00:00:00' AND '".$_POST['to']." 23:59:59';"))[0]."<br>";
}
if(isset($_POST['func2']))
{
	echo "Minimum Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_POST['func2']."(".$_POST['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_POST['from']." 00:00:00' AND '".$_POST['to']." 23:59:59';"))[0]."<br>";
}
if(isset($_POST['func3']))
{
	echo "Average Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_POST['func3']."(".$_POST['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_POST['from']." 00:00:00' AND '".$_POST['to']." 23:59:59';"))[0]."<br>";
}
?>
