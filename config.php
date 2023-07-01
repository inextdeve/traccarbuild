<?php 
ob_start();
session_start();
set_time_limit(0);
error_reporting(0);
//error_reporting(E_ALL & ~E_NOTICE);

date_default_timezone_set('Asia/Riyadh');


//const dbhost="ruh.almajal.co";
/* const dbhost="almajal.co";
$dbname="traccar2";
const dbuser='root';
const dbpass='Hqasem0512$'; */
const dbport=3306;

const dbhost="s1.rcj.care";
const dbuser='root';
const dbpass='Hqasem0512$';
$dbname = "rcj";  

$con = mysqli_connect(dbhost,dbuser,dbpass,$dbname,dbport);
mysqli_set_charset($con,"utf8");


include("functions.php");
include("iflang.php");
include("querysettings.php");


if(isset($_SESSION['name_user'])){
$qu = mysqli_query($con,"select * from ".$dbname.".tc_users where email='".$_SESSION['name_user']."' and pass='".$_SESSION['pass_user']."' ");
$show_user = mysqli_fetch_array($qu);		
}

 $qIF = mysqli_query($con,"select * from ".$dbname.".tcn_theme_users where id_user='".$show_user['id']."' and name_theme='".$show_theme['name']."' ");
 if(mysqli_num_rows($qIF) == 0 ){
	$options_theme  =  $show_theme['options'];
 }else{
	$showIF  = mysqli_fetch_array($qIF); 
	$options_theme  =  $showIF['options_color']	 ;
 }


$admin_liveStream = "admin!";
$password_liveStream = "Hqasem13579!";

 ?>












