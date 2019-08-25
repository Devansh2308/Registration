<?php


 $con=mysqli_connect("localhost","root","");
 
mysqli_select_db($con,"register") ;







global $tname,$mn,$m1name,$m1email,$m1phone,$m2name,$m2email,$m2phone,$m3name,$m3email,$m3phone,$email,$phone;


$tname = $_POST["tname"];


if(isset($_POST['submit'])) { 
     
    // $var = ($_POST['i1']) ? strip_tags($_POST['i1']) : '');
 
    if(isset($_POST['i1'])) { 
        $mn=1; 
        // member 1 details
$m1name = $_POST["m1name"];
$m1email = $_POST["m1email"];
$m1phone = $_POST["m1phone"];
// member 2 details
$m2name = NULL;
$m2email = NULL;
$m2phone = NULL;
// member 3 details
$m3name = NULL;
$m3email = NULL;
$m3phone = NULL;
// member 4 details
$m4name = NULL;
$m4email = NULL;
$m4phone = NULL;
    }
      
    if(isset($_POST['i2'])) { 
        $mn=2;

// member 1 details
$m1name = $_POST["m1name"];
$m1email = $_POST["m1email"];
$m1phone = 222222;
// member 2 details
$m2name = $_POST["m2name"];
$m2email = $_POST["m2email"];
$m2phone = 11111;
// member 3 details
$m3name = NULL;
$m3email = NULL;
$m3phone = NULL;
// member 4 details
$m4name = NULL;
$m4email = NULL;
$m4phone = NULL; 
    }
    
    if(isset($_POST['i3'])) { 
        $mn=3; 

// member 1 details
$m1name = $_POST["m1name"];
$m1email = $_POST["m1email"];
$m1phone = $_POST["m1phone"];
// member 2 details
$m2name = $_POST["m2name"];
$m2email = $_POST["m2email"];
$m2phone = $_POST["m2phone"];
// member 3 details
$m3name = $_POST["m3name"];
$m3email = $_POST["m3email"];
$m3phone = $_POST["m3phone"];
// member 4 details
$m4name = NULL;
$m4email = NULL;
$m4phone = NULL;
    }
    
    if(isset($_POST['i4'])) { 
        $mn=4;

// member 1 details
$m1name = $_POST["m1name"];
$m1email = $_POST["m1email"];
$m1phone = $_POST["m1phone"];
// member 2 details
$m2name = $_POST["m2name"];
$m2email = $_POST["m2email"];
$m2phone = $_POST["m2phone"];
// member 3 details
$m3name = $_POST["m3name"];
$m3email = $_POST["m3email"];
$m3phone = $_POST["m3phone"];
// member 4 details
$m4name = $_POST["m4name"];
$m4email = $_POST["m4email"];
$m4phone = $_POST["m4phone"]; 
    } 
}
// // member 1 details
// $m1name = $_POST["m1name"];
// $m1email = $_POST["m1email"];
// $m1phone = $_POST["m1phone"];
// // member 2 details
// $m2name = $_POST["m2name"];
// $m2email = $_POST["m2email"];
// $m2phone = $_POST["m2phone"];
// // member 3 details
// $m3name = $_POST["m3name"];
// $m3email = $_POST["m3email"];
// $m3phone = $_POST["m3phone"];
// // member 4 details
// $m4name = $_POST["m4name"];
// $m4email = $_POST["m4email"];
// $m4phone = $_POST["m4phone"];

$email = $_POST["email"];

 $phone= $_POST["phone"];

 $subject = "test";
 $message = "self generated mail";
 $header ="from me";

 if (mail($email, $subject, $message))
  {
     echo "Mail sent ";
 }
 else
    echo "mail not sent";



// echo '<pre>';
// echo $tname, $m1email;
 echo $tname , $mn ,$m1name,$m1email,$m1phone,$email,$phone;

if ($mn==1) {
    # code...
      $query = "insert into vb1(tname,nm,m1name,m1email,m1phone,email,phone) values ('$tname','$mn','$m1name','$m1email','$m1phone','$email','$phone')
";
    if (mysqli_query($con,$query)) {
        echo" Registration Successful";
    }
}
if ($mn==2) {
    # code...
    $query = "insert into vb2(tname,nm,m1name,m1email,m1phone,m2name,m2email,m2phone,email,phone) values ('$tname','$mn','$m1name','$m1email','$m1phone','$m2name','$m2email','$m2phone','$email','$phone')
";
    if (mysqli_query($con,$query)) {
        echo" Registration Successful";
    }
}
if ($mn==3) {
    # code...
      $query = "insert into vb3(tname,nm,m1name,m1email,m1phone,m2name,m2email,m2phone,m3name,m3email,m3phone,email,phone) values ('$tname','$mn','$m1name','$m1email','$m1phone','$m2name','$m2email','$m2phone','$m3name','$m3email','$m3phone','$email','$phone')
";
    if (mysqli_query($con,$query)) {
        echo" Registration Successful";
    }
}
if ($mn==4) {
    # code...
     $query = "insert into vb(tname,nm,m1name,m1email,m1phone,m2name,m2email,m2phone,m3name,m3email,m3phone,m4name,m4email,m4phone,email,phone) values ('$tname','$mn','$m1name','$m1email','$m1phone','$m2name','$m2email','$m2phone','$m3name','$m3email','$m3phone','$m4name','$m4email','$m4phone','$email','$phone')
";
    if (mysqli_query($con,$query)) {
        echo" Registration Successful";
    }
}

    
// }


?>