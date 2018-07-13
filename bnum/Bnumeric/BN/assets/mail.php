<?php

// Email address verification
$to                =   'mamadouseyen@gmail':
                        $message           = $this->input->post('msg');
						$from_email        ="=?UTF-8?B?".base64_decode( $this->input->post('email'))."?=";
						$from_user         ="=?UTF-8?B?".base64_decode( $this->input->post(''name'))."?=";
						$subject           ="=?UTF-8?B?".base64_decode( $this->input->post(''subject'))."?=";
						$header            ="From: $from_user <$from_email>\r\n'.   "MINE-Version: 1.0"  .  "\r\n"  . 
						   "Content-type: text/html; charset=UTF-8"  .  "\r\n";
    }
    if(mail($to, $subject, $message, $headers))// Send email
	{  
	 echo 'Votre message a bien été envoyé';
    }
    else //Non envoyé
	{
		echo "Votre message n'a pas pu etre envoyé";
	}	
    redirect('contact/?m=added');
?>
