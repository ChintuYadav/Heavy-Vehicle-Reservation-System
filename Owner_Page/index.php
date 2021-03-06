<?php 
session_start();
$cn = mysql_connect("localhost","root","") or die("Could not Connect My Sql");
$db=mysql_select_db("selab",$cn)  or die("Could connect to Database");
?>
<html>
<title>Heavy Vehicle Reservation System</title>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
  $("a").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});
</script>
<style>
.modal-header, h4, .close {
      background-color: #004080;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: white;
  }
#header {
	margin-top: -10px;
	margin-left: -10px;
	margin-right: -10px;
	width: 101.5%;
	top: 0;  
	background-color:#004080;
}
.menu-wrap {
	background: #004080
}

.menu {
	display: block;
	text-align: left;
	font-size: 12px;
	color: #006;
	overflow: hidden;
	width: 1000px;
	margin: auto;
}

.menu a {
	color: #fff;
	float:right;
	font-size: 14px;
	text-decoration: none;
	padding: 2px 15px 1px;
	font-weight: 700;
	line-height: 36px;
	display: block;
	float: left;
	border-right: solid 1px #004080
}

.menu a:hover {
		center no-repeat #004080;
	background-color: black;
	transition:0.3s;100 puntos
}

.menu a.selectedtabcopy {
		center no-repeat;
	color: #fff
}
.menu_header,.menu_title {
	font-family: Arial, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #006;
	font-weight: 700
}
body{
    overflow-x: hidden;
}
#Search_bar{
    background: url(../Images/12.png) top center no-repeat;
	width: 100%;
	min-height: 100%;
    background-color:lavender;
    color:white;
    margin-left:-10px;
    width:101.5%;
    height: 95%;
    border-bottom:solid 5px #004080;
    
}
.Input_text{
    border-radius:0px;
    padding: 10px;
    width:300px;
    border: none;
    color:black;
    border-bottom: solid 2px #004080;
    margin:10px;
    position:relative;
    top:100px;
    left:200px;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
}
.Input_text:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#search{
    position:relative;
    top:110px;
    left:210px;
}
.btn-info{
    background-color: #004080;
    border: none;
    color: white;
    padding: 9px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; 
    transition-duration: 0.4s;
}
.btn-info:hover{
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#Contents_lorry{
    background:url('../Images/lorry1.png');
    width:101.5%;
    height:100%;
    float:left;
    margin-left:-10px; 
    background-repeat:no-repeat;
    transition:0.5s;
    
}
#Contents_lorry1{
    background-color:white;
    margin-left:510px;
    height:40px;
}
#Contents_lorry1 p,p1,p2,p3{
    color:grey;
    line-height:2;
    font-size:1.2em;
    margin-top:100px;
    margin-left: 10px;
    transition:0.3s;
}
#Contents_lorry1 p:hover,p1:hover,p2:hover,p3:hover{
    color:#004080;
    transition:0.3s;
    cursor:pointer;
}
#fa_fa-arrow-circle-down1{
    margin-left:50%;
    margin-top:30%;
    transition:0.3s;
}
#fa_fa-arrow-circle-down2{
    margin-left:50%;
    margin-top:40%;
    transition:0.3s;
}
#fa_fa-arrow-circle-down1:hover{
    margin-left:50%;
    margin-top:30%;
    text-shadow:0 0 10px black;
    transition:0.3s;
}
#Home_bar{
    background: url(../Images/12.png) top center no-repeat;
	width: 100%;
	min-height: 100%;
    background-color:lavender;
    color:white;
    margin-left:-10px;
    margin-top:-20px;
    width:101.5%;
    height: 95%;
    border-bottom:solid 5px #004080;
}
#Home_bar h1{
    font-size:3em;
    font-family:sans-serif;
    text-align:center;
    text-shadow:0 0 10px #004080;
    text-decoration:none;
    cursor:pointer;
}
.lorry{
    margin-left:35%;
    margin-top:10%;
    width:300px;
}
.navbar{
    background-color:#004080;
    border:0;
    border-radius:0px;
}
.nav.navbar-nav li a {
    color: white;
}
.nav li:hover{
    background-color:black;
}
.img{
    margin-top:0px;
}
</style>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="../Images/logonav.png" class="img"></a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li><a href="Post_Load.php">Load Post</a></li>
      <li><a href="SearchLoad.php">Load Search</a></li>
      <li><a href="Booking_DB.php">My Taking</a></li>
      <li><a href="ContactUs.php">Contact Us</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(isset($_SESSION['owner_id'])){
                  $registration=$_SESSION['owner_id'];
                  $_SESSION['owner_id']=$registration;
                  $query="SELECT * FROM registration WHERE Email='$registration'";
                  $result=mysql_query($query);
                  $row=mysql_fetch_array($result);
                  echo "<ul class='nav navbar-nav navbar-right'>
                <li class='dropdown'>
                    <a href='#' class='dropdown-toggle' data-toggle='dropdown'>
                        <span class='glyphicon glyphicon-user'></span>
                        <strong>&nbsp$row[2]</strong>
                        <span class='glyphicon glyphicon-chevron-down'></span>
                    </a>
                    <ul class='dropdown-menu'>
                        <li>
                            <div class='navbar-login'>
                                <div class='row-lg-12'>
                                    <div class='col-lg-12'>
                                        <p class='text-center'>
                                            <span class='glyphicon glyphicon-user icon-size'></span>
                                        </p>
                                    </div>
                                    <div class='col-lg-12'>
                                        <p class='text-left'><strong>$row[1]</strong></p>
                                        <p class='text-left small'>$row[2]</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class='divider navbar-login-session-bg'></li>
                        <li class='navbar-login-session-bg'>
                            <div class='navbar-login navbar-login-session'>
                                <div class='row-lg-12'>
                                    <div class='col-lg-12'>
                                        <p>
                                            <a href='#Forget_Modal' data-toggle='modal' data-target='#Forget_Modal' class='btn btn-danger btn-block'>Change Password</a>
                                            <a href='logout.php' class='btn btn-danger btn-block'>Logout</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>";
                }
            else
              echo "<li><a data-toggle='modal' data-target='#Login_Modal'><span class='glyphicon glyphicon-log-in'></span> Login</a></li>
              <li><a href='signUp.php'><span class='glyphicon glyphicon-user'></span> Sign Up</a></li>";
      ?>
    </ul>
  </div>
</nav>
<div id="Home_bar">
    <a href="#Contents_lorry"><img src="../Images/logo.png" data-toggle="tooltip" title="Go To Search Bar--->down" class="lorry"></a>
    <h1>Heavy Vehicle Reservation</h1>
</div>

<div id="Contents_lorry">
    <div id="Contents_lorry1">
        <p>
            <i class="fa fa-truck" style="font-size:50px;"></i> This easy-to-use site offers customers the chance to advertise and search for return loads, and regular haulage and courier work.
        </p>
        <p1>
            <i class="fa fa-truck" style="font-size:50px;"></i> If more than one customer is interested in your load you can agree your rates and payment terms directly
        </p1>
        <br><br>
        <p2>
            <i class="fa fa-truck" style="font-size:50px;"></i> Our online, India-wide network makes customer contact quick and effective, without the need for endless phone calls.
        </p2>
        <br><br>
        <p3>
            <i class="fa fa-truck" style="font-size:50px;"></i> Customers not only benifit from lavenderuced empty trucks, but save fuel by not having to travel far to collect their next load, returning to base in quicker time to.
        </p3>
    </div>
</div>
<div class="modal fade" id="Login_Modal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Owner Login</h4>
          <br>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="Owner_login.php" method="post">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-registration"></span> Username</label>
              <input type="email" name="username" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" name="submit" style="background-color:#004080; border:none" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="signUp.php">Sign Up</a></p>
        </div>
      </div>
      
    </div>
  </div> 
  
  
  
  
  
  
  <div class="modal fade" id="Forget_Modal" role="dialog">
    <div class="modal-dialog">
    
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span>Change Your Password</h4>
          <br>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
        	<?php
        	$x=(rand(1,100));
        	$y=(rand(1,100));
        	echo "
          <form role='form' action='forget_password.php?x11=$x&y11=$y' method='post'>
            <div class='form-group'>
              <label for='usrname'><span class='glyphicon glyphicon-registration'></span> Username</label>
              <input type='text' name='username' class='form-control' id='usrname' placeholder='Enter email'>
            </div>
            <div class='form-group'>
              <label for='psw'><span class='glyphicon glyphicon-eye-open'></span> Password</label>
              <input type='password' class='form-control' name='password' id='psw' placeholder='Enter Old password'>
            </div>
            <div class='form-group'>
              <label for='psw'><span class='glyphicon glyphicon-eye-open'></span> New Password</label>
              <input type='password' class='form-control' name='cpassword' id='psw' placeholder='Enter New password'>
            </div>";
            	echo"
            	<div class='row'>
								<center><div class='col-xs-4'><h3>$x+$y=</h3></div>
								<div class='col-xs-4'><input type='text' name='val'class='form-control' placeholder='Enter value'></div></center>
  						</div>
            	
            	";
            ?>
              <button type="submit" name="submit" style="background-color:#004080; border:none" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Reset</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
      
    </div>
  </div> 
  
</html>
