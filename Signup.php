<?php include('server.php'); ?>
<html>
<head>
    <title>SignUP Page</title>
    <style>
        .login{
            color: #00afbf;
            text-decoration: none;
        }
        h1{text-align: center;
        color:#00afbf; }
        .body{border-style: solid;
        border-width: 7px;
        margin-left: 200px;
            margin-right: 200px;
        border-color: #00afbf;
        color: #00afbf;
        }        
    /* Full-width input fields */
input[type=text], input[type=number] , input[type=tel],input[type=date] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
    color: #00afbf;
    text-decoration-color: #00afbf;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: white;
    color: #00afbf;
    border: 1px solid #00afbf;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.signupbtn {
    float: left;
    width: 50%;
}
        .cancelbtn:hover{
            background-color: #00afbf;
            color: white;
            
        }
        .signupbtn{
            background-color: #00afbf;
            color: white;
            border: 1px solid #00afbf;
        }
        .signupbtn:hover{
            background-color: white;
            color: #00afbf;
        }
          


/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
        width: 100%;
    }
}
    </style>
</head>
<body>
    <h1>SIGNUP</h1>
    <div class="body">
    <form method="POST"  action="Signup.php" onsubmit="validate()">
  <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" required>
      
    <label><b>Middle Name/Father Name</b></label>
    <input type="text" placeholder="Enter Middle Name" name="MiddleName" required>
      
      <label><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="LastName" required>
      
      <label><b>Mother Name</b></label>
    <input type="text" placeholder="Enter Mother Name" name="MotherName" required>
      
      <label><b>Branch</b></label>
    <input type="text" placeholder="Enter Branch Name" name="BranchName" required>
      
    <label><b>Date of Birth</b></label>
    <input type="date" placeholder="DD-MM-YYYY" name="DateOfBirth" required>
    <br><br>  
    <label><b>Gender</b></label><br>
    <label for="male">Male</label>
  <input type="radio" name="gender" id="male" value="male" checked><br>
  <label for="female">Female</label>
  <input type="radio" name="gender" id="female" value="female"><br>
  <label for="other">Other</label>
  <input type="radio" name="gender" id="other" value="other"><br><br>  
      
    <label><b>Permanent Address</b></label>
    <input type="text" placeholder="Enter permanent Address" name="address" required>
      
      <label><b>Pin Code</b></label>
      <input type="number" placeholder="Enter PinCode" name="pincode">
    
      <label><b>Contact 1</b></label>
      <input type="tel" placeholder="Enter Contact Number" name="contact1" required>
      
      <label><b>Contact 2</b></label>
      <input type="tel" placeholder="Enter Contact Number" name="contact2">
      
      <label><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>



      <label><b>Name of School</b></label>
    <input type="text" placeholder="Enter School Name" name="SchoolName" required>
      
      <label><b>School Board Name</b></label>
    <input type="text" placeholder="Enter School Board Name" name="SchoolBoardName" required>
      
      <label><b>Enter School Percentage</b></label>
    <input type="text" placeholder="Enter School Percentage" name="Schoolpercentage" required>
      
      <label><b>Name of College</b></label>
    <input type="text" placeholder="Enter College Name" name="CollegeName" required>
      
      <label><b>College Board Name</b></label>
    <input type="text" placeholder="Enter College Board Name" name="CollegeBoardName" required>
      
      <label><b>Enter College Percentage</b></label>
    <input type="text" placeholder="Enter College Percentage" name="Collegepercentage" required>
      
      
    <label><b>Seat No</b></label>
    <input type="number" placeholder="Enter Seat No" name="seatno" required>
      
    <label><b>Roll NO / Unique Key</b></label>
    <input type="text" placeholder="Enter Roll NO" name="rollno" required>
      
    <div class="clearfix">
      <button type="reset"  class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name="register">Sign Up</button>
    </div>
      
  </div>
        <div class=""><center><a href="Login.php" class="login">Existing User?   Login</a></center></div>
    </form>
</div>
    
<script>
    function valid(){
    var fname=document.sign.FirstName.value;
    var mname=document.sign.MiddleName.value;
    var lname=document.sign.LastName.value;
    var moname=document.sign.MotherName.value;
    var bname=document.sign.BranchName.value;
    var sname=document.sign.SchoolName.value;
    var cname=document.sign.CollegeName.value;
    var sbname=document.sign.SchoolBoardName.value;
    var cbname=document.sign.CollegeBoardName.value;
    
    var contact=document.sign.contact.value;
    
    var pin=document.sign.pincode.value;
    
    var email=document.sign.email.value;
    
    var percent=document.sign.percentage.value;
    
    var seat=document.sign.seatno.value;
    
    var roll=document.sign.rollno.value;
    var address = document.sign.address.value;    
        
    if(fname!=""){
                    if(fname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<fname.length;i++)
                    if(fname.charAt(i)>='0'&&fname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(mname!=""){
                    if(mname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<mname.length;i++)
                    if(mname.charAt(i)>='0'&&mname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
                
        if(lname!=""){
                    if(lname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<lname.length;i++)
                    if(lname.charAt(i)>='0'&&lname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
                            
        if(moname!=""){
                    if(moname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<moname.length;i++)
                    if(moname.charAt(i)>='0'&&moname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(bname!=""){
                    if(bname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<bname.length;i++)
                    if(bname.charAt(i)>='0'&&bname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(sname!=""){
                    if(sname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<sname.length;i++)
                    if(sname.charAt(i)>='0'&&sname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(cname!=""){
                    if(cname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<cname.length;i++)
                    if(cname.charAt(i)>='0'&&cname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(sbname!=""){
                    if(sbname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<sbname.length;i++)
                    if(sbname.charAt(i)>='0'&&sbname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        if(cbname!=""){
                    if(cbname==' '){
                    alert('Space is Not Allowed In Name');
                    }
                    for(var i=0;i<cbname.length;i++)
                    if(cbname.charAt(i)>='0'&&cbname.charAt(i)<='9')
                    {
                        alert('Numbers Are Not Allowed In Name');break;
                    }
                }
                else{
                    alert('Enter Name');
                }
        
         if(contact!=""){
                    for(var j=0;j<contact.length;j++)
             if((contact.charAt(j)>='a'&&contact.charAt(j)<='z')||(contact.charAt(j)>='A'&&contact.charAt(j)<='Z'))
                    {
                        alert('Contact Number Should Not Contain Characters');break;
                    }
                    if(contact.length!=10)
                        {
                            alert('Contact Number Should be 10 Digit Long');
                        }
                }
                else{
                    alert('Enter Contact Number');
                }
        
         if(pin!=""){
                    for(var j=0;j<pin.length;j++)
             if((pin.charAt(j)>='a'&&pin.charAt(j)<='z')||(pin.charAt(j)>='A'&&pin.charAt(j)<='Z'))
                    {
                        alert('PIN Number Should Not Contain Characters');break;
                    }
                    if(pin.length!=6)
                        {
                            alert('PIN Number Should be 6 Digit Long');
                        }
                }
                else{
                    alert('Enter PIN Number');
                }        
        
        if(email!=""){
                    var at = email.indexOf("@");
                    var dot = email.lastIndexOf(".");
                    if (at<1 || dot<at+2 || dot+2>=email.length) {
                       alert("Not a valid e-mail address");
                    }
                }
                else{
                    alert('Enter Email Address');
                }
        if(seat!=""){
                    for(var j=0;j<seat.length;j++)
             if((seat.charAt(j)>='a'&&seat.charAt(j)<='z')||(seat.charAt(j)>='A'&&seat.charAt(j)<='Z'))
                    {
                        alert('Seat Number Should Not Contain Characters');break;
                    }
                    
                else{
                    alert('Enter Contact Number');
                }
        }
        if(roll=="" || roll ==" "){
            alert('Enter Roll No');
        }
        if(address=="" || address ==" "){
            alert('Enter Permanent Address ');
        }
        if(percent!=""){
            if(percent.indexOf("-")>=0){
                alert('Enter Positive Percentage');
            }
        }
            else {
                
            alert("Enter Percentage");
        }    
    </script>    
    </body>    
</html>