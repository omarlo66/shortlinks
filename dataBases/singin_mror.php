

<?php 
session_start();
if (!isset($_SESSION["participation_name"])) {
	header("location:../../index.php");
}
 ?>
<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>SkipLink</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					
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

			<!-- Banner -->
				<section id="banner1">
				<h2>اعادة تعيين كلمة المرور</h2>
				<p>يرجي تقديم بريد الكتروني صالح</p>
				</section>

			<!-- Main -->
				<section id="main" class="container">

					<section class="box special">
						   <form method="post" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
								<label><h3>عنوان البريد الالتروني :</h3></label>
									<input type="password" name="password" id="password" value="" placeholder="عنوان البريد الالتروني " />
								</div>
								

								<div class="col-12">
									<ul class="actions special">
										<li><input type="submit" value="ارسال رمز اعادة تعيين كلمة المرور" /></li>
									</ul>
								</div>
								
							</div>
						</form>

						
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