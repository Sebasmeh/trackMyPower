<?php
//authentication (mysql)
$user = htmlspecialchars($_GET["user"]);
$pssd = htmlspecialchars($_GET["pssd"]);
//mysql connection
$connect_todb = new mysqli('127.8.155.130:3306',$user,$pssd,'trackmypower');
//obtain data from arduino
$voltage_med1  = htmlspecialchars($_GET["voltage"]);
$current_med1 = htmlspecialchars($_GET["current"]);
$energy_med1 = htmlspecialchars($_GET["energy"]);
$power_med1 = htmlspecialchars($_GET["power"]);
$latitude = htmlspecialchars($_GET["latitude"]);
$longitude = htmlspecialchars($_GET["longitude"]);
//mysql query --> insert data into db
$result = mysqli_query($connect_todb, 
	"INSERT INTO `metcentraldata` (`id`, `temperature`, `wind_speed`, `voltage_med1`, `curr_med1`, `energy_med1`, `power_med1`, `latitude`, `longitude`) VALUES (NULL, '1', '1', '$voltage_med1', '$current_med1', '$energy_med1', '$power_med1', '$latitude', '$longitude');"
);
$row = mysqli_fetch_array($result);
echo $row;
?>