<?php
$con = mysqli_connect('localhost','root','');
$db = mysqli_select_db($con, 'testdb');

if(isset($_POST['insertdata']))
{
     $email=$_POST['email'];
     $password=$_POST['password'];

     $query="INSERT INTO students ('email','password') VALUES ('$email','$password')";
     $query_run= mysqli_query($con,$query);

     if($query_run)
     {
         echo '<script> alert("Data saved");</script>';
         header('Location: popup.php');
     }
     else
     {
        echo '<script> alert("Data not saved");</script>';
     }
     }

?>