<?php require 'admin/_inc.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php include '_keyword.php';?>
<title><?php if($index==1) echo"恆源眼鏡-雷朋專賣店-蔡司專業眼鏡店-兒童眼鏡";
             elseif($about==1) echo "關於恆源眼鏡-品牌經營 專業服務的信念";
             elseif($order==1) echo "訂購須知-恆源眼鏡";
			 elseif($news==1) echo "最新消息-恆源眼鏡";
			 elseif($brand==1) echo "眼鏡品牌-恆源眼鏡";
			 elseif($brand_sub==1) echo "眼鏡品牌-恆源眼鏡";
			 elseif($contact==1) echo "聯繫我們-恆源眼鏡";
	   ?></title>
 <link rel="stylesheet" href="css/style.css" type="text/css" /> 
 <link rel="stylesheet" href="css/sub.css" type="text/css" /> 
   <link href="css/ibanner.css" rel="stylesheet" />
   <?php if($brand==1 or $brand_sub==1) echo "<link href=\"css/lightbox.css\" rel=\"stylesheet\" type=\"text/css\">";?>
 <!--[if lte IE 6]><script type="text/javascript" src="js/PNGFix.min.js"></script><script>PNGFix.fix('*');</script><![endif]-->
 <script type="text/javascript">
 
var __lc = {};
__lc.license = 4401491;

(function() {
	var lc = document.createElement('script'); lc.type = 'text/javascript'; lc.async = true;
	lc.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.livechatinc.com/tracking.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(lc, s);
})();
</script>
  <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/banner.js"></script>
<!--FB分享-->
<script>
var fbhtml_url=window.location.toString();
</script>
<!--推特分享-->
<!--<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>-->
<script type="text/javascript">
function formReset()
  {
  document.getElementById("EditForm").reset()
  }
</script>
<!-- GA -->
<!--<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-35988298-5', 'auto');
  ga('send', 'pageview');

</script>-->
<?php include '_GA.php';?>
</head>

<body>
  <div class="header">
    <div class="headerC">
      <img class="mobile-icon menu" src="./images/menu.svg" alt="" />
      <div class="logo">
        <a href="index.php"><img src="images/logo2.png" /></a>
      </div>
      <!--Search S -->
      <form
          name="header_form"
          id="header_form"
          method="post"
          action="search.php"
        >
        <div id="Search">
          <div class="SearchForm">
            <input
                name="key_word"
                type="text"
                value=""
                placeholder="請輸入關鍵字"
            />
          </div>
          <div class="SearchBt"><input name="buttom" type="button" /></div>
        </div>
      </form>
      <img
          class="mobile-icon search-icon"
          src="./images/search_mobile.svg"
          alt=""
      />
      <div class="mobile-search-form">
        <input type="text" placeholder="請輸入關鍵字" />
      </div>

      <!--search E -->
    </div>
  </div>
  
    <div class="nav">
    	<div class="navc">
        	<ul>
            	<li><a href="about.php" title="關於恆源眼鏡"><span>關於我們</span><em>About us</em></a></li>
                <li><a href="news.php" title="最新消息"><span>最新消息</span><em>Latest News</em></a></li>
                <li><a href="brand.php" title="眼鏡品牌"><span>眼鏡品牌</span><em>Eyewear brand</em></a></li>
                <li title="訂購說明"><a href="order.php"><span>訂購說明</span><em>Order instructions</em></a></li>
                <li><a href="contact.php" title="聯繫我們"><span>聯繫我們</span><em>contact Us</em></a></li>
                <li><a href="https://www.facebook.com/pages/%E6%81%86%E6%BA%90%E7%9C%BC%E9%8F%A1/136809096352239?fref=ts" target="_blank"><span>Facebook</span><em>Facebook</em></a></li>
                <li><a href="http://blog.xuite.net/lilylu1978/twblog" target=_blank><span>部落格</span><em>blog</em></a></li>
            </ul>
        </div>
    </div>
    <?php if($index==1){?>
    <div class="banner">
        <div id="full-screen-slider">
                  <ul id="slides">
                      <li style="background:url('ad/banner.jpg') no-repeat center top"><a href="" target="_blank"></a></li>
                      <li style="background:url('ad/news_banner.jpg') no-repeat center top"><a href="" target="_blank"></a></li>
                  </ul>
              </div>
    </div>
    <?php }?>