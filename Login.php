<?php include('server.php'); ?>
<html>
<head>
    <title>Login Page</title>
    <style>
        .signup{
            color: #00afbf;
            text-decoration: none;
        }
        h1{text-align: center;
        color:#00afbf;
            margin-top: 130px; }
        .body{border-style: solid;
        border-width: 7px;
        border-color: #00afbf;
            margin-left: 100px;
            margin-right: 100px;
        color: #00afbf;}        
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
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn,.loginbtn {
    float: left;
    width: 50%;
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
    .cancelbtn, .loginbtn {
        width: 100%;
    }
}
    </style>
</head>
<body>
    <h1>LOGIN</h1>
<div class="body">    
    <form method="POST" action="Login.php">
  <div class="container">
    <label><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="FirstName" required id="name">
      
    
    <label><b>Roll No / Unique Key</b></label>
    <input type="text" placeholder="Enter Password/Unique Key/Roll No" name="rollno" required>
    
    <div class="clearfix">
      <button onclick="window.location.href='Form Automation.php'" class="cancelbtn">Cancel</button>
      <button type="submit" class="loginbtn" name="login_user">Login</button>
    </div>
      
  </div>
        <div class=""><center><a href="Signup.php" class="signup">New User?   Signup</a></center></div>
    </form>
    </div>
</body>    
</html>