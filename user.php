<?php session_start();
error_reporting(0); ?>
<html>
<head>
	<meta charset="utf-8">
	<title>Fees Management System</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
	 body {
    background: linear-gradient(290deg ,darkblue 53% , #fff 0%);
 }
      .form {
        box-shadow: 0 2px 20px rgba(59, 43, 91, 0.7);
        color: white;
    

        margin-top: 5%;
    
        background: linear-gradient(290deg ,darkblue 56% , #fff 0%);
        transition: all 0.2s;
      }
      .form-group {
        
    padding:5px;
        margin-left: 20px;
      }
      .icon {
        height: auto;
        width: auto;
        background-color: white;
        color:darkblue ;
        padding: 3%;
        border-radius: 50%;
        font-size: 50px;
      }
      .input-type{
          font-size: 18px;
          
          outline: none;
          border: none;
      }
      .input-type:focus{
          outline: none;
          border: none;
          outline-width: 0;
      }
      .icon-container{
          display: flex;
          font-size: 25px;
          
      }
      .icon-input{
          color: white;
          font-size: 25px;
          padding-left:10px;
          padding-top: 7px;
          padding-right: 10px;
      }
      .buttons{
          display: flex;
          flex-direction: row;
          justify-content: space-evenly;
          align-items: center;
          margin-top: 10px;
          color: white;
         margin-left: 100px;
      }
      
      .techo{
          text-align: center;
        
          padding-top: 18px;
        
          color: white;
      }
   @media screen and (min-width:992px) and (max-width:1024px){
	   body{
		   background:white;
	   }
   }
</style>
<body>

	<?php require_once '100800500693471.php'; ?>
	<?php
		if(isset($_SESSION['message'])): ?>

<div class="alert alert-<?=$_SESSION['msg_type']?>">
	<?php
	echo $_SESSION['message'];
	unset($_SESSION['message']);
	?>
</div>
<?php endif ?>
	<div class="container">
	<div class="row justify-content-center" style="padding-top:100px; padding-left:10px;">
	<div class="col-md-2"></div>

<div class="col-md-8" style="padding-bottom:90px;">
<form action="100800500693471.php" method="POST">
	
<div class="form">
	<div class="row">
		<div class="col-md-6 col-sm-6">
		<h2
                style="
                  text-align: center;
                  padding-top: 20%;
                  
                  font-size: 30px;
                "
              >
			   <span><i" class="icon fas fa-user-shield"></i></span>
    
                <b style="color:darkblue">Fees Management System</b>
                <p style="color: darkblue; font-size: 0.8rem;">OrionsITSolution</p>
              </h2>
            		</div>
		<div class="col-md-6 col-sm-6">

<div class="form-group" >
	<h2 style="color:white; padding-top:40px;">User Login</h2>
    <select class="form-control" name="College" id="College">

    	<option name="College" id="College">Select College</option>
    <option value="data1">595-Swami vivekanand Mahavidyalaya,Prem Nagar Jhansi</option>
    <option value="data2">619-Jai Bundelkhand Institute, Babina Jhansi</option>
    <option value="data3">807-Swami vivekanand Law College,Prem Nagar Jhansi</option>
    <option value="data4">646-Jai Bundelkhand College of Law,Panari Lalitpur</option>
    <option value="data5">602-Jai Bundelkhand Mahavidyalaya, Kulpahar Mahoba</option>
    <option value="data6">503-Dr. B.R. Ambedkar Law College, Girwan Banda</option>
    <option value="data7">645-Dr. B.R. Ambedkar Mahavidyalaya, Girwan Banda</option>
    <option value="data8">817-Jai Bundelkhand Mahaveer Mahavidyalaya, Khohi Banda</option>
 </select>
  </div>
<br>
<div class="form-group">
<label style="color:white;">UserID</label><input type="text" class="form-control" name="userid" id="userid"></div>
<div class="form-group">
<label style="color:white;">Password</label><input type="Password" class="form-control" name="password" id="password"></div>
<div class="form-group">
    <button type="Submit" class="btn" style="background:blue; color:white;"name="login">LOGIN</button>
  </div>
		</div>
		</div>
		</div>
		
</form>
		</div>
		<div class="col-md-2"></div>	

</div>
</div>

<footer>
<div class="container-fluid fixed-bottom p-0" style="background: -webkit-linear-gradient(
      to right,
     gray);
    background: linear-gradient(to right,gray,gray);">
       <p class="techo"> &copy; Copyright  <a style="color:white; text-decoration:none" href="https://orionstechnologies.com/" target="blank">OrionsITSolution</a> All Rights Reserved  </p>
   </div>
  
</footer>
</body>
</html>