<?php include('server.php');
if(empty($_SESSION['FirstName'])){
 header('location: Login.php');
}
else
{
    header('location: Template.php');
}
?>