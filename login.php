<html>
<head>
<title>Login/Register</title>
<style>
<?php include'login_page_css.css';?>
</style>
</head>
<body>
<div class="form">
<div class="bb">
<div id="b"></div>
<button type="button" class="tb" onclick="login()"><b>Login</b></button>
<button type="button" class="tb" onclick="register()"><b>Register</b></button>
</div>
<form id="login" action="validation.php" method="post" class="ig">
<input type="text" class="if" placeholder="E-Mail" name="email"  ></input>
<input type="text" class="if" placeholder="Password" name="psw" ></input>
<br><br>
<button type="submit" name="sub" class="sb"><b>Login</b></button>
</form>
<form id="register" method="post" action="signup.php"class="ig">
     <input type="text" class="if" placeholder="Name" name="name" required></input>
     <input type="email" class="if" placeholder="Email" name="email" required></input>
     <input type="phno" class="if" placeholder="Phone.No" name="phno" required></input>
     
     <input type="text" class="if" placeholder="Password" name="psw" required></input>
     <br><br>
     <button type="submit" name="sub" class="sb"><b>Register</b></button>
</form>
</div>
<script>
var x = document.getElementById('login');

var y = document.getElementById('register');

var z = document.getElementById('b');

function register()
{

x.style.left = "-400px";
y.style.left = "50px";
z.style.left = "110px";

}
function login()
{

x.style.left = "50px";
y.style.left = "450px";
z.style.left = "0px";

}

</script>
</body>
</html>