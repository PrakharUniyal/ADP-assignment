<?php
session_start();

define('user','root');
define('password','');
define('host','localhost');

$conn = new mysqli(host,user,password,"pollution");
// Check connection
if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

if(($_GET['func1'])!="")
{
	echo "Maximum Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_GET['func1']."(".$_GET['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_GET['from']." 00:00:00' AND '".$_GET['to']." 23:59:59';"))[0]."<br>";
}
if(($_GET['func2'])!="")
{
	echo "Minimum Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_GET['func2']."(".$_GET['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_GET['from']." 00:00:00' AND '".$_GET['to']." 23:59:59';"))[0]."<br>";
}
if(($_GET['func3'])!="")
{
	echo "Average Value: ".mysqli_fetch_array(mysqli_query($conn,"SELECT ".$_GET['func3']."(".$_GET['attributes'].") FROM pollutiondata WHERE timestamp BETWEEN '".$_GET['from']." 00:00:00' AND '".$_GET['to']." 23:59:59';"))[0]."<br>";
}
?>