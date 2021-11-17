<html>
<head>
<title>
Thanks, Student
</title>
</head>
<body>
<h1>Thanks, Student</h1>
<h6>Your information has been recorded<br> Now let us enjoy our cash while you enjoy your grade</h6>


<h6>Name</h6>
<?php

$name=$_POST["name"];
	echo $name;

?>
<h6>Section</h6>
<?php
if(isset($_POST["section"])){
	echo $_POST["section"];
}
?>
<h6>Credit card</h6>
<?php
if(isset($_POST["CC"])){
	echo $_POST["CC"];
	echo "(",$_POST["Card"],")";
}
?>
</body>
</html>