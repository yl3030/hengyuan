<?php include 'admin/_inc.php';$contact=1; include 'header.php';?>
<?php
    $_SESSION['ans_ckword'] = '';

     mt_srand((double)microtime() * 1000000);  //重置隨機值

     //隨機取得6個小寫英字a-z
     for($i=0; $i<6; $i++){
         $ans_str = mt_rand(97,122);
         $ans_now .= chr($ans_str);
     }

     $_SESSION['ans_ckword'] = $ans_now;  //將值放至session
?>
    <div class="clear"></div>
    <div class="content">
        <div class="about">
            <h2 class="tit1">Contact Us</h2>
            <div class="clear"></div>
            <div class="contact">
            <dl>
                	<!--<dt><a href=""><img src="ad/map_01.png"></a></dt> -->
                    <dt><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3615.015913858301!2d121.52738299999999!3d25.03353399999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a982ec775e77%3A0xaa56877dda63e703!2zMTA25Y-w5YyX5biC5aSn5a6J5Y2A6YeR5bGx5Y2X6Lev5LqM5q61MTHomZ8!5e0!3m2!1szh-TW!2stw!4v1399390521024" width="485" height="297" frameborder="0" style="border:0"></iframe></dt>
                    <dd class="shopinfo">
                        <h5 class="shoptit">東門店</h5>
                        <div class="detail">
                    	<p>店家地址：台北市金山南路二段11號 東門站3號出口<br/>
                          店家電話：2358-1939</p>
                        <p>營業時間：週一至週日 10:30～21:30<br/>
                           服務項目及內容：一般眼鏡、太陽眼鏡、隱形眼鏡
                        </p>
                    </div>
                    </dd>               
                </dl>
                <dl>
                	<!--<dt><a href=""><img src="ad/map_01.png"></a></dt> -->
                    <dt><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3615.854780983714!2d121.45661199999999!3d25.00505!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346802a8a3c8f1f5%3A0x434a94c7cadd50c9!2zMjIw5paw5YyX5biC5p2_5qmL5Y2A6I-v6IiI6KGXODnomZ8!5e0!3m2!1szh-TW!2stw!4v1399390870158" width="485" height="297" frameborder="0" style="border:0"></iframe></dt>
                    <dd class="shopinfo">
                        <h5 class="shoptit">板橋店</h5>
                        <div class="detail">
                    	<p>店家地址：新北市板橋區華興街89號 府中站1號出口<br/>
                          店家電話：2953-9719</p>
                        <p>營業時間：週一至週日 10:30～21:30<br/>
                           服務項目及內容：一般眼鏡、太陽眼鏡、隱形眼鏡
                        </p>
                    </div>
                    </dd>
                </dl>
                <dl>
                	<!--<dt><a href=""><img src="ad/map_01.png"></a></dt> -->
                    <dt><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.440575384083!2d121.48668201500664!3d25.053052283963485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a8fd1be496df%3A0xbf1e0d4a37c26d8b!2z5oGG5rqQ55y86Y-h5LiJ6YeN5bqX!5e0!3m2!1szh-TW!2stw!4v1462275767978" width="485" height="297" frameborder="0" style="border:0"></iframe></dt>
                    <dd class="shopinfo">
                        <h5 class="shoptit">三重店</h5>
                        <div class="detail">
                    	<p>店家地址：新北市三重區集美街91號<br/>
                          店家電話：2977-0109</p>
                        <p>營業時間：週一至週日 10:30～21:30<br/>
                           服務項目及內容：一般眼鏡、太陽眼鏡、隱形眼鏡
                        </p>
                    </div>
                    </dd>
                </dl>
                <div class="clear"></div>
                <script type="text/javascript">
function zbk(Idn2){ if(document.getElementById){ return document.getElementById(Idn2); }else if(document.all){ return document.all(Idn2); }else{ return false; } }
function zcheckimg(){ zbk("idshowpic").innerHTML="<img src=showpic.php>"; }
</script>
<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript">
	function formcheck(){

		form_waring = "";

		if($('#name').val() == "")
			form_waring += "-姓名\n";
		if($('#tel').val() == "")
			form_waring += "-電話\n";
		if($('#email').val() == "")
			form_waring += "-信箱\n";
		if($('#message').val() == "")
			form_waring += "-詢問內容\n";
		if($('#anscheck').val() == "")
			form_waring += "-驗證碼\n";
		if($('#checknum').val()!=$("#anscheck").val())
			form_waring += "-驗證碼錯誤\n";
			
		if(form_waring != ""){
			alert("您尚未填寫以下內容\n"+form_waring);
		}else{
			$('#EditForm').submit();
		}
	}
</script>
                <div class="contact_form">
                	<h3>詢問表單 Inquiry Form</h3>
                    <form name="EditForm" id="EditForm" action="contact_save.php" method="post">
                    <ul>
                    	<li><input class="inputx" type="text" name="name" id="name" placeholder="姓名 NAME：" value="<?php echo $_SESSION['name'];?>"></li>
                        <li><input class="inputx" type="text" name="tel" id="tel" placeholder="電話 PHONE：" value="<?php if($_SESSION['tel']!="") echo $_SESSION['tel'];?>"></li>
                        <li><input class="inputx" type="text" name="email" id="email" placeholder="信箱 EMAIL：" value="<?php if($_SESSION['email']!="") echo $_SESSION['email'];?>"></li>
                        <li><textarea class="textareax" name="message" id="message" placeholder="詢問內容 Enquiry："><?php if($_SESSION['message']!="") echo $_SESSION['message'];?></textarea></li>
                        <li><input type="text" name="anscheck" id="anscheck" onfocus="zcheckimg();" placeholder="<?php if($_SESSION['error']!="") echo $_SESSION['error']; else echo "點選後請輸入驗證碼:"; ?>"/><div id="idshowpic" name="idshowpic"></div></li>
                        <li><a class="resetbtn fl" onclick="formReset()">重新填寫 Confirmation sent</a>
                        <a class="resetbtn fr" href="javascript:void(0)" onclick="formcheck(); return false;">確認送出 Confirmation sent</a></li>
                        <input type="hidden" name="checknum" id="checknum" value="<?=$ans_now?>"  />
                    </ul>
                     </form>
                     <div class="ajax-loader"></div>
                </div>
            </div>
        </div>
    </div>  
    <?php include 'footer.php';?>
