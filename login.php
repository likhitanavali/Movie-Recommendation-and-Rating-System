<?php include('loginchk.php') ?>
<!DOCTYPE html>
<html>
<style>
div.icon{
	border : 100;
	top : 20 px;
	opacity : 30 ;
	}
h1{
color: #CCCCCC;
    text-shadow: 0 1px 0 #999999, 0 2px 0 #888888,
             0 3px 0 #555555, 0 6px 0 #444444,
             0 5px 10px rgba(0, 0, 0, 0.2);
}
body{
  font-family: 'Lato', sans-serif;
  
}
button {
  background: transparent;
  border: 0;
  padding: 0;
  cursor: pointer;
  outline: 0;
  -webkit-appearance: none;
}
div.container{
	height: 10em;
    position: relative ;
	color : white ;
}
div.container{
	margin: 0;
    position: absolute;
    top: 40%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%)
}

button {
  display: inline-block;
  position: relative;
  padding: 20px 38px;
  top: 0;
  font-size: 20px;
  font-family: "Open Sans", Helvetica;
  border-radius: 4px;
  border-bottom: 1px solid rgba( 28, 227, 125, 0.5 );
  background: rgba( 22, 230, 137, 1 );
  color:#fff;
  background-image: url("backgroundimage.jpg");  
  box-shadow: 0px 0px 0px rgba( 15, 165, 60, 0.1 );
  
  -webkit-transform: translateZ(0);
     -moz-transform: translateZ(0);
      -ms-transform: translateZ(0);
          transform: translateZ(0);
  
  -webkit-transition: all 0.2s ease;
     -moz-transition: all 0.2s ease;
      -ms-transition: all 0.2s ease;
          transition: all 0.2s ease;
}

button:hover {
  top: -10px;
  box-shadow: 0px 10px 10px rgba( 15, 165, 60, 0.2 );
  
  -webkit-transform: rotateX(20deg);
     -moz-transform: rotateX(20deg);
      -ms-transform: rotateX(20deg);
          transform: rotateX(20deg);
}

button:active {
  top: 0px;
  box-shadow: 0px 0px 0px rgba( 15, 165, 60, 0.0 );
  background: rgba( 20, 224, 133, 1 );
}
</style>

<body>
<a href="homepage.html"><img src="homeicon.png" width="42" height="42" style="color:white;" alt="HOME"/></a>
<form method="post" action="login.php">
<?php include('errors.php'); ?>
<div class="container">
  	<h1>Login Here</h1>
 	<label><b>Username : </b></label>
  	<input type="text" name="username" >
	<br>
	<br>
  	<label><b>Password : </b></label>
  	<input type="password" name="password">
	<br>
	<br>
	
	<button type="submit" class="button" name="login_user">Login</button>
  	<p><b>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</b></p>
</div>
</form>
</body>
</html>

