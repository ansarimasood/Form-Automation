<?php
session_start();
?>
<html>
<head><title>Concession Form</title>
    <style>
        .c1{align-self: flex-start;}
        input[type=text]{
            width:220px;
            
        }
        input{
            margin:10px;
        }
        .print{
            padding: 10px;
            color: white;
            background-color: blue;
            font-size: 20px;
            padding-top: -2px;
        }
        
        .print:hover{
            background-color: white;
            color: blue;
    </style>
</head>
<body bgcolor=lightblue>
<?php
   $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "registration";
    $user="users";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>    
<h1 align="center">CONCESSION FORM</h1>
<h3 align="center">CENTRAL RAILWAY/WESTERN RAILWAY</h3>
<form method="post" action="concession.php"> 
    <table>
        <tr>
        <td>    
        <?php 
        error_reporting(0);
        //$rollq = "SELECT rollno FROM $user WHERE rollno='".$_POST['roll']."'";
        //$rollr = $conn->query($rollq);
        //$row0 = $rollr->fetch_assoc();
        echo '<b>Roll No:'; echo '<input type="text" style="padding: 4px;margin-bottom:35px;" name="roll" value="'.$_SESSION['rollno'].'" readonly>'; ?>
               </td>  
            <td><input type="submit" value="Get Details" style="padding: 4px;margin-right:1000px;"></td> 
        </tr></table>    
        </form>
  
 <form name="Concession Form">
<fieldset><legend>CONCESSION FORM</legend>
    <?php $lnameq = "SELECT LastName FROM $user WHERE rollno='".$_POST['roll']."'";
            $lnamer = $conn->query($lnameq);
            $row2 = $lnamer->fetch_assoc(); 
   $fnameq = "SELECT FirstName FROM $user WHERE rollno='".$_POST['roll']."'";
            $fnamer = $conn->query($fnameq);
            $row3 = $fnamer->fetch_assoc();
   $mnameq = "SELECT MiddleName FROM $user WHERE rollno='".$_POST['roll']."'";
           $mnamer = $conn->query($mnameq);
           $row4 = $mnamer->fetch_assoc(); 
    echo '<b>Full Name:'; echo'<input type=text placeholder="Enter your name" style="margin-left: 0px;" class="full" value="'.$row2['LastName'].' '.$row3['FirstName'].' '.$row4['MiddleName'].'"></b>'; ?>
<br>
    <b>Semester:<input type="number" max="8" min="1"></b>
    
    <?php $branchq = "SELECT BranchName FROM $user WHERE rollno='".$_POST['roll']."'";
        $branchr = $conn->query($branchq);
        $row1 = $branchr->fetch_assoc();
    echo '<b style="margin-left: 150px;">Branch:'; echo '<input type="text" value="'.$row1['BranchName'].'"></b>'; ?>
    
    <?php $contactq = "SELECT contact1 FROM $user WHERE rollno='".$_POST['roll']."'";
          $contactr = $conn->query($contactq);
          $row8 = $contactr->fetch_assoc(); 
    echo '<b style="margin-left: 50px;">'; echo 'Contact No:<input type="tel" placeholder="99671*****" value="'.$row8['contact1'].'"></b>'; ?>
<br>
    <?php $dobq = "SELECT DateOfBirth FROM $user WHERE rollno='".$_POST['roll']."'";
          $dobr = $conn->query($dobq);
          $row10 = $dobr->fetch_assoc();
    echo '<b >D.O.B.:<input type="date" value="'.$row10['DateOfBirth'].'"></b>';
    $date1=date_create($row10['DateOfBirth']);
    $date2=date_create(date('Y/m/d'));
    $diff1=date_diff($date1,$date2);
    $diff2=$diff1->format("%y years");
    //echo $diff2;
    echo '<b style="margin-left: 65px;">Age-Year:<input type=number value='.$diff2.'></b>';
    $diff3=$diff1->format("%m months");
    echo '<b style="margin-left: 150px;">Month:<input type="number" value='.$diff3.'></b>'; ?>
<br>
<b>Railway class:<select><option>1st Class</option> <option>2nd Class</option></select></b>
    <b style="margin-left: 130px;">Period:<select><option>Monthly</option><option>Quaterly</option></select></b>
<br>
    <b>Staion From:<input type="text"></b> <b>To:<input type="text" value="Byculla"></b>
<br>
    <?php $addq = "SELECT address FROM $user WHERE rollno='".$_POST['roll']."'";
           $addr = $conn->query($addq);
           $row6 = $addr->fetch_assoc();
    echo '<b>Address:<textarea rows=3 cols=40 style="margin-top: 30px;">'.$row6['address'].'</textarea></b>'; ?>
<br>
    <?php $pinq = "SELECT pincode FROM $user WHERE rollno='".$_POST['roll']."'";
           $pinr = $conn->query($pinq);
           $row7 = $pinr->fetch_assoc();
    echo '<b>Pin Code:<input type=tel value="'.$row7['pincode'].'"></b>'; ?>
<br>
<b>Gender:Male:<input type="radio" name="gender">
    Female:<input type="radio" name="gender"></b>
<br><br>
<p>
    <b>Season Ticket No.(At The Top):<input type="text"></b></p>   <b>No.previous certificates issued:<input type=text></b><br>
    <b>Pass Starting Date:<input type="date"></b>  <b style="margin-left: 0px;">Dtae of Expiry:<input type="date"><br></b>
    <b>Date:<?php  echo '<input type="text" value="'.date('d/m/Y').'">'; ?></b>             <b><p class ="c1">Student's Signature:_____________</p></b> 
<center><input type="Submit" value="Print" onclick="window.print()" class="print">        
    </center> 
 					   
</fieldset>
</form> 
</body>
</html>