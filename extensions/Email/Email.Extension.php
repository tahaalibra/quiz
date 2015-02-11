<?php

class Email
{
    public static function send($email, $name, $type, $vars=null)
    {
      
     
      $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: CatchPenny Project <root1@localhost>' . "\r\n";
      //$headers .= 'To: '. $name . '<'.$email.'>'  . "\r\n";
      //$headers .= "Subject: ${subject} "."\r\n";
      //$headers[] = "Reply-To: Recipient Name <receiver@domain3.com>";
      //$headers .= 'Cc: birthdayarchive@example.com' . "\r\n";
      //$headers .= 'Bcc: birthdaycheck@example.com' . "\r\n";
      //$headers[] = "X-Mailer: PHP/".phpversion();
      //$header.= "X-Priority: 1\r\n";
      

      $message = file_get_contents(EXT_PATH.DS.'Email'.DS.'view'.DS.$type.'.html');
      $message = str_replace('$name', $name, $message);
      //for activation email
      if($type=='activation')
      {
           $subject  = "CatchPenny Activation Link";
           $link     = $vars;  
           $message  = str_replace('$link', $link, $message);
      }elseif($type=='activated'){
           $subject  = "CatchPenny Account Activated";
      }else{
           $subject  = "CatchPenny";
      }

      mail($email, $subject, $message, $headers);

    }
}
