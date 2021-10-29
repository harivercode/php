<?php
	if (isset($_POST['bttn'])) {
		$n1= $_POST['num1'];
		$n2= $_POST['num2'];
		$n3= $_POST['num3'];
		$result='';
		if ($n1>$n2) {
		 	if ($n1>$n3) {
		 		$result = $n1." is largest";
		 	}
		 	else{
		 		$result = $n3." is largest";
		 	}
		 } 
		elseif ($n2>$n3) {
			$result = $n2." is largest";
		}
		else{
			$result = $n3." is largest";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<h1>to check lagest number</h1><br><br>
<form method="POST">
	<label>first number</label>&nbsp;<input type="text" name="num1"><br><br>
	<label>second number</label>&nbsp;<input type="text" name="num2"><br><br>
	<label>third number</label>&nbsp;<input type="text" name="num3"><br><br>
	<button type="submit" name="bttn">check</button><br><br><br>
	<input type="text" name="result" value="<?php echo $result?>"><br>
</form>
</body>
</html>