<?php 
	class C_lien_he
	{
		function Hien_thi_lien_he()
		{
			//Models
			
			//Views
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/contact/layout.tpl";
			$title = "Liên hệ";
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");	
		}
		function Xl_gui_mail()
		{
			//XL
			include_once("public/captcha.php");
			$name = $_POST['name'];
			$email = $_POST['email'];
			$subject = $_POST['subject'];
			$message = $_POST['message'];
			/*if(!isset($_POST["th_gui"]))
			{
				taocaptcha();
			}*/
			if(isset($_POST['th_gui']))
			{
				require_once("public/smtpgmail/class.phpmailer.php");
				$mail=new PHPMailer();
				$mail->IsSMTP(); // Chứng thực SMTP
				$mail->SMTPAuth=TRUE;
				$mail->Host="smtp.gmail.com";
				$mail->Port=465;
				$mail->SMTPSecure="ssl";
				/* Server google*/
				$mail->Username="tanphathihi@gmail.com"; // Nhập mail 
				$mail->Password="Phatqwerasdf"; // Mật khẩu
				/* Server google*/
				$mail->CharSet="utf-8";
				$noidung="Họ tên:" .$name;
				$noidung .="Email:" .$email;
				$noidung .="<hr><br>Chủ đề:" .$subject;
				$noidung .="<br>Nội dung:" .$message;
				$mail->SetFrom($email,$name);
				$mail->Subject=$subject;
				$mail->MsgHTML($message);
				
				$mail->AddAddress("lucycrazy0@gmail.com","ShopPick"); // Mail người nhận
				
				//$path="images/captcha.gif";
				//$mail->AddAttachment($path,"images/captcha.gif");
				/*if($_POST["chk"]==1)
				{
					$mail->AddBCC($email,"like");
				}*/
				//if($_POST["security_code"]==$_SESSION["code"])
				//{
					if(!$mail->Send())
					{
						$err = "Mail lỗi".$mail->ErrorInfo;
					}
					else
					{
						$err = "Gửi mail thành công";
					}
				//}
				//else
				//{
				//	$err = "Nhập mã bảo vệ...";	
				//}
			}
			//views 
			include("Smarty_shop_jean.php");
			$smarty = new Smarty_shop_jean();
			$view = "views/contact/gui_mail_thanh_cong.tpl";
			$title = "Gửi mail";
			$smarty->assign("err",$err);
			$smarty->assign("title",$title);
			$smarty->assign("view",$view);
			$smarty->Hien_thi_giao_dien("layout.tpl");	
			
		}
	}
?>