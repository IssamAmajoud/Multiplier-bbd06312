<!DOCTYPE html>
<html>
<head>
	<title>scale OOP</title>
</head>
<body>
    <form method="post">
    	<input type="text" name="cijfer_1"> X
    	<input type="text" name="cijfer_2">
    	<input type="submit" name="submit">
    </form>
</body>
</html>
<?php
if (isset($_POST['submit'])){
	
	$cijfer_1 = $_POST['cijfer_1'];
	$cijfer_2 = $_POST['cijfer_2'];
}
if ($cijfer_1 == $cijfer_2) {
echo 'Het antwoord is: ' .  $cijfer_1 * $cijfer_2; 
}
else {
echo 'Het antwoord is: ' .  $cijfer_1 * $cijfer_2; 
}
?>
