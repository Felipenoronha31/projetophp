<?php

if($_SESSION['profile']!='admin'){
    header('location:home.php');
}

?>