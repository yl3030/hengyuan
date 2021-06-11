<?php $index=1; include 'header.php';?>
<?php 

//一般列表資訊
$sqlstr   = "SELECT *FROM `news` WHERE `del` != 'Y' and `showup_switch` = 'Y' ORDER BY `create_time_MAX` DESC LIMIT 0,3";
$DataList = $g_db->getAll($sqlstr);

?>
    <div class="clear"></div>
    <div class="content">
        <div class="inews">
            <h2 class="tit1">news</h2>
            <div class="clear"></div>
            <div class="inewsc">
            
             <?php
			 for($i = 0; $i < sizeof($DataList); $i++)
			 {
			 echo "
				  <dl>
					  <dt><a href=\"news.php?news_id=".$DataList[$i]['news_id']."\"><img src='".Url_thumb.$DataList[$i]['pic']."'></a></dt>
					  <dd>
						  <h3><a href=\"news.php?news_id=".$DataList[$i]['news_id']."\">".$DataList[$i]['news_title']."</a></h3>
						  <p></p>
					  </dd>
				  </dl>";
			}
            ?>    
            </div>
        </div>
    </div>
     <div class="clear"></div>
     <div class="ibrand">
     	   <div class="ibrandc" id="tab_container">
             <div class="tab_content" style="display:block" > <a href=""><img src="ad/brand_banner2.jpg"></a></div> 
           	 <div class="tab_content"> <a href=""><img src="ad/brand_banner1.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner3.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner4.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner5.jpg"></a></div>
             <div class="tab_content"> <a href=""><img src="ad/brand_banner6.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner7.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner8.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner9.jpg"></a></div> 
             <div class="tab_content"> <a href=""><img src="ad/brand_banner10.jpg"></a></div>  
           </div>
           <div class="ibrandlist">
            <div class="ibrandlistc">
               <ul>
                	<li class="cur">
                        <a href="brand_sub.php?Main_kind_id=85">
                    	<div class="ibrand_logo"><span></span><img  src="images/brand_logo2.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn2.jpg"></div>
                        </a>

                    </li>
                    <li>
                        <a href="brand_sub.php?Main_kind_id=1">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo1.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn1.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=73">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo3.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn3.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=43">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo4.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn4.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=89">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo5.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn5.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=56">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo6.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn6.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=25">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo7.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn7.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=61">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo8.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn8.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=64">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo9.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn9.jpg"></div>
                        </a>
                    </li>
                    <li>
                    	<a href="brand_sub.php?Main_kind_id=37">
                    	<div class="ibrand_logo"><span></span><img src="images/brand_logo10.jpg"></div>
                        <div class="ibrand_img"><span></span><img src="ad/ibtn10.jpg"></div>
                        </a>
                    </li>
               </ul>
               </div>
           </div>
     </div>
    <script type="text/javascript">
		$(document).ready(function(){
			$(".ibrandlist ul li").each(function(index){
				$(this).mouseenter(function(){
					$(".ibrandlist ul li.cur").removeClass("cur");
					$(this).addClass("cur");
					$("#tab_container > div:eq("+index+")").fadeIn(500).siblings().fadeOut(500);
				})
			})
		})
	</script>
    <?php include 'footer.php';?>