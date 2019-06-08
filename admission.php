<?php 
    session_start();
?>
<html>
<head><title>ADMISSION FORM</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <style>
        h1{border-style:double;border-color:black;width: 90%;}
        table{border-style:double;border-color:black;width: 100%;}
        h2,strong{text-decoration: underline;}
        .k1{width: 100;}
        .k2{width: 80%;height: 80;} 
        .t1{border-style:double;border-color:black;width: 30%;height: 40%; border-spacing: 5px;padding: 2px;}
        .t2{border-style:double;border-color:black;width: 30%;height: 40%; border-spacing: 5px;padding: 2px;}
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
        }
    </style>
</head>    
<body bgcolor="lightblue">
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

 <table style="table-layout: fixed; width: 100%;">  
  <colgroup>
    <col style="width: 80%" />  
    <col style="width: auto" />  
  </colgroup>
  <tr>
     <td><h1 align="center">M.H.SABOO SIDDIK COLLEGE OF ENGINEERING</h1>
            <h2 align="center">Applications For Admissions To The S.E.Semester-V</h2></td>
     
      <td><table class="k2">
            <form method="post" action="admission.php"> 
        <?php 
        error_reporting(0);
        //$rollq = "SELECT rollno FROM $user WHERE rollno='".$_POST['roll']."'";
        //$rollr = $conn->query($rollq);
        //$row0 = $rollr->fetch_assoc();
          echo '<tr><p><td>Roll No:';  echo '<input type="text" name="roll" value="'.$_SESSION['rollno'].'" readonly></td></p></tr>';?>
               <tr><td>PNR NO:<input type="text"></td></tr>
               <tr><td>
    <input type="submit" value="Get Details" style="padding: 4px;"> 
                   </td></tr></form>
            </table>
    </td>
      </tr>
</table>   
 <br>  
<form name="ADMISSION FORM" >     
<fieldset> <legend></legend>
    <strong>NOTE:ALL CONTENT MUST BE IN CAPITAL</strong>
<table height=50>
    <tr>
        <?php $branchq = "SELECT BranchName FROM $user WHERE rollno='".$_POST['roll']."'";
        $branchr = $conn->query($branchq);
        $row1 = $branchr->fetch_assoc();
        echo '<td>Branch Name:'; echo '<input type="text" value="'.$row1['BranchName'].'">';echo '</td>';?>
         <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
        <td>Year:<?php $cdate=date("Y"); echo '<input type="text" value="'.$cdate.'"></td>';?>
        <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
         <td>Gender:Male:<input type="radio" name="gender">
             Female:<input type="radio" name="gender"></td>
       
    </tr>
</table> 
<p></p>    
 <table height=30%>
      <tr>  <td>
  <?php $lnameq = "SELECT LastName FROM $user WHERE rollno='".$_POST['roll']."'";
        $lnamer = $conn->query($lnameq);
        $row2 = $lnamer->fetch_assoc();                  
echo '<p>Surname:'; echo'<input type=text placeholder="Enter your Surname" value="'.$row2['LastName'].'"></p>';?>

  <?php $fnameq = "SELECT FirstName FROM $user WHERE rollno='".$_POST['roll']."'";
        $fnamer = $conn->query($fnameq);
        $row3 = $fnamer->fetch_assoc();    
echo '<p>First Name:'; echo'<input type=text placeholder="Enter your name" value="'.$row3['FirstName'].'"></p>';?>

 <?php $mnameq = "SELECT MiddleName FROM $user WHERE rollno='".$_POST['roll']."'";
        $mnamer = $conn->query($mnameq);
        $row4 = $mnamer->fetch_assoc();                       
echo "<p>Father's Name:"; echo '<input type=text placeholder="Enter your Father name" value="'.$row4['MiddleName'].'"></p>';?>

<?php $monameq = "SELECT MotherName FROM $user WHERE rollno='".$_POST['roll']."'";
        $monamer = $conn->query($monameq);
        $row5 = $monamer->fetch_assoc();                       
echo "<p>mother's Name:"; echo '<input type=text placeholder="Enter your mother name" value="'.$row5['MotherName'].'"></p>';?>
    </td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td><table class="k1">
<tr>
<td>attach latest passport size photogragh of you <strong>note:do not staple it.</strong></td></tr></table></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
</tr></table>
 <p></p>
<table>
    <tr>
        <td>
        <?php $addq = "SELECT address FROM $user WHERE rollno='".$_POST['roll']."'";
        $addr = $conn->query($addq);
        $row6 = $addr->fetch_assoc();
         echo '<p>Complete Postal Address:'; echo'<textarea rows=3 cols=40>'.$row6['address'].'</textarea></p>';?>
  
        <?php $pinq = "SELECT pincode FROM $user WHERE rollno='".$_POST['roll']."'";
        $pinr = $conn->query($pinq);
        $row7 = $pinr->fetch_assoc();    
          echo '<p>Pin Code:'; echo '<input type=tel value="'.$row7['pincode'].'"></p>';?>
        
          <?php $contactq = "SELECT contact1 FROM $user WHERE rollno='".$_POST['roll']."'";
        $contactr = $conn->query($contactq);
        $row8 = $contactr->fetch_assoc();       
          echo '<p>Contact No:'; echo '<input type="tel" placeholder="99671*****" value="'.$row8['contact1'].'"></p>';?>
 
          <?php $emailq = "SELECT email FROM $user WHERE rollno='".$_POST['roll']."'";
        $emailr = $conn->query($emailq);
        $row9 = $emailr->fetch_assoc();
          echo '<p>Email:'; echo '<input type="email" style="width:200px;" placeholder="abc****@gmail.com" value="'.$row9['email'].'"></p>';?>
 
        </td>
    </tr>
</table>
    
<p></p>

<table style="table-layout: fixed; width: 100%;">  
  <colgroup>
    <col style="width: auto" />  
    <col style="width: auto"/>
  </colgroup>
  <tr>
     <td><table class="t1"> DETAILS OF LOWER EXAMINATION:
    <tr>
         <th>Sr No.</th>
         <th>Month & Year of exam</th>
         <th>CGPA</th>
         <th>GPA</th>
    </tr>
    <tr>
        <td>1</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
    </tr>
    <tr>
        <td>2</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
    </tr>
    <tr>
        <td>4</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
    </tr> 
    
</table> </td>
     <td><p>To</p><p>The Principal,</p><p>My case of registration of F.E. Sem V /T.E.</p></td> 
  </tr>
</table> 
    <p></p>
<table style="table-layout: fixed; width: 100%;"> <!- set table layout to fixed and width to full width -->
  <colgroup>
    <col style="width: auto" /> <!- takes the remaining space -->
    <col style="width: auto" /> <!- or use 33.3333% for all instead if you want to ocupy full width -->
    <col style="width: autp"/>
  </colgroup>
  <tr>
     <td>Verified By(Date & Name):<input type=text></td>
     <td>Exam Fee Reciept No:<input type="tel"><p>Accepted By(Date & Name):<input type=text></p></td>
     <td>Sign Of Principle:<input type=text></td>
  </tr>
</table>
    
 <p></p>      
<center><input type="Submit" value="Print" onclick="window.print()" class="print">        
    </center> 
</fieldset>
</form>    
</body>
</html>

 