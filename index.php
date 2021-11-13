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

</script></head>
<body>
   <!-- Anti-Adblock V2 -->
<!-- By D3xt3r -->
<!-- Please Do Not Remove Tag -->
<!-- D3xt3r.com -->

<style type="text/css">
#blockblockA {position:absolute;top:0px;left:0px;background-color:#000000;width:100%;height:100%;}
#blockblockA td {text-align:center;width:100%;height:100%;}
#blockblockA td p {font: bold 20px Verdana;color:#ffffff;}
#blockblockA td div {font: bold 13px Verdana;color:#ffffff;}
#blockblockB {visibility:invisible;display:none;}
#linkA {font: bold 13px Verdana;color:#ffffff;}
</style>

<noscript>
<style type="text/css">
#blockblockA {visibility:invisible!important;display:none!important;}
#blockblockA td {visibility:invisible!important;display:none!important;}
#blockblockA td p {visibility:invisible!important;display:none!important;}
#blockblockB {visibility:visible!important;display:block!important;}
</style>
</noscript>

<script type="text/javascript" src="/advertisement.js"></script>

<table id="blockblockA"><tr><td>

<!-- DISPLAY HTML CODE HERE -->

<p>Chúng tôi dùng tiền từ quảng cáo để chi trả cho bạn. Vui lòng tắt Ad-Block để tiếp tục!</p>

<!-- DISPLAY HTML CODE HERE -->

<!-- Do Not Remove Unless Purchased Please 
<div id="linkA" align="right">By <a href="http://d3xt3r.com/">D3xt3r</a></div>
<!-- Do Not Remove Unless Purchased Or Testing Please -->

</td></tr></table>

<span id="blockblockB">
   <div class="loginform-open">
  <a href=""><i class="fa fa-list-alt fa-lg"></i> Đăng nhập hệ thống</a>
</div>
<center>
	<form action="home.php" method="get">
		<table>
			<tr>
				<td colspan="2"><h2>Bạn đã sẵn sàng nhận $ free?</h2></td>
			</tr>	
			
			
			
			<tr>
				<td>Email PayPal:</td>
				<td><input type="email" id="emailpaypal" name="emailpaypal" placeholder="Địa chỉ Email Paypal của bạn" ></td>
			</tr>
			
			<tr>

				<td><input type="hidden" id="ref" name="ref" placeholder="Người đã giới thiệu bạn!" value="<?php if (isset($_GET["r"])) { echo $_GET["r"];} else { echo 'Admin';}?>"></td>
			</tr>
			
			<tr>
				<td colspan="2" align="center"><input type="submit" name="get" value="GetDollar!"></td>
			</tr>
 
		</table>
		
	</form>
	
	<?php
	echo $ads2;
	echo $ads3;
	?>
</body>
</html>
