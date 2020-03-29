<!DOCTYPE html>
<html>

<head>
	<title>MiniProject272</title>
</head>

<body>
	<div>
		<form action="query.php" method="POST">
			From: <input type="date" name="from">
			TO: <input type="date" name="to">
			<select name="attributes">
				<option value="co">CO</option>
				<option value="h">Humidity</option>
				<option value="no2">NO2</option>
				<option value="o3">O3</option>
				<option value="p">Pressure</option>
				<option value="pm_10">pm10</option>
				<option value="pm_1_0">pm1</option>
				<option value="pm_2_5">pm25</option>
				<option value="so2">SO2</option>
				<option value="T">Temperature</option>
				<option value="ws">Wind Speed</option>
			</select>
			<input type="submit" name="submit"> <br>
			Maximum: <input type="checkbox" name="func1" value="max">
			Minimum: <input type="checkbox" name="func2" value="min">
			Average: <input type="checkbox" name="func3" value="avg">
		</form>
	</div>
</body>

</html>