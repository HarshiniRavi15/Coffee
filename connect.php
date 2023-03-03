<?php
$connect = mysqli_connect("localhost","root","","coffee1");
if(isset($_POST['order']))
{
    $name=$_POST["t1"];
    $email=$_POST["t2"];
    $mobile=$_POST["t3"];
    $type=$_POST["coffee"];
    $cup=$_POST["t4"];
    $address=$_POST["t5"];
    $total=$_POST["t6"];
    
    $query= "INSERT INTO shops(name,email,mobile,type,cups,address,total) values('$name','$email','$mobile','$type','$cup','$address','$total')";
    $result=mysqli_query($connect,$query);
    if($result)
    {
        echo '<script>alert("Your Order placed successfully")</script>';
    }
    else
    {
        echo "<script> alert(Oops!!!! Order not placed) </script>";
    }
}
?>
