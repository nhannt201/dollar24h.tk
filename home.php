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
<?php echo $ads3;?>
</head>
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
		<?php echo $adsone2;?>

 <div class="loginform-open">
  <a href="#"><i class="fa fa-list-alt fa-lg"></i> Hệ thống nhận Dollar miễn phí</a>
</div>
		<center><?php
		include 'cauhinh.php';

			if (isset($_GET["get"])) {
		//lấy thông tin từ các form bằng phương thức POST
		
		//$email = $_GET["email"];
		$emailpaypal = $_GET["emailpaypal"];
		$email = $emailpaypal;
		$lastmod = date('Y-m-d');
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($emailpaypal == "") {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
					echo '        <meta http-equiv="refresh" content="1;url=/">';

  			}else{
				   $filename = 'emmaill/'.$emailpaypal.'.opkavn';
				   
				      $date2 = 'today.opkavn';
					    
	  $apiKey = 'b31695e7b8889f2c9fe1de12eafc4255';
// Your user id
$uId = 12189171;
 $ip = $_SERVER['REMOTE_ADDR'];
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }
 $my_file2111 =  "omato/".$ip.".ip";
if (file_exists($my_file2111)) {
	$myfileo = fopen($my_file2111, "r") or die("Error....");
$ipget =  fgets($myfileo);
$emaili = str_replace("%40","@",$emailpaypal);
if ($ipget == $emailpaypal) {
	$ppplll = "yes";
} else {
	echo "<br><b>IP này đã được liên kết với tài khoản khác!</b>";
	$ppplll = "no";
}
fclose($myfileo);
} else {
	
	
$handle241 = fopen($my_file2111, 'w') or die('Error...'); //implicitly creates file
fwrite($handle241,$emailpaypal);
fclose($handle241);
}
if ($ppplll == "yes") {

if (file_exists($filename)) {
    //echo "Tài khoản Email này đã được";
		

} else {
   // echo "Không tồn tại";

   $my_file21 = $filename;
$handle21 = fopen($my_file21, 'w') or die('Có lỗi xảy ra không thể đăng nhập!'); //implicitly creates file
fwrite($handle21, '0.0000000');
fclose($handle21);
  $filename15 = 'md55/'.md5($emailpaypal).'.opkavn';
  
 $my_file219 = $filename15;
$handle219 = fopen($my_file219, 'w') or die('Có lỗi xảy ra không thể đăng nhập!'); //implicitly creates file
fwrite($handle219, $emailpaypal);
fclose($handle219);
	if (isset($_GET["ref"])) {
					$ref = $_GET['ref'];
					if ($ref == 'Admin') {
						
					} else {
						$tiencong = md5($emailpaypal);
						  $filename19 = 'md55/'.$tiencong.'.opkavn';
						  	 $filename20 = 'md55/'.$ref.'.opkavn';
						if (file_exists($filename19)) {
							
							if (file_exists($filename20)) {	 
							$myfile000 = fopen($filename20, "r") or die("Có lỗi xảy ra!");
		                    $mailtiencong = fgets($myfile000);
							if (md5($mailtiencong) == $tiencong) {
								
							} else {
								 $filename201 = 'emmaill/'.$mailtiencong.'.opkavn';
                                 $myfile0001 = fopen($filename201, "r") or die("Có lỗi xảy ra!");
                                 $mailtiencong2 = fgets($myfile0001);
								//////
								$my_file214 =  $filename201;
                                $handle214 = fopen($my_file214, 'w') or die('Error...'); //implicitly creates file
                                fwrite($handle214,$mailtiencong2 = $mailtiencong2 + $reff);
                                fclose($handle214);
                               // echo 'hfgh'.$mailtiencong2;
								/////
		                     fclose($myfile000);
							 fclose($myfile0001);
							}
						}
					}
						
					}
					echo '<script>
setTimeout("location.reload()",500);
</script>';
				}

}
				    // thực thi câu $sql với biến conn lấy từ file connection.php
   		
				  // echo "Chúc mừng bạn đã đăng ký thành công";
				 
				  $myfile = fopen($filename, "r") or die("Có lỗi xảy ra!");
				 
				  $dollar = fgets($myfile);
				   echo '<br><h2>Số $ hiện có là: <b>$'.$dollar.'</b></h2><p>';
				  if ($dollar >= 5) {
	 $filename00 = 'thanhtoan/'.$email.'.opkavn';
	$my_file21111 = $filename00;
$handle21111 = fopen($my_file21111, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle21111, 'thanhtoan $2');
fclose($handle21111);
$my_file211 =  $filename;
$handle24 = fopen($my_file211, 'w') or die('Error...'); //implicitly creates file
fwrite($handle24,'0.000000');
fclose($handle24);
echo '<br> Một yêu cầu thành toán tự động đã được gửi. Số tiền sẽ được gửi vào tài khoản bạn vào chủ nhật hàng tuần<br>';
} else {
	
}
fclose($myfile);
echo 'Số quảng cáo hiện có là 1 <p> Một Link nhận được đến '.($luotclick + 1).' lần! <p>';


/////
$myfile01 = fopen($date2, "r") or die("Có lỗi xảy ra không thể nhận quảng cáo!");
$so0 = fgets($myfile01);
if ($lastmod == $so0) {
	
} else {
	remove_allFile("obamadollar");
	remove_allFile("omato");
	  $my_file2112 = $date2;
$handle2112 = fopen($my_file2112, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle2112, $lastmod);
fclose($handle2112);
echo '<script>
setTimeout("location.reload()",500);
</script>';
}
fclose($myfile01);


/////
$banner = md5($emailpaypal.'&'.$lastmod.'&'.$dollar);
$maso = strlen($banner);
  $filename2 = 'obamadollar/'.$banner.'.opkavn';
  //////
  $my_file211 = $filename2;
$handle211 = fopen($my_file211, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle211, $lastmod);
fclose($handle211);

/////
 
  $my_file2112 = $date2;
$handle2112 = fopen($my_file2112, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle2112, $lastmod);
fclose($handle2112);
//////
////
 $filename3 = 'omato/'.$maso.'-'.$banner.'.opkavn';
$my_file2111 = $filename3;
$handle2111 = fopen($my_file2111, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle2111, $emailpaypal);
fclose($handle2111);
///
$filename4 = 'omato/'.$email.'.opkavn';
if (file_exists($filename4)) {
	$myfile0 = fopen($filename4, "r") or die("Có lỗi xảy ra không thể nhận quảng cáo!");
$so = fgets($myfile0);
if ($so > $luotclick) {
	echo 'Hết quảng cáo hôm nay!<p>';
	
} else {
	$urll = "http://".$_SERVER['SERVER_NAME']."/ads.php?banner=".$banner;
	
	$url1 = get_by_curl('http://ouo.io/api/8sxwwpWu?s='.$urll);
	$url2 = $url1;
	$url3 = get_by_curl('http://adfoc.us/api/?key=4dbd33a142c4feac201a6ab5a7bfa172&url='.$url1);
	$url4 = adfly($url3, $apiKey, $uId);
	$url5 = "<a href='".get_by_curl('http://shink.in/stxt/0/id/86339/auth_token/NQJV1c/url/'.$url4)."'>Click vào đây nhận $".$giatienhomnay."!</a><p>";
	echo $url5;

}
fclose($myfile0);
} else {
$my_file21111 = $filename4;
$handle21111 = fopen($my_file21111, 'w') or die('Có lỗi xảy ra không thể nhận quảng cáo!'); //implicitly creates file
fwrite($handle21111, '0');
fclose($handle21111);
}
echo '<b>Một ngày :$'.$giatienhomnay.' * '.($luotclick + 1).' = $'.($giatienhomnay * ($luotclick + 1)).'</b><p>';
echo '<b>Một tuần : $'.($giatienhomnay * ($luotclick + 1)).' * 7 = $'.(($giatienhomnay * ($luotclick + 1)) * 7).'</b><p>';
echo '<b>Một tháng : $'.($giatienhomnay * ($luotclick + 1)).' * 30 = $'.(($giatienhomnay * ($luotclick + 1)) * 30).'</b><p>';
echo '<b>Một năm : $'.($giatienhomnay * ($luotclick + 1)).' * 365 = $'.(($giatienhomnay * ($luotclick + 1)) * 365).'</b><p>';
////
echo "<br>Yêu cầu thanh toán tự động khi bạn đủ 2$ <p> Không hiện quảng cáo? Nhấn F5 thử lại!<br>";
echo "<br>Link giới thiệu của bạn là : <b><a href='http://".$_SERVER['SERVER_NAME']."/?r=".md5($emailpaypal)."'>http://".$_SERVER['SERVER_NAME']."/?r=".md5($emailpaypal)."</a></b> <p> Mỗi giới thiệu là $".$reff;
//echo "<br>Số giới thiệu của bạn là: ".$reff;

echo "<br><b>Giá click thay đổi theo mức độ tích cực của thanh viên tham gia</b>";

//var_dump( bucksapi( "http://google.com", '0dcf3ee6147e439f', 'me09112001' ) );
//$data_kirim=array(
  //  'user'=>'me09112001',  //my username
    //'apiPassword'=>'0dcf3ee6147e439f',  //my API password
    //"originalLink"=>"http://google.com",  //the URL that need to be shorted
    //"adType"=>2,  //paid links
    //"contentType"=>1,   //not an adult content
    //"domain"=>"qqc.co"  //target domain, a lot of possibility here, the default is: linkbucks.com 
//);

//call linkbucks API
//$url='https://www.linkbucks.com/api/createLink/single';

//$returned_data=curl_post($url, json_encode($data_kirim));
//$parsed_data=json_decode($returned_data);

//simple error checking
//if (!empty($parsed_data->link)) {
  //  echo "This is your short URL : ".$parsed_data->link;
//} else {
  //  echo "Something wrong! ".$parsed_data->errorDescription;
//}


}

			  }
	} else {
		echo '        <meta http-equiv="refresh" content="1;url=/">';
	}
	?><br><br><h2>Quảng cáo:</h2><p>Không hiện Link nhận Dollar Free? Nhấn F5 tải lại trang!<p><script src="//www.adsptp.com/15204-468x60.js"></script>
<script src="//www.adsptp.com/15204-468x60.js"></script>
</center>
		        <script src="js/index.js"></script>
<script type="text/javascript" src="https://ylx-3.com/slider.php?section=General&pub=711252&ga=g&side=left&https=1"></script>
<script type="text/javascript" src="https://ylx-3.com/slider.php?section=General&pub=711252&ga=g&side=right&https=1"></script>
	</body>
	</html>
	<?php
	function remove_allFile($dir){
  if($handle = opendir("$dir")){
    while (false !== ($item = readdir($handle))){
     if($item != "." && $item != ".."){
       if(is_dir("$dir/$item")){
         remove_directory("$dir/$item");
       }else{
     unlink("$dir/$item");
   //echo"removing $dir/$item<br>\n";
     }
   }
  }
  closedir($handle);
 }
}

	function get_by_curl($url){
        //echo "curl:url<pre>".$url."</pre><BR>";
    $options = array(
        CURLOPT_RETURNTRANSFER => true,     // return web page
        CURLOPT_HEADER         => false,    // don't return headers
        CURLOPT_ENCODING       => "",       // handle all encodings
        CURLOPT_USERAGENT      => "spider", // who am i
        CURLOPT_AUTOREFERER    => true,     // set referer on redirect
        CURLOPT_CONNECTTIMEOUT => 15,      // timeout on connect
        CURLOPT_TIMEOUT        => 15,      // timeout on response
        CURLOPT_MAXREDIRS      => 10,       // stop after 10 redirects
		CURLOPT_SSL_VERIFYPEER => false,
 
    );
 
    $ch      = curl_init($url);
    curl_setopt_array( $ch, $options );
    $content = curl_exec( $ch );
    $err     = curl_errno( $ch );
    $errmsg  = curl_error( $ch );
    $header  = curl_getinfo( $ch,CURLINFO_EFFECTIVE_URL );
    curl_close( $ch );
 
    //$header['errno']   = $err;
   // $header['errmsg']  = $errmsg;
 
    //change errmsg here to errno
    if ($errmsg)
    {
        echo "";
    }
    return $content;
}
	?>
	<?php
function adfly($url, $key, $uid, $domain = 'adf.ly', $advert_type = 'int')
{
  // base api url
  $api = 'http://api.adf.ly/api.php?';

  // api queries
  $query = array(
    'key' => $key,
    'uid' => $uid,
    'advert_type' => $advert_type,
    'domain' => $domain,
    'url' => $url
  );

  // full api url with query string
  $api = $api . http_build_query($query);
  // get data
  if ($data = file_get_contents($api))
    return $data;
}
//function to POST data using cURL in PHP
function curl_post($url, $data, $ip="", $ref="", $ua="") {
    //initiate cURL
    $ch=curl_init($url);
    
    //set referer only if stated by user
    if ($ref!="") {
        curl_setopt($ch, CURLOPT_REFERER, $ref);
    }
    
    //set IP interface if needed (for multi-IP server)
    if ($ip!="") {
        curl_setopt($ch, CURLOPT_INTERFACE, $ip);
    }
    
    //set user agent if stated by user
    if ($ua!="") {
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    }
    
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
 
    $response=curl_exec($ch);
    return $response;
}

?>