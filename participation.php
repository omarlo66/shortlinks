<!DOCTYPE HTML>

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
					<h1><a href="index.php"> Skip Link</h1>
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
          include 'dataBases/conn.php';
           if($_POST)
          {
	
	$name1   =  $_POST['name'];
	$email1   =  $_POST['email'];
	$number1   =  $_POST['number'];
	$password1   =  $_POST['password'];
	$password11   =  $_POST['password1'];
	$ramz1   =  $_POST['ramz'];
	$stmt = "
	INSERT INTO participation (participation_name,participation_email,participation_number,participation_password,participation_password1,participation_ramz)
		VALUES ('".$name1."','".$email1."','".$number1."','".$password1."','".$password11."','".$ramz1."')
	";

		$r = mysqli_query($conn,$stmt);
		if($r)
		{

			   // function pass_v() {
      //                         global $error;
      //                         if ((isset($_POST['password']) and $_POST['password'] != null)
      //                         and (isset($_POST['password1']) and $_POST['password1'] != 
      //                         null)) {
      //                         if (preg_match('/^([a-zA-Z0-9]){6,20}$/', $_POST['password']))
      //                         {if ($_POST['password'] != $_POST['password1']) {
      //                          $error="كلمة المرور غير متطابقة";
      //                         return false;
      //                         } else {
      //                         return true;
      //                         }
      //                      } else {
      //                       $error="
      //                      يرجى كتابة كلمة مرور تحتوي على حروف إنجليزية كبير ة أو اضغير ة أو أرقام أو 
      //                      خليط منهم فقط وأن يكون طول كلمة المرور من 6 إلى 20 عنصر";
      //                      return false;
      //                      }
      //                      } else {
      //                      	$error="يرجى ملئ حقول كلمة المرور" ;
      //                      return false;
      //                        }
      //                        }


           echo "<div class='susccess'> تم  الاشتارك بنجاح </div>"; echo "
	<script>
		let timeout =setTimeout(function(){
			 window.location = \"participation.php\" 
		},5000)
		 
	    </script>";


		}

		else
		{
			echo "Data Not Inserted";
		}

}
	

?>













			<!-- Main -->
				<section id="main" class="container medium">
					<header>
						<h2>اشتراك</h2>
						<p> Skip Link مرحبا بكم في موقع </p><br>
						الرجاء تسجيل الدخول باوراق اعتماد صالحة
					</header>
					<div class="box">
						<form method="POST" action="#" dir="rtl">
							<div class="row gtr-50 gtr-uniform">

								<div class="col-12">
								<label>الاسم كامل</label>
									<input type="text" required name="name" id="name" value="" placeholder="الاسم كامل" />
								</div>
								<div class="col-12">
								<label>عنوان البريد الالكتروني </label>
									<input type="email" required name="email" id="email" value="" placeholder="عنوان البريد الالكتروني" />
								</div>
								<div class="col-12">
								<label>رقم تلفونك </label>
									<input type="text" required name="number" id="number" value="" placeholder="رقم تلفونك  " />
								</div>
								<div class="col-12">
								<label>ادخل كلمة المرور </label>
									<input type="password" required name="password" id="password" value="" placeholder="ادخل كلمة المرور " />
								</div>
								<div class="col-12">
								<label>تاكيد كلمة المرور </label>
									<input type="password" required name="password1" id="password1" value="" placeholder=" تاكيد كلمة المرور " />
								</div>
								<label class="label1"> 
								<?php 
								
								echo rand(100000,1000000);
								
								 ?>
								 	
								 </label>
								<div class="col-12">
									<input type="text" required name="ramz" id="ramz"  placeholder="ادخل الرمز " />
								</div>
							</div><br><br>
							<center>
									<div  id="code9" >
								<button type="submit">اشتراك</button>
								</div>
								</center>
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
						<li>&copy;جميع الخقوق محفوظة لدي Skip Link</li>

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