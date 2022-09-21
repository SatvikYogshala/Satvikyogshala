<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';  


if(!empty($_POST["contact_submit"]))
{

    try{
        $mail = new PHPMailer(true);
        $name=filter_var($_POST["name"], FILTER_SANITIZE_STRING);
        $mobile = $_POST["mobile"];
        $usersubject = filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
        $content = filter_var($_POST["message"], FILTER_SANITIZE_STRING);;
        $to = "satvikyogshala@gmail.com";
        $subject = "New enquiry";
        $message = "
        <html>
        <body>
        <table class='table table-hover p-2 table-bordered'>
        <thead class='thead-dark'>
        <th>Name</th>
        <th>Mobile</th>
        <th>Subject</th>
        <th>Message</th>
        </thead>
        <tbody>
        <tr>
        <td>".$name."</td>
        <td>".$mobile."</td>
        <td>".$usersubject."</td>
        <td>".$content."</td>
        </tr>
        </tbody>
        </table>
        </body>
        </html>
        ";
    
        $mail->SMTPDebug = false;                                       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com;';                    
        $mail->SMTPAuth   = true;                             
        $mail->Username   = 'satvikyogshala@gmail.com';                 
        $mail->Password   = 'xclkqxprvqlesdps';                        
        $mail->SMTPSecure = 'tls';                              
        $mail->Port       = 587;  
        
        $mail->setFrom('satvikyogshala@gmail.com', 'Satvikyogshala');           
        $mail->addAddress('satvikyogshala@gmail.com');
        $mail->addAddress('satvikyogshala@gmail.com', 'Name');
           
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;
        
        $mail->send();
        echo "<script>alert('Mail has been sent successfully!');</script>";
    }catch (Exception $e) {
      echo "<script>alert('Mail has been not sent successfully!');</script>";
    //  echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
   
}
?>
<div class="container-fluid mt-5">
        <div class="row align-items-center">
          <div class="col-lg-6 col-sm-12 my-1 mx-auto">
            <div class="p-1">
              <h2 class="display-4 text-center w-font">CONTACT US</h2>
              <p class=" text-center p-font">For more enquries and Addmission you can Contact Us with this address and Number.</p>
              <form action="" method="POST">
                    <div class="form-group">
                      <label for="name">Name:</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Name" required="true">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Mobile Number:</label>
                      <input type="number" class="form-control" id="mobile" name="mobile" placeholder="Mobile" required="true">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Subject:</label>
                      <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required="true">
                    </div>
                    <div class="form-group">
                      <label for="mobile">Message:</label>
                      <textarea  id="message" class="form-control" name="message" placeholder="Message" rows="5" spellcheck="false" required="true"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="contact_submit" value="send">Submit</button>
                  </form>
              </div>
          </div>

          <style>
      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }
  </style>