

<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>singin</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload" >
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="index.html"> Skip Link</h1>
					<nav id="nav" >
						<ul>
							<li><a href="index.php">الصفحة الرئيسية</a></li>
							<li>
								<a href="#" class="icon solid fa-angle-down">Layouts</a>
								<ul dir="rtl">							
									<li><a href="mdona.html">نبذه عن الموقع</a></li>
									<li><a href="siasa.html">سياسة الخصوصية </a></li>
									<li><a href="shart.html">شروط الاستخدام</a></li>
									<li><a href="call.html">اتصل بنا</a></li>
									<li><a href="#">اللغات</a>
									 <ul>
                                      	<li><a href="">عربي</a></li>
                                      	<li><a href="">English</a></li>
                                      </ul>
									</li>
								</ul>
							</li>
							<li><a href="singin.php" class="button">تسجيل الدخول</a></li>
						</ul>
					</nav>
				</header>

<?php
include "dataBases/conn.php";
if(isset($_POST["submit"]))
{
session_start();
$sql = "SELECT * FROM participation WHERE participation_name='".$name1."' AND participation_password ='".$password1."'";
$result =mysqli_query($conn,$sql);
$row=mysqli_fetch_array($result);
if ($row["userType"]=="user")
 {
 	$_SESSION["participation_name"]=$name1;
	setcookie("uid",$row['id'],time()+3600*24*30);
       header("location:dashbord/Dashbord.php");
}
else{

 echo "<div class='susccess1' >اسم المستخدم وكلمة المرور غير صحيحة </div>"; echo "
	<script>
		let timeout =setTimeout(function(){
			 window.location = \"singin.php\" 
		},5000)
		 
	    </script>";


		}

}
 ?>


			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>تسجيل الدخول </h2>
						<p>Skip Link مرحبا بكم في موقع </p><br>
						الرجاء تسجيل الدخول باوراق اعتماد صالحة
					</header>
					<div class="box">
						<form method="post" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
								<label>اسم المستخدم:</label>
									<input type="text" required name="name" id="name" value="" placeholder="اسم المستخدم" />
								</div>
								<div class="col-12">
								<label>كلمة المرور :</label>
									<input type="password" required name="password" id="password" value="" placeholder="كلمة المرور" />
								</div>
								<label class="label1">
									<?php 
                                    echo mt_rand(100000,1000000);
									 ?>
								</label>
								<div class="col-12">
									<input type="password"  name="ramz" id="ramz" value="" placeholder="ادخل الرمز " />
								</div>
								
								<center>
									
								</center>
							</div><br>
							<center>
									<div  id="code9" >
									<button type="submit"> تسجيل الدخول</button>
								</div>
								</center><br><br>
							<div class="hesap">	
								<a href="singin_mror.html"> هل نسيت كلمة السر؟</a>
								<a href="participation.php">ليس لديك حساب؟</a>
                                </div>

						</form>

					</div>
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-telegram"><span class="label">telegram</span></a></li>
						<li><a href="#" class="icon brands fa-whatsapp"><span class="label">whatsapp</span></a></li>
						<li><a href="#" class="icon brands fa-google"><span class="label">Google</span></a></li>
					</ul>
					<ul class="copyright">
						<li> Skip Link &nbsp;&nbsp;&copy;&nbsp;&nbsp;جميع الخقوق محفوظة لدي </li>

					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>