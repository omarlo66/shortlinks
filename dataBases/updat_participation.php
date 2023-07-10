<?php 
  include 'conn.php';
session_start();
if (!isset($_SESSION["participation_name"])) {
	header("location:../../index.php");
}
 ?>


 <?php
if($_POST)
{
	$name1   =  $_POST['name'];
	$email1   =  $_POST['email'];
	$number1   =  $_POST['number'];

$sql = "
	UPDATE participation SET 
	participation_name=$name1 
	participation_email=$email1
	participation_number=$number1  
	WHERE id = 1
	";

$r = mysqli_query($conn,$sql);

if($r)
{

	  echo "<div class='susccess'> تم تعديل بياناتك بنجاح </div>"; echo "
	<script>
		let timeout =setTimeout(function(){
			 window.location = \"Dashbord.php\" 
		},5000)
		 
	    </script>";
}
else
{

	  echo "<div class='susccess1'> لم يتم تعديل بياناتك  </div>"; echo "
	<script>
		let timeout =setTimeout(function(){
			 window.location = \"updat_participation.php\" 
		},5000)
		 
	    </script>";
	// echo "لم يتم تعديل بياناتك ";
	// header("location: updat_participation.php");
}}
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
						<h2>تعديل عملية الاشتراك</h2>
					</header>
					<div class="box">
						<form method="POST" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">
		  <?php
     
     // $id = intval($_POST['id']);
       // $_SESSION["participation_name"]where
        $stmt = "SELECT * FROM participation ORDER BY id DESC" ;

      $r = mysqli_query($conn,$stmt);
      $rows = mysqli_num_rows($r);

       if($rows > 0){
	while ($row = mysqli_fetch_assoc($r)) 
	{
		?>


								<div class="col-12">
								<label>الاسم كامل</label>
							
									<input type="text" required name="name" id="1" value="<?php echo $row['participation_name']; ?>" />
								</div>
								<div class="col-12">
								<label>عنوان البريد الالكتروني </label>
									<input type="email" required name="email" id="1" value="<?php echo $row['participation_email']; ?>" />
								</div>
								<div class="col-12">
								<label>رقم الجوال </label>
									<input type="text" required name="number" id="1" value="<?php echo $row['participation_number']; ?>" />
								</div>
								
							</div>
	
							<br><br>
							<center>
									<div  id="code9" >
								<button type="submit">تعديل</button>
								</div>
								</center>
								<?php
	}
}
?>
						</form>
					</div>
				</section>
			<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon brands fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon brands fa-whatsapp"><span class="label">whatsapp</span></a></li>
						<li><a href="#" class="icon brands fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>2023 &copy;جميع الخقوق محفوظة لدي Skip Link </li>

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