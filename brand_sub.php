<?php include("admin/_inc.php"); include("admin/products/products_config.php");require 'subPages.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php include '_keyword.php';?>
<title>恆源眼鏡品牌</title>
 <link rel="stylesheet" href="css/style.css" type="text/css" /> 
 <link rel="stylesheet" href="css/sub.css" type="text/css" /> 
   <link href="css/ibanner.css" rel="stylesheet" />
        <link href="css/lightbox.css" rel="stylesheet" type="text/css"/>
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
    <script type="text/javascript">
		$(document).ready(function(){	  
		/*$(".rfloat .rfloat_btn").each(function(index){
		  $(this).bind("click",function(){
			  var curvar = $(".rfloat_btn").html();
			  if(curvar == '展开'){
				$(this).html('收起');
				 $('.rfloat').animate({right:'0'});
			  }else{
				$(this).html('展开');
                $('.rfloat').animate({right:'-354px'});
			  }
	    });		
			 });*/
			  $(".brand_l ul li").hover(function(){
				$(this).find(".tclogo").show();
	          },function(){
				 $(this).find(".tclogo").hide();
				  }
			  );		
	  })
</script>
<?php include '_GA.php';?>
</head>

<body>
     <div class="header">
      <div class="headerC">
    	<div class="logo"><a href="index.php"><img src="images/logo2.png"></a></div>
        <!--Search S -->
          <form name="brandsub_form" id="brandsub_form" method="post" action="search.php">
          <div id="Search">
          <div class="SearchForm"><input name="key_word" type="text" value="" placeholder="請輸入關鍵字" ></div>
          <div class="SearchBt"><input name="buttom" type="button"></div>
          </div>
          </form>
        <!--search E -->
      </div>  
    </div>
    <div class="nav">
    	<div class="navc">
        	<ul>
            	<li><a href="about.php"><span>關於我們</span><em>About us</em></a></li>
                <li><a href="news.php"><span>最新消息</span><em>Latest News</em></a></li>
                <li><a href="brand.php"><span>眼鏡品牌</span><em>Eyewear brand</em></a></li>
                <li style="width:160px"><a href="order.php"><span>訂購說明</span><em>Order instructions</em></a></li>
                <!--<li class="cur"><a href="brand.php"><span>眼鏡品牌</span><em>Eyewear brand</em></a></li>-->
                <li><a href="contact.php"><span>聯繫我們</span><em>contact Us</em></a></li>
               <li><a href="https://www.facebook.com/pages/%E6%81%86%E6%BA%90%E7%9C%BC%E9%8F%A1/136809096352239?fref=ts" target="_blank"><span>FACEBOOK</span><em>facebook</em></a></li>
                <li><a href="http://blog.xuite.net/lilylu1978/twblog" target=_blank><span>部落格</span><em>blog</em></a></li>
            </ul>
        </div>
    </div>
    <div class="banner" style="display:none;">
        <div id="full-screen-slider">
                  <ul id="slides">
                      <li style="background:url('ad/news_banner.jpg') no-repeat center top"><a href="" target="_blank"></a></li>
                      <li style="background:url('ad/banner.jpg') no-repeat center top"><a href="" target="_blank"></a></li> 
                  </ul>
              </div>
    </div>
<?php
if(!intval($_GET['page']))
{
   $page=1;
   $startno=0;
}
elseif(intval($_GET['page']))
{
   $page=intval($_GET['page']);
   $startno = (intval($_GET['page'])-1) * $This_Default_ShowNum_brand;
}

//商品列表
if($_GET['kind_id']){
	 $sqlstr="SELECT COUNT(*)FROM `product` WHERE `del` != 'Y' and `kind_status` = 'Y' and `showup_switch` = 'Y' and `kind_id` = '".$_GET['kind_id']."'";
	 $DataSum = $g_db->getOne($sqlstr);
	
	 $sqlstr="SELECT *FROM `product` WHERE `del` != 'Y' and `kind_status` = 'Y' and `showup_switch` = 'Y' and `kind_id` = '".$_GET['kind_id']."' ORDER BY `sort` ASC , `product_id` DESC LIMIT ".$startno.",".$This_Default_ShowNum_brand."";
	 $DataList = $g_db->getAll($sqlstr);
	 
	 $sqlstr = "SELECT * FROM `product_kind` WHERE `del` != 'Y' and `showup_switch` = 'Y' and `kind_id` = '".$_GET['kind_id']."'";
	 $DataTitle = $g_db->getRow($sqlstr);
}elseif($_GET['Main_kind_id']){
	 //子分類ids
	 $SubKindIDs = array();
	 //取主分類下所有的子分類ID
	 $sqlstr = "SELECT * FROM `product_kind` WHERE `parent` = '".intval($_GET['Main_kind_id'])."'";
	 $Data_sub_kindID = $g_db->getAll($sqlstr);
	 
	 foreach($Data_sub_kindID as $key => $val){
	 	array_push($SubKindIDs,$val['kind_id']);
	 }
	 
	 $sqlstr="SELECT COUNT(*) FROM `product` WHERE `del` != 'Y' and `kind_status` = 'Y' and `showup_switch` = 'Y' and `kind_id` in ('".implode("','",$SubKindIDs)."')";
	 $DataSum = $g_db->getOne($sqlstr);
	 
	 $sqlstr="SELECT * FROM `product` WHERE `del` != 'Y' and `kind_status` = 'Y' and `showup_switch` = 'Y' and `kind_id` in ('".implode("','",$SubKindIDs)."') ORDER BY `sort` ASC , `product_id` DESC LIMIT ".$startno.",".$This_Default_ShowNum_brand."";
	 $DataList = $g_db->getAll($sqlstr);
	 
	 $sqlstr = "SELECT * FROM `product_kind` WHERE `del` != 'Y' and `showup_switch` = 'Y' and `kind_id` = '".intval($_GET['Main_kind_id'])."'";
	 $DataTitle = $g_db->getRow($sqlstr);
 }

//分類列表-字母
	 $sqlstr = "SELECT SUBSTRING(UPPER(`directory`),1,1) as Ctitle FROM `product_kind` WHERE 1 and `del` != 'Y' and `showup_switch` = 'Y' group by SUBSTRING(UPPER(`directory`),1,1)";
	 $Ltrlist = $g_db->getAll($sqlstr);
?>
    <div class="clear"></div>
    <div class="content">
        <div class="about">
            <h2 class="tit1"><?php echo $DataTitle['directory'];?></h2>
            <div class="clear"></div>
            <div class="brand">
            <div class="brand_l">
                	<h3><a href="<?php echo "brand.php?concentration=Y"; ?>">精選商品concentration</a></h3>
                    <?php 
					foreach($Ltrlist as $lkey => $lval){
						//分類第一層
						$sqlstr = "select * from product_kind where `del` != 'Y' and `showup_switch` = 'Y' and `parent`=0 and `directory` like '".$lval['Ctitle']."%' order by directory";
						$CateList = $g_db->getAll($sqlstr);
					?>
                    <h4><?php echo $lval['Ctitle']?></h4> 
                    <ul>
                    	<?php
                        foreach($CateList as $ckey => $cval){
							//分類第二層
							$sqlstr = "SELECT *FROM `product_kind` WHERE `del` != 'Y' and `showup_switch` = 'Y' and `parent` = '".$cval['kind_id']."'";
							$Data_kindID = $g_db->getAll($sqlstr);
						?>
                    	<li>
                         <a href="brand_sub.php"><?php echo $cval['directory'];?></a>
                         <div class="tclogo">
                            	<h6><a href="<?php echo "brand_sub.php?Main_kind_id=".$cval['kind_id'].""; ?>"><?php echo $cval['directory'];?></a></h6>
                                <dl>
                                <?php 
								for($i = 0; $i < sizeof($Data_kindID); $i++){ ?>
                                	<!--<dd><a href="brand_sub.php">SunglassesGlassesGlasses</a></dd>
                                    <dd><a href="brand_sub.php">Glasses</a></dd>-->
                                    <dd><a href="<?php echo "brand_sub.php?kind_id=".$Data_kindID[$i]['kind_id'].""; ?>"><?php echo $Data_kindID[$i]['directory'];?></a></dd>
                                <?php }?>
                                </dl>
                            </div>
                        </li>
                        <?
						}
						?>
                    </ul>
                    <?php
					}
                    ?>
                </div>
                <div class="brand_r">
                	<div class="brand_rtit"><a href="brand.php">home</a>
                    <?php
					//顯示主分類 
					if($_GET['Main_kind_id'])
					{
					   $sqlstr = "SELECT *FROM `product_kind` WHERE `kind_id` = '".intval($_GET['Main_kind_id'])."'";
					   $data_main_brand = $g_db->getRow($sqlstr);
					
					?>
                     > <?php echo $data_main_brand['directory'];?></div>
                    <?php }?>
                    <?php
					//顯示主分類&&次分類  
					if($_GET['kind_id'])
					{
					   $sqlstr = "SELECT *FROM `product_kind` WHERE `kind_id` = '".intval($_GET['kind_id'])."'";
					   $data_sub = $g_db->getRow($sqlstr);
					   $sqlstr = "SELECT *FROM `product_kind` WHERE `kind_id` = '".$data_sub['parent']."'";
					   $data_main_brand = $g_db->getRow($sqlstr);
					?>
                     > <a href="<?php echo "brand_sub.php?Main_kind_id=".$data_main_brand['kind_id']."";?>"><?php echo $data_main_brand['directory'];?></a> >  <?php echo $data_sub['directory'];?></div>
                    <?php }?>
                    
                    <div class="clear"></div>
                    <div class="brand_rc">
                    	<ul>
                        <?php
						for($i = 0; $i < sizeof($DataList); $i++){ 
						
						    echo "<li><a href=\"javascript:void(0)\" data-featherlight=\"#fl2\" onclick=\"$('.lightbox').attr('src','brand_page.php?id=".$DataList[$i]['product_id']."')\"><span></span><img src=\"".Url_Upload.$DataList[$i]['list_pic']."\" width=\"232\" height=\"202\"></a></li>";
						
						}
						?>
                        	<!--<li><a href="javascript:" data-featherlight="#fl2"><span></span><img src="ad/brand_ad1.png"></a></li>-->
                        </ul>
                    </div>
             <div class="clear"></div> 
             <!--<div class="page">
                <a href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a class="page_bg">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
          </div>-->
          <?php $subPages=new SubPages($This_Default_ShowNum_brand,$DataSum,$page,5,"brand_sub.php?kind_id=".intval($_GET['kind_id'])."&Main_kind_id=".intval($_GET['Main_kind_id'])."&page=",2); ?>
                </div>
            </div>
        </div>
    </div>  
    <? $brand_sub=1; require 'footer.php';?>

