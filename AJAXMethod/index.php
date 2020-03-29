<!DOCTYPE html>
<html>

<head>
	<title>MiniProject272</title>
	<script>
  function sendData(str)
  {
    //document.getElementById("answer").innerHTML = str;
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp = new XMLHttpRequest();
    }
    else
    {
      // code for IE6, IE5
      xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function()
    {
      if (this.readyState == 4 && this.status == 200)
      {
        document.getElementById("answer").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", str, true);
    xmlhttp.send();
  }

  function times(i)
  {
    if(document.getElementById(i).checked) return document.getElementById(i).value;
    else return "";
  }
  function trigger()
  {
    sendData("query.php?from="+document.getElementById('from').value+"&to="+document.getElementById('to').value+"&attributes="+document.getElementById('attributes').value+"&func1="+times('func1')+"&func2="+times('func2')+"&func3="+times('func3'));
  }
  
</script>
</head>

<body>
	<div>
		<form>
			From: <input type="date" id="from" name="from">
			TO: <input type="date" id="to" name="to">
			<select id="attributes" name="attributes">
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
      <br>
			Maximum: <input type="checkbox" id="func1" name="func1" value="max" onchange="trigger()">
			Minimum: <input type="checkbox" id="func2" name="func2" value="min" onchange="trigger()">
			Average: <input type="checkbox" id="func3" name="func3" value="avg" onchange="trigger()">
		</form>
	</div>
  <p id="answer"></p>
</body>

</html>