<?php
//Include required PHPMailer files
	include('../config/dbconfig.php');
	require 'includes/PHPMailer.php';
	require 'includes/SMTP.php';
	require 'includes/Exception.php';
//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	if(isset($_POST['send_mail'])){
		$event_id =$_POST['edit_id'];
		$query="SELECT * FROM event WHERE event_id='$event_id'";
		$query_run = mysqli_query($con, $query);
		$retrive = mysqli_fetch_array($query_run);

		$name=$retrive['event_name'];

		$orgdate=$retrive['dateofevent'];
        $date=strtotime($orgdate);
        $newdate=date("F d, Y",$date);

		$time= $retrive['event_time'];
		$person="SELECT * FROM user";
		$person_run = mysqli_query($con, $person);
		if(mysqli_num_rows($person_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($person_run))
                    {  
						//Create instance of PHPMailer
							$mail = new PHPMailer();
						//Set mailer to use smtp
							$mail->isSMTP();
						//Define smtp host
							$mail->Host = "smtp.gmail.com";
						//Enable smtp authentication
							$mail->SMTPAuth = true;
						//Set smtp encryption type (ssl/tls)
							$mail->SMTPSecure = "tls";
						//Port to connect smtp
							$mail->Port = "587";
						//Set gmail username
							$mail->Username = "safevax@gmail.com";
						//Set gmail password
							$mail->Password = "pzhaetcaozcseqxa";
						//Email subject
							$mail->Subject = "Invitation for the event '$name'";
						//Set sender email
							$mail->setFrom('safevax@gmail.com');
						//Enable HTML
							$mail->isHTML(true);
						//Attachment
							//$mail->addAttachment('img/attachment.png');
						//Email body
							$mail->Body = "<p>We are honoured to inform you that you are cordially invited to our event $name. The event will be organized at XYZ Central Hall on $newdate at $time.<br><br>We look forward to your presence on the event.<br><br>
							              Regards<br>
										  XYZ Health Care<br></p>";
						//Add recipient
							$email=$row['u_email'];
							$mail->addAddress($email);
							//$mail->addAddress('mahfujasolaiman77@gmail.com');
						//Finally send email
							if ( $mail->send() ) {
									$_SESSION['status'] = "New Data is Added and mail sent.";
									$_SESSION['status_code'] = "success";	
								}
								else{
									$_SESSION['status'] = "New Data is NOT Added and mail couldn't be sent.";
									$_SESSION['status_code'] = "error";
									
								}
							
						//Closing smtp connection
							$mail->smtpClose();
					}
			}
			header("Location: ../admin/view_events.php");
			exit(0);
	}
	else{
	header("Location: ../admin/view_events.php");
	exit(0);
	}

?>
