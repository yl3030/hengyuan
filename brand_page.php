<?php include("admin/_inc.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Eyewear brand</title>
 <link rel="stylesheet" href="css/style.css" type="text/css" /> 
 <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" />
 <link rel="stylesheet" href="css/sub.css" type="text/css" /> 
   <link href="css/brand.css" rel="stylesheet" />
 <!--[if lte IE 6]><script type="text/javascript" src="js/PNGFix.min.js"></script><script>PNGFix.fix('*');</script><![endif]-->
  <script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
   <script src="js/simplefoucs.js" type="text/javascript"></script>
   <script type="text/javascript" src="js/parallax.js"></script>
   <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
   <script type="text/javascript" src="js/jquery.mu.image.resize.js"></script>
   <script>
   </script>
   <script type="text/javascript">
$(document).ready(function(){
	$('#par').parallax({distance: 4 });
	$('.scroll-pane').jScrollPane();
	$('.scroll-pane2').jScrollPane();
	$('.pop-box').hide();
}); 
</script>
<?php include '_GA.php';?>
</head>
<?php
  
  if($_GET['id'])
  {
  $id     = $_GET['id'];
  $sqlstr = "SELECT *FROM `product` WHERE `product_id` = '".$id."'";
  $Data   = $g_db -> getRow($sqlstr);
  }
?>
<body>
    <div class="brand_page">
    	<div class="brand_banner">
          <div id="focus">
        <ul>
            <?php if($Data['brand-banner_1'] && $Data['brand-banner_1']!=""){?>
            <li><a href="" target="_blank"><img src="<?php echo Url_Upload.$Data['brand-banner_1'];?>" <?php echo "alt=\"".$DataList[$i]['brand-banner_1']."\" class=\"size-A\">";?>/></a></li>
            <?php }?>
            <?php if($Data['brand-banner_2'] && $Data['brand-banner_2']!=""){?>
            <li><a href="" target="_blank"><img src="<?php echo Url_Upload.$Data['brand-banner_2'];?>" <?php echo "alt=\"".$DataList[$i]['brand-banner_2']."\" class=\"size-A\">";?>/></a></li>
            <?php }?>
            <?php if($Data['brand-banner_3'] && $Data['brand-banner_3']!=""){?>
            <li><a href="" target="_blank"><img src="<?php echo Url_Upload.$Data['brand-banner_3'];?>" <?php echo "alt=\"".$DataList[$i]['brand-banner_3']."\" class=\"size-A\">";?>/></a></li>
            <?php }?>
        </ul>
    </div>
        </div>
        <div class="brand_pagec">
        	<h2><?php echo $Data['product_name'];?></h2>
            <div class="brand_info">
            	<p>型號：<?php echo $Data['model'];?></p>
                <p>尺寸：<?php echo $Data['size'];?></p>
                <p>規格：<?php echo $Data['format'];?></p>
                <p>顏色：<?php echo $Data['color'];?></p>
            </div>
            <div class="prodetail pop-content pop-pr scroll-pane2">
            	<div class="article">
                	<p><?php echo $Data['message'];?></p>
                </div>
                <div class="proimg">
                	<ul>
                    
                    <?php if($Data['pic_1'] && $Data['pic_1']!=""){?>
                    	<li><img src="<?php echo Url_thumb.$Data['pic_1'];?>" width="270" height="270"></li>
                    <?php }?>
                    
                    <?php if($Data['pic_2'] && $Data['pic_2']!=""){?>
                        <li><img src="<?php echo Url_thumb.$Data['pic_2'];?>" width="270" height="270"></li>
                    <?php }?>    
                    
                    <?php if($Data['pic_3'] && $Data['pic_3']!=""){?>
                        <li><img src="<?php echo Url_thumb.$Data['pic_3'];?>" width="270" height="270"></li>
                    <?php }?>
                    
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
