<!DOCTYPE html>
<html>
<head>
	<title>Get Method</title>
	<style>
	</style>
</head>
<body>
	<div id="form">
	<form action="challenge4.php" method="get">
		Name: <input type="text" name="name"><br>
		<input type="submit">
	</form>
	</div>
	<br><br>
	<div id="greet">
	Welcome <?php echo $_GET["name"]; ?>
	</div>
	<script>

		// function change() {
		// 	document.getElementById('greet').style.display = "block";
		// 	document.getElementById('form').style.display = "none";
		// }
		
	</script>
</body>
</html>