<?php include 'cauhinh.php';
?>
<html>
<head>
    <meta charset="UTF-8" />
	<title>Dollar24h - Make Dollar Free</title>
	
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

        <link rel="stylesheet" href="css/style.css">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80502987-4', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body onLoad="setTimeout('self.close()',2000)">
<?php echo $adsone; ?>
<center>
<?php


	if (isset($_GET["banner"])) {
		
		$banner = $_GET["banner"];
		$maso= strlen($banner);
		$filename = 'obamadollar/'.$banner.'.opkavn';
		 
		if (file_exists($filename)) {
			
		    $filename3 = 'omato/'.$maso.'-'.$banner.'.opkavn';
			  $myfile2 = fopen($filename3, "r") or die("Có lỗi xảy ra!");
		$email = fgets($myfile2);
			 $filename2 = 'emmaill/'.$email.'.opkavn';
			 
			   $filename4 = 'omato/'.$email.'.opkavn';
			     $myfile20 = fopen($filename4, "r") or die("Có lỗi xảy ra!");
    //echo "Tài khoản Email này đã được";
		  $myfile = fopen($filename2, "r") or die("Có lỗi xảy ra!");
		$dollar = fgets($myfile);
		$solan = fgets($myfile20);
$my_file211 =  $filename4;
$handle24 = fopen($my_file211, 'w') or die('Error...'); //implicitly creates file
fwrite($handle24,$solan = $solan + 1);
fclose($handle24);

	$my_file21 =  $filename2;
$handle21 = fopen($my_file21, 'w') or die('Error...'); //implicitly creates file
fwrite($handle21,$dollar = $dollar + $giatienhomnay);
fclose($handle21);
if ($dollar >= 5) {
	 $filename00 = 'thanhtoan/'.$email.'.opkavn';
	$my_file21111 = $filename00;
$handle21111 = fopen($my_file21111, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle21111, 'thanhtoan $2');
fclose($handle21111);
$my_file211 =  $filename4;
$handle24 = fopen($my_file211, 'w') or die('Error...'); //implicitly creates file
fwrite($handle24,'0.000000');
fclose($handle24);
echo '<br> Một yêu cầu thành toán tự động đã được gửi. Số tiền sẽ được gửi vào tài khoản bạn vào chủ nhật hàng tuần';

} else {
	
}


unlink($filename);
echo "Bạn đã nhận được $".$giatienhomnay."! <br> <a href='/'>Về trang chủ</a>";
		echo '        <meta http-equiv="refresh" content="1;url=http://'.$_SERVER['SERVER_NAME'].'/home.php?emailpaypal='.$email.'&get=GetDollar%21">';
		
fclose($myfile);
fclose($myfile2);
fclose($myfile20);

} else {
   // echo "Không tồn tại";
  
	echo "Link quảng cáo đã hết hạn!";

}
	}
?></center>
	        <script src="js/index.js"></script>

</body>
</html>