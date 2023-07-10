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
											<li><a href="../Dashbord.php">لوحة التحكم </a></li>
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
						<h2>تبادل زيارات</h2>					
					</header>
					<div class="box" dir="rtl">
					<p>تمت اضافة: 100</p>	
					<!-- <?php 
                         function addtocart($pid,$q){ 
                             if($pid<1 or $q<1) return; 
                             if(is_array($_SESSION['cart'])){ 
                             if(product_exists($pid)) return; 
                             $max=count($_SESSION['cart']); 
                             $_SESSION['cart'][$max]['productid']=$pid; 
                             $_SESSION['cart'][$max]['qty']=$q; 
                             } 
                             else{ 
                             $_SESSION['cart']=array(); 
                             $_SESSION['cart'][0]['productid']=$pid; 
                             $_SESSION['cart'][0]['qty']=$q; 
                             } 
                            } 
                            function product_exists($pid){ 
                             $pid=intval($pid); 
                             $max=count($_SESSION['cart']); 
                             $flag=0; 
                             for($i=0;$i<$max;$i++){ 
                             if($pid==$_SESSION['cart'][$i]['productid']){ 
                             $flag=1; 
                             break; 
                             } 
                             } 
                             return $flag; 
                            } 
					 ?> -->
						<section class="box special features">
						<div class="features-row">						
					</div>
							<section>
						  <form method="post" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
							<div class="code">
								
									<center>
										للحصول علي الكود اضغط هنا 
										&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button>اضغط هنا</button>
									</center>
								</div>
						</div>

						</form>

						  <form method="post" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
								<div class="col-12">
									<input type="text" name="text" id="text" value="" placeholder="اكتب الكود هنا" /><br><br>
								</div>
							</div>
							 <div class="code1">
									<button id="code3">تاكيد</button>
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									<button id="code3">الرابط لا يعمل</button>
								</div>
						</form>


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