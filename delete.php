<?php
include 'connect.php';

if(isset($_SESSION['id'])){
    $s="select * from reg where id='$_SESSION[id]'";
    $qu= mysqli_query($con, $s);
    $f=mysqli_fetch_assoc($qu);
    
}else{
    header('location:login.php');
}

$sq="delete from reg where id='$_SESSION[id]'";

mysqli_query($con,$sq);

header('location:login.php');
?>