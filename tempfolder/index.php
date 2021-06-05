<!doctype html>
<html>
<head>
		<title> A6 Page </title>
</head>
<body>
	<form action="insert.php" method="post", target="ifrm1">
		<label>Input name:</label><input type="text" name = "name"><br>
		<label>Input reps:</label><input type="text" name = "reps"><br>
    	<label>Input weight:</label><input type="text" name = "weight"><br>
    	<label>Input date:</label><input type="date" name = "date"><br>
    	<label>Input llbs:</label><input type="bool" name = "llbs"><br>
		<input type="submit" value="Submit"/>  
	</form>
	<iframe id="ifrm1" style="display:none"></iframe>
</body>
</html>