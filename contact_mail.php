<?php



             
                //we need to get our variables first
                    $email_to =   'veeraglass@gmail.com'; //the address to which the email will be sent
                    $name     =   $_POST['userName']; 
                    $email  =   $_POST['userEmail'];	
                    $subject    =   $_POST['subject'];
                    $content = $_POST['content'] ;
                    
                    // Let's prepare the message for the e-mail 
                    $message1 = 
"Hello , 

We have received an enquiry for the following 

Name: $name
E-mail: $email
subject: $subject
Message:$content
                    
                    ";
                     
                   $headers  = "From: $email\r\n";
                 
                
                    if(mail($email_to,$subject,$message1, $headers)){
					
							
					
					
						echo '<script>alert("Thank you for Contacting us. We will be in touch with you very soon.!");</script>';
							header('location:index.php');
                    }
					
					
                     
               
           
					
					
?>