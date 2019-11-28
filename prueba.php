<!DOCTYPE html>
<html>
<head>
	<title>Prueba</title>
</head>
<body>
<center>
	<input type="text" name="nombre" id="nombre" onkeyup="escribir()">
	<label id="texto"></label>
</center>
<script>
	function escribir(){
		var n = document.getElementById("nombre").value;
		document.getElementById("texto").innerHTML = n;
		document.getElementById("texto").style.color = " red";
		document.getElementById("texto").style.fontFamily = "Verdana";
	}
</script>
</body>
</html>