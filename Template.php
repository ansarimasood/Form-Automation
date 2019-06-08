<?php include('server.php');
if(empty($_SESSION['FirstName'])){
 header('location: Login.php');
}
?>
<html>
<head>
<title>Template</title>
<style>
    table{
        text-align: center;
        font-size: 50px;
        border-color:#00afbf;
        padding: 5px;
    }
    body{
        margin-left: 400px;
        margin-top: 100px;
        color: #00afbf;
    }
</style>    
</head>
<body>
<table border="5">
<caption>Template</caption>
<tr>   <th>Name of Template</th>
    <th>Fill Form</th>
</tr> 
<tr>
<td>Railway Concession</td>
<td><a href="concession.php">Click here</a></td>    
</tr>    
<tr>
<td>Admission Form</td>
<td><a href="admission.php">Click here</a></td>    
</tr>    
<tr>
<td>TPO Form</td>
<td><a href="registration.php">Click here</a></td>    
</tr>    

</table>    
</body>
</html>