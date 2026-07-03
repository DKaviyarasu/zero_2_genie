<?php

require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';
require 'phpMailer/Exception.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 $mail = new PHPMailer(true);
 

 try {
 $mail->isSMTP();

$mail->SMTPDebug = 2;

$mail->Host = "smtp.gmail.com";

$mail->SMTPSecure = 'tls';

$mail->Port ="587";

$mail->SMTPAuth = true;


$mail->isHTML(true);



$name = $_POST['name'];
$email = $_POST['email'];
$countrycode = $_POST['countrycode'];
$mobilenumber = $_POST['mobilenumber'];
$userMessage = $_POST['userMessage'];
$companyName = $_POST['companyName'];
$referredBy = $_POST['referredBy'];
 
// $attachment = $_POST['myfile'];
 
 





$mail->Username = 'support@zero2genie.com';

$mail->Password = "cryijhbgablewkmb";

// $mail->AddAttachment('C:\Users\Arasu\Downloads\Frame 2 (1).png','FREAME');

 
 

// $mail->addAddress('support@zero2genie.com');
$mail->addAddress('kavikutti14321@gmail.com');



// $mail->addCC("arasu.visualtech@gmail.com");

// $mail->addCC("vinarasu77@gmail.com");
// $mail->addCC("siva.visualtech@gmail.com");
// $mail->addCC("kavikutti14321@gmail.com");
// $mail->addCC("justinandrewsign@gmail.com");





$mail->Subject = 'Proposal request';
$mail->Body    = "Name : ".$name."<br> Email : ".$email."<br> Phone : ".$countrycode.$mobilenumber."<br> Message : ".$userMessage."<br> Referred By : ".$referredBy;
 




// $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

// $regex_name = '/^.*$/i';


if( $mail -> Send()){

    echo "Success";

}else {

    echo 'error';

}
} catch (Exception $e) {
    echo $e; //Boring error messages from anything else!
  }








// if (isset($name) && !empty($name) && $name != "" && strlen($name) < 36 && preg_match ($regex_name, $name)){

//     if(isset($email) && !empty($email) && strlen($email) < 255 && preg_match($regex, $email)){


//         if(isset($countrycode) && !empty($countrycode) && strlen($countrycode) < 10 ){

//             if(isset($mobilenumber) && !empty($mobilenumber) && strlen($mobilenumber) < 20 && is_numeric($mobilenumber)){


//                 if(isset($referredBy) && !empty($referredBy) && strlen($referredBy) < 60 ){

//                     if(isset($userMessage) && !empty($userMessage) && strlen($userMessage) < 1000 && strpos($userMessage, '<') == false && strpos($userMessage, '>') == false){

//                         if(isset($companyName) && !empty($companyName) && strlen($companyName < 60) ){


//                             if(isset($captcha) && !empty($captcha)){

//                                 $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdCLDoeAAAAANcD2xXo6sgSuo0fyTMQcef6PQIK&response=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
//                                     if($response['success'] == false){
//                                         echo "Invalid captcha";
//                                     }else{


//                                         if(!$mail->send()) {
//                                             echo 'Mail could not be sent';
//                                         } else {
//                                             echo 'Success';
//                                         }

//                                     }


                             


//                             }else{
//                                 echo "Invalid captcha";
//                             }

                            

//                         }else{
//                             echo "Invalid company name ";
//                         }

//                     }else{

//                         echo "Invalid message";
//                     }



//                 }else{

//                     echo "Invalid referred by";
//                 }



//             }else{
//                 echo "Invalid mobile number";
//             }



//         }else{
//             echo "Invalid country code";

//         }

//     }else{
//         echo "Invalid email";
//     }


// }else{
//     echo "Invalid name";
    
// }
 


 ?>