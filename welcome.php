<html>
<body>


<?php
echo "string";
global $fname,$lname,$email,$phone,$mess;
if (isset($_POST['value'])) 
{ 
	$fname = $_POST["name"];
echo $fname;// Instructions if $_POST['value'] exist 
}
 $lname= $_POST["lname"];
echo $lname;
$email = $_POST["email"];
echo $email;

?>


</body>
</html>
