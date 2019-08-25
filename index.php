<?php


 $con=mysqli_connect("localhost","root","");
 
mysqli_select_db($con,"testdb") ;







global $fname,$lname,$email,$phone,$mess;

$fname = $_POST["name"];

 $lname= $_POST["lname"];

$email = $_POST["email"];

$phone = $_POST["phone"];

$mess = $_POST["mess"];


 //global $fname,$lname,$email,$phone,$mess;
// if(isset($_POST['submit'])){




// echo $fname; 
// echo $lname;
// echo $email;
// echo $phone; 
// echo $mess;   
    


//  if (isset($_POST['lname'])) {
//     $name = $_POST['lname'];
// }
//  if (isset($_POST['email'])) {
//     $name = $_POST['email'];
// }
//  if (isset($_POST['phone'])) {
//     $name = $_POST['phone'];
// }
//  if (isset($_POST['mess'])) {
//     $name = $_POST['mess'];
// }



    // $fname ="aporv";
    // $lname ="lodhi";
    // $email =$_POST['email'];
    // $phone =$_POST['phone'];
    // $mess =$_POST['mess'];
// echo $fname;


    $query = "insert into users(fn,ln,email,phone,mess) values ('$fname','$lname','$email','$phone','$mess')";
    if (mysqli_query($con,$query)) {
        echo" Students sata inserted";
    }
    else
    {
    	echo '<pre>';
        echo "string";
        die();
    }
// }


?>