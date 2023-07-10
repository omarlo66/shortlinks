<?php 
session_start();
if (!isset($_SESSION["participation_name"])) {
	header("location:../../index.php");
}
 ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Dashbord</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload" >
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					
					
					<nav id="nav" >
						<ul>
                             <li> Dashbord
                                         <ul dir="rtl">
											<li><a href="dashbord1/add_link.php">اضافة رابط</a></li>
											<li><a href="dashbord1/depost.php">ايداع</a></li>
											<li><a href="dashbord1/exchange_of_visits.php">تبادل زيارات</a></li>
											<li><a href="dashbord1/mark.php">السوق</a></li>
											<li><a href="dashbord1/pull.php">سحب</a></li>
											<li><a href="dashbord1/referral.php">الاحالة</a></li>
											<li><a href="dashbord1/transaction.php">المعاملات</a></li>
											<li><a href="dashbord1/your_link.php">روابطك</a></li>
											<li><a href="dashbord1/technical_support.php">الدعم الفني</a></li>
											
										</ul>
									</li>
							</li>&nbsp;
							<li>
					        <?php 
                            echo $_SESSION["participation_name"];
							 ?>
                             <ul dir="rtl">
                             	<li><a href="../dataBases/updat_participation.php">تعديل الملف الشخصي</a></li>
                             	<li><a href="singin_mror.php">اعادة تعيين كلمة المرور</a></li>
                             	<li><a href="logout.php" >تسجيل الخروج</a></li>
                             </ul>
							</li>
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>لوحة التحكم</h2>					
					</header>
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								
									<img src="../images/18.jpg">
								
								<h3>عدد  المستخدمين</h3>
								<p> 52</p>
								<a href="#" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
						</div>
					</section>


                   
                   <section id="main" class="container medium">
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								<img src="../images/14.png">
								<h3>عدد الروابط</h3>
								<p>40 </p>
								<a href="#" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
						</div>
					</section>




					<section id="main" class="container medium">
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								<img src="../images/15.jpeg">
								<h3>عدد روابطك</h3>
								<p> 455</p>
								<a href="#" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
						</div>
					</section>



					<section id="main" class="container medium">
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								<img src="../images/16.jpeg">
								<h3> عدد نقاطك</h3>
								<p>50 </p>
								<a href="#" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
						</div>
					</section>

                     <section id="main" class="container medium">
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								<img src="../images/17.jpg">
								<h3>رصيدك بالدولار </h3>
								<p>40</p>
								<a href="referral.html" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
						</div>
					</section>


					<section id="main" class="container medium">
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
								<img src="../images/13.png">
								<h3>عدد الاحالة</h3>
								<p>40</p>
								<a href="referral.html" style="color: black;list-style: none;font-size: 25px;">&gt;</a>
							</section>
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
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.dropotron.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/browser.min.js"></script>
			<script src="../assets/js/breakpoints.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>

	</body>
</html>