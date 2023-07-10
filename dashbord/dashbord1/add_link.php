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
		<link rel="stylesheet" href="../../assets/css/main.css" />
	</head>
	<body class="is-preload" >
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					
					
					<nav id="nav" >
						<ul>
                             <li> Dashbord
                                         <ul dir="rtl">
											<li><a href="../Dashbord.php">لوحة التحكم</a></li>
											<li><a href="add_link.php">اضافة رابط</a></li>
											<li><a href="depost.php">ايداع</a></li>
											<li><a href="exchange_of_visits.php">تبادل زيارات</a></li>
											<li><a href="mark.php">السوق</a></li>
											<li><a href="pull.php">سحب</a></li>
											<li><a href="referral.php">الاحالة</a></li>
											<li><a href="transaction.php">المعاملات</a></li>
											<li><a href="your_link.php">روابطك</a></li>
											<li><a href="technical_support.php">الدعم الفني</a></li>
											
										</ul>
									</li>
							</li>&nbsp;
							<li>
					        <?php 
                            echo $_SESSION["participation_name"];
							 ?>
                             <ul dir="rtl">
                             	<li><a href="../../dataBases/updat_participation.php">تعديل الملف الشخصي</a></li>
                             	<li><a href="../../dataBases/singin_mror.php">اعادة تعيين كلمة المرور</a></li>
                             	<li><a href="../logout.php" >تسجيل الخروج</a></li>
                             </ul>
							</li>
							
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2> اضافة رابط</h2>					
					</header>
					<div class="box">
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
			
						  <form method="post" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
							<label class="label3"> قم باختصار هذا الرابط</label>
							<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="اختصار رابط" />
								</div><br><br>
								<label class="label3"> قم باضافة تغيير المصدر</label>
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="اضافة رابط مصدر" />
								</div><br><br>
								<label class="label3"> قم باضافة عدد النقاط</label>
								<div class="col-6 col-12-mobilep">
									<input type="text" name="name" id="name" value="" placeholder="اضافة النقاط" />
								</div>
								

							</div><br>

								<div  id="code4" >
									<button type="submit"><a href="">اضافة رابط</a></button>
								</div>

						</form>                
                           	<section id="cta1" >
                           <p>قوانين قبول الرابط في الموقع</p>
                           <ol type="1" start="1" dir="rtl">
                           	<li>قم باضاة رابط تغيير المصدر</li>
                           	<li>لا يوجد اعلانات منبثقة في الرابط</li>
                           	<li>لا يوجد اعلانات اباحية في الرابط</li>
                           	<li> لا تقم باختصار الرابط عدت مرات</li>
                           	<li>يجب ان يكون الرابط سهل التخطي علي المستخدمين </li>
                           </ol>
				          </section>
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
			<script src="../../assets/js/jquery.min.js"></script>
			<script src="../../assets/js/jquery.dropotron.min.js"></script>
			<script src="../../assets/js/jquery.scrollex.min.js"></script>
			<script src="../../assets/js/browser.min.js"></script>
			<script src="../../assets/js/breakpoints.min.js"></script>
			<script src="../../assets/js/util.js"></script>
			<script src="../../assets/js/main.js"></script>

	</body>
</html>