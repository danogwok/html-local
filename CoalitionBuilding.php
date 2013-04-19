<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>TerrAfrica</title>
<?php

  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
<style type="text/css">
* {
	margin: 0 auto;
}
html {
 background: url(images/<?php echo $selectedBg;
?>) no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
body {
	margin: 0;
}
.main-content {
	width: 850px;
	margin: 0 auto;
}
.wrapper-top {
	height: 70px;
	background: none repeat scroll 0 0 #FFF;
	overflow: hidden;
	width: 100%;
	margin: 0 auto;
}
.top-logo {
	width: 850px;
	margin: 0 auto;
	top: 10px;
}
.nav {
	width: 850px;
	margin: 0 auto;
}
.nav ul {
	list-style: none outside none;
	height: 57px;
	text-align: center;
	margin: 0;
	padding: 0;
}
.nav li a {
	font-size: 14px;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	text-decoration: none;
	vertical-align: middle;
	border-right: 1px solid #FFF;
	line-height: 57px;
	float: left;
	height: 57px;
	width: 200px;
	border-right: 2px thin #FFF;
	background: #324413; /* Old browsers */
	background: -moz-linear-gradient(top, #324413 0%, #23261f 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #324413), color-stop(100%, #23261f)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #324413 0%, #23261f 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #324413 0%, #23261f 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #324413 0%, #23261f 100%); /* IE10+ */
	background: linear-gradient(to bottom, #324413 0%, #23261f 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#324413', endColorstr='#23261f', GradientType=0 ); /* IE6-9 */
}
.nav li a:hover {
	background: #23261f; /* Old browsers */
	background: -moz-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #23261f), color-stop(100%, #6c8a3a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* IE10+ */
	background: linear-gradient(to bottom, #23261f 0%, #6c8a3a 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#23261f', endColorstr='#6c8a3a', GradientType=0 ); /* IE6-9 */
	height: 52px;
	border-bottom: 5px solid #d06240;
}
.nav .current a {
	background: #23261f; /* Old browsers */
	background: -moz-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #23261f), color-stop(100%, #6c8a3a)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #23261f 0%, #6c8a3a 100%); /* IE10+ */
	background: linear-gradient(to bottom, #23261f 0%, #6c8a3a 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#23261f', endColorstr='#6c8a3a', GradientType=0 ); /* IE6-9 */
	height: 52px;
	border-bottom: 5px solid #d06240;
}
.nav ul li:last-child a {
		border-right: 0px;

	}
.feature-wrapper {
	width: 850px;
	/*	height: 370px; */
	overflow: hidden;
	display: block;
	clear: both;
}
.feature-wrapper-content {
	width: 530px;
	/*float: left; */
	color: #FFF;
	height: 370px;
	padding-top: 5%;
}
.feature-wrapper h1 {
	font-family: Verdana, Geneva, sans-serif;
	font-size: 40px;
}
.feature-wrapper p {
	padding: 5px;
	font-family: Verdana, Geneva, sans-serif;
	font-size: 15px;
}
.button {
	float: left;
	width: 190px;
	height: 31px;
	border-radius: 50px;
	-moz-border-radius: 50px;
	-webkit-border-radius: 50px;
	font-size: 14px;
	color: #FFF;
	font-family: Verdana, Geneva, sans-serif;
	text-decoration: none;
	text-align: center;
	vertical-align: middle;
	/* line-height:31px; */

	background: #fbfbfb; /* Old browsers */
	background: -moz-linear-gradient(top, #fbfbfb 0%, #a2a2a2 100%); /* FF3.6+ */
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fbfbfb), color-stop(100%, #a2a2a2)); /* Chrome,Safari4+ */
	background: -webkit-linear-gradient(top, #fbfbfb 0%, #a2a2a2 100%); /* Chrome10+,Safari5.1+ */
	background: -o-linear-gradient(top, #fbfbfb 0%, #a2a2a2 100%); /* Opera 11.10+ */
	background: -ms-linear-gradient(top, #fbfbfb 0%, #a2a2a2 100%); /* IE10+ */
	background: linear-gradient(to bottom, #fbfbfb 0%, #a2a2a2 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fbfbfb', endColorstr='#a2a2a2', GradientType=0 ); /* IE6-9 */
}
.button a {
	text-decoration: none;
	color: #000;
	padding-left: 4%;
	padding-right: 10%;
}
.button img {
	text-align: center;
	vertical-align: middle;
	padding-left: 4%;
}
.home-footer-widget {
	background: #f00;
	background: rgba(255,255,255,0.75);
	width: 850px;
	height: 216px;
	padding: 1%;
	float: left;
	display:block;
	clear:both;
}
.home-footer-widget-left p {
	width: 850px;
	float: left;
	font-family: Verdana, Geneva, sans-serif;
	font-size:12px;

}



.footer{
	height:50px;
	display: block;
	clear: both;
}
</style>
</head>

<body>
<!--Hello Top White bar-->
<div class="wrapper-top">
  <div class="top-logo">
  <a href="/"> <img src="images/TerrAfrica.jpg" /> </a></div>
</div>
<!--Ciao Top White bar--> 
<!--Hello Navigation bar-->
<div class="nav">
  <ul>
    <li><a href="index.php">Investments</a></li>
    <li class="current"><a href="#">Coalition Building</a></li>
    <li><a href="#">Knowledge Management</a></li>
    <li><a href="#">Programs</a></li>
  </ul>
</div>
<!--Ciao Navigation bar--> 
<!--Hello Feature Wrapper-->
<div class="feature-wrapper" style="clear: both;">
<!--Hello Feature Wrapper Text-->
<div class="feature-wrapper-content">
  <h1>Coalition Building</h1>
  <p>A partnership that aims to address land degradation in Sub-Saharan Africa by scaling up harmonized support for effective and efficient country-driven sustainable land management</p>
  <!--Hello Feature Wrapper Button-->
  <div class="button"> <a href="#"> Download Report </a> <img src="images/TA_Button_Divider.png" height="31" /> <img src="images/TA_Button_Arrow.png" height="16" /> </div>
</div>
<!--Ciao Feature Wrapper--> 

<!--Hello Footer Widget-->
<div class="home-footer-widget">
<p>
For SLM to work, sustained support and harmonized efforts at the national level and on the ground are needed to enhance efficiencies and allow economies of scale.<br><br> To better address transboundary dimensions, significant and effective political, strategic and technical backing at the regional and global levels is necessary, it is also essential that efforts to mainstream SLM are backed up by solid analytical underpinnings. <br><br>Activity Line 1 mobilizes partners in a coalition to advocate a common vision of SLM, share analyses, set the foundations for strengthening and harmonizing policy dialogues and strategies, and improve coordination at all levels.
  </p>
  
</div>

<div class="footer">
</div>

<!--Ciao Footer Wrapper -->

</body>
</html>
