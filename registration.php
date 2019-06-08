<?php
session_start();
?>
<html>
<head><title>REGISTRATION FORM</title>
    <style>
        
        table{border-style:double;border-color:black;width: 100%;}
        h2,strong{text-decoration: underline;}
        .k1{width: 100;}
        .t1{border-style:double;border-color:black;width: 80%; border-spacing: 5px;padding: 2px;vertical-align: middle;}
        .t2{border-style:double;border-color:black;width: 100%; border-spacing: 5px;padding: 2px;}
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
        .size{
            width: 50px;
        }
    </style>
</head>
<body bgcolor="lightblue">
<?php
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "registration";
    $users="users";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} ?>
    

 <table style="table-layout: fixed; width: 100%;">  
  <colgroup>
    <col style="width: 100%" />  
    <col style="width: auto" />  
  </colgroup>
  <tr>
     <td><h3 align="center">Anjuman-i-Islam's</h3>
         <h2 align="center">M.H.SABOO SIDDIK COLLEGE OF ENGINEERING,MUMBAI</h2>
            <h2 align="center">TRAINING AND PLACEMENT DEPARTMENT</h2>
         <h1 align="center">REGISTRAION FORM</h1></td>
       
  </tr>
</table>   
    
<form method="post" action="registration.php"> 
    <table>
        <tr>
        <td>    
        <?php 
        error_reporting(0);        
        //$rollq = "SELECT rollno FROM $users WHERE rollno='".$_POST['roll']."'";
        //$rollr = $conn->query($rollq) or die($conn->error);
        //$row0 = $rollr->fetch_assoc();
            echo 'Roll No:';  echo '<input type="text" style="padding: 4px;" name="roll" value="'.$_SESSION['rollno'].'" readonly>';?></td>  
            <td><input type="submit" value="Get Details" style="padding: 4px;margin-right:1000px;"></td> 
        </tr></table>    
        </form>   
<form name="ADMISSION FORM" >
     
<fieldset> <legend></legend>
    <strong>NOTE:ALL CONTENT MUST BE IN CAPITAL</strong>
     
<p></p>    
 <table>
     <tr><td><h4 align="center">For Office Use Only</h4></td></tr>
     <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
     <td><table class="k1">

<td>attach latest passport size photogragh of you <strong>note:do not staple it.</strong></td></table></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><tr>
    <tr>
        <?php $branchq = "SELECT BranchName FROM $users WHERE rollno='".$_POST['roll']."'";
        $branchr = $conn->query($branchq);
        $row1 = $branchr->fetch_assoc();
        echo '<td>Branch Name:'; echo '<input type="text" value="'.$row1['BranchName'].'">';echo '</td>';?>
    </tr>
     
     <tr><td>(Attach photocopies of required dcouments on A4 size paper only)</td></tr> 
     <tr><td><ol type="1"><li>SSC Marksheet/Certificate<input type="checkbox"><br></li>
                       <li>HSC Marksheet/Certificate<input type="checkbox"><br></li>
                       <li>DIPLOMA Final year Marksheet/Certificate<input type="checkbox"><br></li>
                       <li>B.E. (All SEM marksheets): <br><ul>
                                                 <li>SEM I:<input type="checkbox"><br></li>
                                                 <li>SEM II:<input type="checkbox"><br></li>
                                                 <li>SEM III:<input type="checkbox"><br></li>
                                                 <li>SEM IV:<input type="checkbox"><br></li>
                                                 <li>SEM V:<input type="checkbox"><br></li>
                                                 <li>SEM VI:<input type="checkbox"><br></li>
                                                 <li>SEM VII:<input type="checkbox"><br></li>
        <li>SEM VIII:<input type="checkbox"><br></li></ul>
         </li>
         <li>photo id<ul><li> Aadhar card:<input type="radio" name="proof"><br></li> 
             <li> Pan card:<input type="radio" name="proof"><br></li>
             <li> Voter id card:<input type="radio" name="proof"><br></li>
             <li> passport:<input type="radio" name="proof"><br></li></ul> </li></ol>
    </tr>   
    <tr><td> </td></tr></table> 
         

 <p></p>
            <?php $lnameq = "SELECT LastName FROM $users WHERE rollno='".$_POST['roll']."'";
            $lnamer = $conn->query($lnameq);
            $row2 = $lnamer->fetch_assoc();                  
            echo '<p>Surname:'; echo'<input type=text placeholder="Enter your Surname" value="'.$row2['LastName'].'"></p>';?> 
            
            <?php $fnameq = "SELECT FirstName FROM $users WHERE rollno='".$_POST['roll']."'";
            $fnamer = $conn->query($fnameq);
            $row3 = $fnamer->fetch_assoc();    
            echo '<p>First Name:'; echo'<input type=text placeholder="Enter your name" value="'.$row3['FirstName'].'"></p>';?> 
            
           <?php $mnameq = "SELECT MiddleName FROM $users WHERE rollno='".$_POST['roll']."'";
           $mnamer = $conn->query($mnameq);
           $row4 = $mnamer->fetch_assoc();                       
           echo "<p>Father's Name:"; echo '<input type=text placeholder="Enter your Father name" value="'.$row4['MiddleName'].'"></p>';?>
            
            <p>Father's Occupation:<input type=text placeholder=""></p>
            
           <?php $addq = "SELECT address FROM $users WHERE rollno='".$_POST['roll']."'";
           $addr = $conn->query($addq);
           $row6 = $addr->fetch_assoc();
           echo '<p>Complete Postal Address:'; echo'<textarea rows=3 cols=40>'.$row6['address'].'</textarea></p>';?>
            
           <?php $pinq = "SELECT pincode FROM $users WHERE rollno='".$_POST['roll']."'";
           $pinr = $conn->query($pinq);
           $row7 = $pinr->fetch_assoc();    
           echo '<p>Pin Code:'; echo '<input type=tel value="'.$row7['pincode'].'"></p>';?>
            
          <p> Nationality:<input type=text></p>

        
          <?php $dobq = "SELECT DateOfBirth FROM $users WHERE rollno='".$_POST['roll']."'";
          $dobr = $conn->query($dobq);
          $row10 = $dobr->fetch_assoc();
          echo '<p>D.O.B.:'; echo '<input type="date" value="'.$row10['DateOfBirth'].'"></p>';?>
 
          <?php $contactq = "SELECT contact1 FROM $users WHERE rollno='".$_POST['roll']."'";
          $contactr = $conn->query($contactq);
          $row8 = $contactr->fetch_assoc();       
          echo '<p>Contact No:'; echo '<input type="tel" placeholder="99671*****" value="'.$row8['contact1'].'"></p>';?>
            
          <p> Year gap: Before Degree:<input type=number>   In Degree Years:<input type=number></p>
 
          <?php $emailq = "SELECT email FROM $users WHERE rollno='".$_POST['roll']."'";
          $emailr = $conn->query($emailq);
          $row9 = $emailr->fetch_assoc();
          echo '<p>Email:'; echo '<input type="email" style="width:200px;" placeholder="abc****@gmail.com" value="'.$row9['email'].'"></p>'; ?>
<table style="table-layout: fixed; width: 100%;">  
  <colgroup>
    <col style="width: auto" />  
    <col style="width: auto"/>
  </colgroup>
  <tr>
     <td><table class="t1"> Educational Qualification (Fill In Sentence Case Only):
    <tr>
         <th>Qualification</th>
         <th>Name of the school/college</th>
         <th>Board</th>
         <th>Month and year of passing</th>
         <th>Marks Obtained</th>
         <th>Total Marks</th>
         <th>Agg %</th>
    </tr>
    <tr>
        <td>SSC</td>
        <?php $schoolq = "SELECT SchoolName FROM $users WHERE rollno='".$_POST['roll']."'";
          $schoolr = $conn->query($schoolq);
          $row11 = $schoolr->fetch_assoc();
        echo '<td>'; echo'<input type=text value="'.$row11['SchoolName'].'"></td>';?>
        
        <?php $schoolbq = "SELECT SchoolBoardName FROM $users WHERE rollno='".$_POST['roll']."'";
          $schoolbr = $conn->query($schoolbq);
          $row12 = $schoolbr->fetch_assoc();
        echo '<td>'; echo'<input type=text value="'.$row12['SchoolBoardName'].'"></td>';?>
        
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        
        <?php $schoolpercentq = "SELECT Schoolpercentage FROM $users WHERE rollno='".$_POST['roll']."'";
          $schoolpercentr = $conn->query($schoolpercentq);
          $row13 = $schoolpercentr->fetch_assoc();
        echo '<td>'; echo'<input type=text class="size" value="'.$row13['Schoolpercentage'].'"></td>';?>
    </tr>
    <tr>
        <td>HSC</td>
        <?php $collegeq = "SELECT CollegeName FROM $users WHERE rollno='".$_POST['roll']."'";
          $colleger = $conn->query($collegeq);
          $row14 = $colleger->fetch_assoc();
        echo '<td>'; echo'<input type=text value="'.$row14['CollegeName'].'"></td>';?>
        
        <?php $collegebq = "SELECT CollegeBoardName FROM $users WHERE rollno='".$_POST['roll']."'";
          $collegebr = $conn->query($collegebq);
          $row15 = $collegebr->fetch_assoc();
        echo '<td>'; echo'<input type=text value="'.$row15['CollegeBoardName'].'"></td>';?>
        
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        
        <?php $collegepercentq = "SELECT Collegepercentage FROM $users WHERE rollno='".$_POST['roll']."'";
          $collegepercentr = $conn->query($collegepercentq);
          $row16 = $collegepercentr->fetch_assoc();
        echo '<td>'; echo'<input type=text class="size" value="'.$row16['Collegepercentage'].'"></td>';?>
    </tr>
    <tr>
        <td>Diploma</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
    </tr> 
    
</table> </td>
      
  </tr>
</table> 
    
<table style="table-layout: fixed; width: 100%;">  
  <colgroup>
    <col style="width: auto" />  
    <col style="width: auto"/>
  </colgroup>
  <tr>
     <td><table class="t1"> Educational Qualification (Fill In Sentence Case Only):
    <tr>
         <th>Semester</th>
         <th>Month and year of passing</th>
         <th>N0. of Dead KT's</th>
         <th>N0. of Live KT's</th>
         <th>Credits(C)</th>
         <th>(CxG)</th>
         <th>S.G.P.I.</th>
         <th>C.G.P.I.(Yearwise)</th>
    </tr>
    <tr>
        <td>SEM-I</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-II</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-III</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-IV</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-V</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-VI</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-VII</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>
    <tr>
        <td>SEM-VIII</td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
        <td><input type=text class="size"></td>
    </tr>     
    
</table> </td>
      
  </tr>
</table> 
    
<p>Plant training/Project work if any:<textarea rows=3 cols=100 ></textarea></p>
    
<p>Computer skills/Certification:<textarea rows=3 cols=100 style="margin-left:29px;"></textarea></p>    
    
<p>Extra curricural activities:<textarea rows=3 cols=100 style="margin-left:50px;"></textarea></p>    
    <p></p> 
    
 <p></p>
    
<h4>I hereby declare that the above-furnished details of my Registration Form are true to the best of my knowledge and belief.

NOTE: Once selected in a company through the T and P Office, the candidate will not be given another chance in the upcoming drives.
I hereby agree to all the Terms and Conditions of the T and P Office, failing to which strict disciplinary action can be taken    against me.
    </h4>  
    
<table>
    <tr><td>
    place:<input type=text></td></tr>
    
    <tr><td> Date: <?php  echo '<input type="text" value="'.date('d/m/Y').'">'; ?></td>  <td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>(Signature of the Candidate)</td></tr></table> 
    
<center><input type="Submit" value="Print" onclick="window.print()" class="print">        
    </center> 
 
</fieldset>
</form>
</body>
</html>
    
 

 