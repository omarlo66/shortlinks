<?php
 include '../dataBases/conn.php';
if($_POST)
{
	$rmsha   =  $_POST['numberd'];

$sql = "
	UPDATE sana SET 
	number=$rmsha 
	WHERE id = 1
	";

$r = mysqli_query($conn,$sql);

if($r)
{
    echo "تم تعديل بيانات السنة بنجاح";

}
else
{
	echo "لم يتم تعديل بيانات السنة";
}}
?>


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	
	<title>تغيير السنة</title>
</head>
<body dir="rtl">
<div class="sanaa">

<form action="#" method="POST">
<h3 class="center title">تعديل بيانات السنة</h3>

       <?php
   

        $stmt = "SELECT * FROM sana ORDER BY id DESC" ;

      $r = mysqli_query($conn,$stmt);
      $rows = mysqli_num_rows($r);

       if($rows > 0){
	while ($row = mysqli_fetch_assoc($r)) 
	{
		?>
		<br><br>
		<input type="number" name="numberd"   value="<?php echo $row['number']; ?>">
	<?php
	}
}
?>
<input type="submit" value="تعديل ">
</form></div>
</body>
</html>
