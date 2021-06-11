<?php include 'admin/_inc.php';?>
<?php
		$_SESSION['name'] = mysql_real_escape_string($_POST['name']);
		$_SESSION['tel'] = mysql_real_escape_string($_POST['tel']);
		$_SESSION['email'] = mysql_real_escape_string($_POST['email']);
		$_SESSION['message'] = mysql_real_escape_string($_POST['message']);
		
		$ans_str=0; $ans_now='';  //變數初始化
		
		//判斷ans_ckword及anscheck這2者是否為空，如不為空是否等於
		if((!empty($_SESSION['ans_ckword'])) && (!empty($_POST['anscheck'])) && ($_SESSION['ans_ckword'] == $_POST['anscheck']))
		{
		
			 $_SESSION['ans_ckword'] = ''; //通過後，清空ans_ckword值
		     $_SESSION['name'] = '';
			 $_SESSION['tel'] = '';
			 $_SESSION['email'] = '';
			 $_SESSION['message'] = '';
			 $_SESSION['error'] = '';
			 
			$to = "spanishlilylu@gmail.com";
			$subject = "關於「".$_POST['message']."」的問題";

			$mail_content =
			'姓名 : ' .mysql_real_escape_string($_POST['name']).'<br/><br/>'.
			'電話 : ' .mysql_real_escape_string($_POST['tel']).'<br/><br/>'.
			'Email : ' .mysql_real_escape_string($_POST['email']).'<br/><br/>'.	
			'詢問內容 : ' .nl2br(mysql_real_escape_string($_POST['message'])).'<br/><br/>';	
			
			$mailer = new PHPMailer(); 
			$mailer->CharSet = 'utf-8'; 
			$mailer->Encoding = 'base64'; 
			$mailer->IsSMTP(); 
			$mailer->Host = 'hengyuan-optical.com'; 
			$mailer->SMTPAuth = TRUE; 
			$mailer->Username = 'service@hengyuan-optical.com';  // Change this to your gmail adress 
			$mailer->Password = '29206636';  // Change this to your gmail password 
			$mailer->From = 'service@hengyuan-optical.com';  // This HAVE TO be your gmail adress 
			$mailer->FromName = 'service'; // This is the from name in the email, you can put anything you like here 
			/*$mailer->Body = $message; */
			$mailer->MsgHTML($mail_content);	
			$mailer->Subject = $subject; 
			$mailer->AddAddress($to);  // This is where you put the email adress of the person you want to mail 
            $mailer->Send();
			
		    echo 
		    "<script>
		    window.location.href=\"contact.php\";
		    </script>";
		}
		else
		{  //不通過則執行
		
			 $_SESSION['ans_ckword'] = '';
		
			 mt_srand((double)microtime() * 1000000);  //重置隨機值
		
			 //隨機取得6個小寫英字a-z
			 for($i=0; $i<6; $i++){
				 $ans_str = mt_rand(97,122);
				 $ans_now .= chr($ans_str);
			 }
			
		     $_SESSION['error'] = "驗證碼錯誤，重新輸入";
			 $_SESSION['ans_ckword'] = $ans_now;  //將值放至session
			 
			 echo 
			 "<script>
			 window.location.href=\"contact.php\";
			 </script>";
			 
			 exit();
		}
		    
?>