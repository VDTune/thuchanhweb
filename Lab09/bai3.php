<?php
        require "PHPMailer-master\PHPMailer-master\src\PHPMailer.php"; 
         
        require "PHPMailer-master\PHPMailer-master\src\SMTP.php"; 
        require 'PHPMailer-master\PHPMailer-master\src\Exception.php'; 
        $mail = new PHPMailer\PHPMailer\PHPMailer(true);  
        try {
           
            $mail->isSMTP();  
            $mail->CharSet  = "utf-8";
            $mail->Host = 'smtp.gmail.com';  
            $mail->SMTPAuth = true; 
		    $nguoigui = 'tuanray123@gmail.com';
		    $matkhau = 'vantuan123';
            $tennguoigui = 'Nguyen Thanh Tuan';
            $mail->Username = $nguoigui; 
            $mail->Password = $matkhau;   
            $mail->SMTPSecure = 'ssl';  
            $mail->Port = 465;              
            $mail->setFrom($nguoigui, $tennguoigui ); 
            $to = "";
            $to_name = "";
            $recipients = "tuanray123@gmail.com,tuannt.21it@vku.udn.vn";
            $email_array = explode(",",$recipients);
            foreach($email_array as $email)
            {
               $to      =  $email;
               $mail->addAddress($to, $to_name); 
            }
        
            $mail->addAddress($to, $to_name); 
           
            $mail->isHTML(true);  
            $mail->Subject = 'Kiểm thử';      
            $noidungthu = "<b>Hi chào cậu!</b><br>Have a good day!" ;
            $mail->Body = $noidungthu;
            //$mail->AddAttachment("4.jpg","picture");
            $mail->smtpConnect( array(
                "ssl" => array(
                    "verify_peer" => false,
                    "verify_peer_name" => false,
                    "allow_self_signed" => true
                )
            ));
            $mail->send();
            echo 'Hoàn tất';
            
        } catch (Exception $e) {
            echo 'Gửi mail không thành công. Lỗi: ', $mail->ErrorInfo;
        }

?>
