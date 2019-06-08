<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
<style>
       
.container {
    cursor: pointer;
    margin-left: 100px;
    margin-left: 1150px;
    margin-top: 10px;
}

.bar1, .bar2, .bar3 {
    width: 35px;
    height: 5px;
    background-color:#00afbf;
    margin: 6px 0;
    transition: 0.4s;
}

.change .bar1 {
    -webkit-transform: rotate(-45deg) translate(-9px, 6px) ;
    transform: rotate(-45deg) translate(-9px, 6px) ;
}

.change .bar2 {opacity: 0;}

.change .bar3 {
    -webkit-transform: rotate(45deg) translate(-8px, -8px) ;
    transform: rotate(45deg) translate(-8px, -8px) ;
}
    .firstimg{
        margin-left: 40px;
        margin-right: 40px;
    }
    .Signup{
        background-color: #00afbf;
        color: white;
        text-decoration: none;
        font-size: 35px;
        border: 2px solid #00afbf;
        cursor: pointer;
        line-height: 1.33;
        border-radius: 5px;
    }
    .Signup:hover{
        background-color: white;
        color: #00afbf;
    }
    .logo{
        cursor: pointer;
    }
    h2{
        color:#00afbf;
        text-align:center;
        font-size: 40px;
    }
    .detail{
        text-align: center;
        font-style: oblique;
        font-size: 20px;
    }
    .Started{
        border-radius: 5px;
        background-color: white;
        border: 2px solid #00afbf;
        cursor: pointer;
        color: #00afbf;
        font-size: 35px;
    }
    .Started:hover{
        background-color: #00afbf;
        color: white;
    }
    .Hover{
        font-size: 20px;
        background-color: #00afbf;
        color: white;
        border: 0px;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        position: absolute;
        top: 0;
        margin-top: 100px;
    }
    .Hover:hover{
        background-color: white;
        color: #00afbf;
        vertical-align: top;
    }
    .option, .new{
        visibility: hidden;
        text-decoration: none;
        text-decoration-color: #00afbf;
        background-color: #00afbf;
        color: white;
        padding: 10px;
        font-size: 15px;
        margin-right: 0px;
        width: 130px;
    }
    .changed .option, .changed .new{
        visibility: visible;
        
    }
    .new:hover, .option:hover{
       color: #00afbf;
        background-color: white;
    }
    .a{
        text-decoration: none;
        color: #00afbf;
    }
    .a:hover{
        background-color: #00afbf;
        color: white;
    }
    .b{
        text-decoration: none;
        color: white;
    }
    .b:hover{
        background-color: white;
        color: #00afbf;
    }

    
</style>
</head>
<body>
<div>    
<div style="background-color: #00afbf; color: rgb(0, 0, 0);margin-top: -25px;"><br>    
<div style="background-color: white; margin:25px;">
    <span><div><?php if (isset($_SESSION['success'])) : ?>
			<div>
				<h3>
					<?php
					    error_reporting(0);
				//		echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
<a onclick="window.location.reload()" class=logo><img style="width: 208px; height: 130px;" alt="Title"
src="FA_title.png" id="top">
        </a>
        </div>
    <br>
<div class="navigate" style="margin-top: -100px;margin-left: 50px;">
<nav>    
<form action="#Security">
    <div><input type="submit" value="SECURE" class="Hover" style="margin-left: 300px;"></div>
    </form>
<form action="#Update">
    <input type="submit" value="UPDATE" class="Hover" style="margin-left: 500px;">
    </form>
<form action="#Support">
    <input type="submit" value="SUPPORT" class="Hover" style="margin-left: 700px;">
    </form></nav>
</div>    
<div class="container" onclick="myFunction(this)"   >
  <div class="bar1"></div>
  <div class="bar2"></div>
  <div class="bar3"></div>
    <button class="new"><a href="FormAutomation.php" class="option">HOME</a></button>
    <button class="new"><a href="Signup.php" class="option">SIGN UP</a></button>
    <button class="new"><a href="Template.php" class="option">TEMPLATES</a></button>
    <button class="new"><a href="contact.html" class="option">PROFILE</a></button>
    <button class="new"><a href="aboutus.html" class="option">ABOUT US</a></button>
    <?php if (isset($_SESSION['FirstName'])) : ?>
    <button class="new"><a href="FormAutomation.php?logout='1'" class="option">LOG OUT</a></button>
    <?php else : ?> <button class="new"><a href="Login.php" class="option">LOG IN</a></button>
    <?php endif ?>
    
</div>
    </span>
    <div style="text-align: center;">
<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['FirstName'])) : ?>
			<p style=font-size:30px;>Welcome <strong><?php echo $_SESSION['FirstName']; ?></strong></p>
		<?php endif ?>
</div>        

    <div class="firstimg">
    <img src="filling-a-form.jpg" width="1200px" height="600px">
        <p align=center><button class="Signup"><a class="b" href="check.php">Get Started</a></button></p>
        <br><br>
    </div>
    </div><br>
    </div>
    <br>
    <div>
        
        <div>
            <h2 id="Security"><img src="6.png" alt="Smiley face" width="55" height="55" >Safe & Secure</h2>
    <p style="color: black;" class="detail">All your submissions and records remain confidential and<br> always yours,as it should be</p> 
            <br><br> </div>   
    
        <form action="#top">
        <input type="image" src="arrow.jpg" style="float: left" width="60px;" class="logo">
        <input type="image" src="arrow.jpg" style="float: right" width="60px;" class="logo">
        </form>
        
    <div> 
        <h2 id="Update"><img src="1.png" alt="Smiley face" width="55" height="55" >Update Data</h2>
    <p style="color: black;" class="detail">You can update your stored data<br>whenever you want</p> 
    <br><br>
</div>
        
        <div>
            <h2 id="Support"><img src="2.png" alt="Smiley face" width="55" height="55" >24/7 Support</h2>
    <p style="color: black;" class="detail">Regardless of your plan, there is always<br> someone available to help you with any issue and<br> we love getting feedback </p> <br><br>
        </div>
        <p align="center"><button class="Started"><a class="a" href="check.php">Get Started</a></button></p>    
    </div>
    </div>
<script>
function myFunction(x) {
    x.classList.toggle("change");
    x.classList.toggle("changed");
    ;
  
}
</script>

</body>
</html>
