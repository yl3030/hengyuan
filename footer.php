<div class="footer">
        <div class="footerc">
            <p>東門店　Tel (02)2358-1939　台北市金山南路二段11號 <br class="br-mobile"><span>/</span> 板橋店　Tel (02)2953-9719　新北市板橋區華興街89號 <br class="br-mobile"><span>/</span> 三重店　Tel (02)2977-0109　新北市三重區集美街91號<br/>
                Copyright 2014 © Xin Man liter Ltd.    Design by MI-GO</p>
        </div>
</div>
</div>
<?php if($index==1){?>
	<div class="rfloat">
		<div class="rfloat_btn">展開</div>
		<!--<div class="rfloatc"><img src="ad/facebook.jpg"></div>-->
		<div class="rfloatc">
			<div class="fb-page" data-href="https://www.facebook.com/%E6%81%86%E6%BA%90%E7%9C%BC%E9%8F%A1-136809096352239/" data-tabs="timeline" data-width="346" data-height="398" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
			<a class="line_box" href="http://line.me/ti/p/%40shs5679c">
				恒源眼鏡 Line ID : @shs5679c<br>歡迎加入我們！
			</a>
		</div>
	</div>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.5";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<script>
		$(document).ready(function(){
			$(".rfloat .rfloat_btn").each(function(index){
				$(this).bind("click",function(){
					var curvar = $(".rfloat_btn").html();
					if(curvar == '展開'){
						$(this).html('收起');
						$('.rfloat').animate({right:'0'});
					}else{
						$(this).html('展開');
						$('.rfloat').animate({right:'-346px'});
					}
				});
			});
		})
	</script>
<?php }?>
<?php 
if($brand==1 or $brand_sub==1)
{
echo "<iframe class=\"lightbox\" src=\"brand_page.php\"  id=\"fl2\" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>";
echo "<script type=\"text/javascript\" src=\"js/jquery-1.8.2.min.js\"></script>";
echo "<script  type=\"text/javascript\" src=\"js/featherlight.js\"></script>";
}
?>
<script>
        $(".menu").bind("click",function(){
            if($(".nav").hasClass("active")){
            $(".nav").removeClass("active");
            }else {
            $(".nav").addClass("active");
            }
        });
    </script>
    <script>
        $(".search-icon").click(function(){
            $(".mobile-search-form").slideToggle(300);
        })
        $(window).on("resize",function(){
            if($(window).width()>768) {
                $(".mobile-search-form").hide();
            }
        })   
    </script>
	<script>
      $(".list-box").click(function () {
        $(".pop-up").fadeIn(300);
        $("body").css("overflow", "hidden");
      });
      $(".pop-up .bg").click(function () {
        $(".pop-up").fadeOut(300);
        $("body").css("overflow", "auto");
      });
      $(window).on("resize", function () {
        if ($(window).width() > 768) {
          $(".pop-up").hide();
        }
      });
    </script>
	<script>
      $(".p-brand-list")
        .children("ul")
        .children("li")
        .click(function () {
          $(".p-brand .pop-up-box").css("left", "-100%");
          $(".p-brand .product").css("left", "10%");
        });
      $(".brand-back").click(function () {
        $(".p-brand .pop-up-box").css("left", "10%");
        $(".p-brand .product").css("left", "100vw");
      });
    </script>
</body>
</html>