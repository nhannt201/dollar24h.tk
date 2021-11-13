<?php
//config dollar24
function f_rand($min=0,$max=1,$mul=10000000){
    if ($min>$max) return false;
    return mt_rand($min*$mul,$max*$mul)/$mul;
}

//so tien nhan dc tu A -> Z cho moi lien rut gon;
	$giatienhomnay = f_rand(0.0018705, 0.0048705);
	//so tien nhan duoc ngau nhien tu A -> Z nhn duoc tu link gioi thieu
	$reff = f_rand(0.0000155, 0.00099);
	//1 luot tuc la 2 lan
	$luotclick = "1";
	
	
	$adsone = '<script src="//www.adsptp.com/15204-468x60.js"></script><br>';
	$adsone2 = '	<script src="//www.adsptp.com/15204-siteunder.js"></script>';
	$ads2 = '<br><br><h2>Quảng cáo (Số tiền quảng cáo này sẽ được trả cho thành viên):</h2><p><script src="//www.adsptp.com/15204-468x60.js"></script>
<script src="//www.adsptp.com/15204-468x60.js"></script><br><br> <!-- Begin BidVertiser code -->
<iframe src="https://ylx-3.com/banner_show.php?section=General&amp;pub=711252&amp;format=728x90&amp;ga=g&amp;https=1" frameborder="0" scrolling="no" width="728" height="90" marginwidth="0" marginheight="0"></iframe>
<!-- End BidVertiser code --> 
<script type="text/javascript">
var include_domains = []; var exclude_domains = []; var account = 7833;

</script>
<script src="https://www.linkarus.com/cdn/v1/keywords/word/add"></script>	</center>
	        <script src="js/index.js"></script>

	   
';

$ads3 = " <!-- PopAds.net Popunder Code for dollar24h.banlait.xyz -->
<script type='text/javascript' data-cfasync='false'>
  var _pop = _pop || [];
  _pop.push(['siteId', 1418993]);
  _pop.push(['minBid', 0]);
  _pop.push(['popundersPerIP', 0]);
  _pop.push(['delayBetween', 0]);
  _pop.push(['default', false]);
  _pop.push(['defaultPerDay', 0]);
  _pop.push(['topmostLayer', false]);
  (function() {
    var pa = document.createElement('script'); pa.type = 'text/javascript'; pa.async = true;
    var s = document.getElementsByTagName('script')[0]; 
    pa.src = '//c1.popads.net/pop.js';
    pa.onerror = function() {
      var sa = document.createElement('script'); sa.type = 'text/javascript'; sa.async = true;
      sa.src = '//c2.popads.net/pop.js';
      s.parentNode.insertBefore(sa, s);
    };
    s.parentNode.insertBefore(pa, s);
  })();
</script>
<!-- PopAds.net Popunder Code End -->";
?>