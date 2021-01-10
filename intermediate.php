<?php

session_start();
$server="localhost";
$username="root";
$password="";
$db="bank";

$con=mysqli_connect($server,$username,$password,$db);

if(! $con)
{
    die ("Connection failed due to".mysqli_connect_error());
}
$name=$_SESSION['name'];
$q="select * from bank.users where name='$name'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$from=$row['name'];
$var1=$row['amount'];

$to=$_POST['receiver'];
$q1="select * from bank.users where name='$to'";
$result1=mysqli_query($con,$q1);
$row1=mysqli_fetch_array($result1);
$var2=$row1['amount'];
session_destroy();

if($var1 >=$_POST["transfer"])
{
    //update in bank.bank.users table
    $sub=$var1-$_POST["transfer"];
    $q="update bank.users set amount = '$sub' where name='$from'";
    $result=mysqli_query($con,$q);


    $sum=$var2+$_POST["transfer"];
    $q="update bank.users set amount= '$sum' where name= '$to'";
    $result=mysqli_query($con,$q);

    //update in bank.y table
    $c=$_POST["transfer"];
    $q="insert into bank.y(sender,receiver,amount)
    values('$from','$to','$c')";
    $result=mysqli_query($con,$q);
    include 'personaldetails.php';
    $message="Transfer Successful
    ";
    echo"<script type='text/javascript'>alert('$message');
    </script>";   
 }
    else{
        include 'personaldetails.php';
        $message="Insufficient Balance";
        echo"<script type='text/javascript'>
        alert('$message');
        </script>";
    }

?>