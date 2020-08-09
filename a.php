$con = mysqli_connect('localhost:3306',$uid, $pass,'fmsorion_FeeMgmt') or die(mysqli_error($con));$table = $_SESSION["table"];
<?php session_start(); ?>