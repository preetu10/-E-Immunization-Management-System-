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

	if(isset($_POST['send'])){
		$serial =$_POST['edit_serial'];

		$query="SELECT * FROM registers_for WHERE reg_serial='$serial'";
		$query_run = mysqli_query($con, $query);
		$retrive = mysqli_fetch_array($query_run);
		$push=$retrive['dateofreg'];
        $up = date('Y-m-d', strtotime($push. ' + 1 days'));
        $up_push=date("F d, Y",strtotime($up));
		$p_id=$retrive['patientid'];
		$v_id=$retrive['vaccineid'];
		$dose= $retrive['doseno'];

		
		$person="SELECT u_firstname,u_lastname,u_email FROM user WHERE u_id='$p_id'";
		$person_run = mysqli_query($con, $person);

        $vaccine="SELECT  v_name FROM vaccine WHERE v_id='$v_id'";
		$vaccine_run = mysqli_query($con, $vaccine);
        $v_name = mysqli_fetch_array($vaccine_run);
        $vname=$v_name['v_name'];

		if(mysqli_num_rows($person_run) > 0)        
            {
                while($row = mysqli_fetch_assoc($person_run))
                    {  
                        $name = $row['u_firstname'];
                        $lname = $row['u_lastname'];
                        $full_name = $name." ".$lname;

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
							$mail->Subject = "Confirmation mail from XYZ Health Care";
						//Set sender email
							$mail->setFrom('safevax@gmail.com');
						//Enable HTML
							$mail->isHTML(true);
						//Attachment
							//$mail->addAttachment('img/attachment.png');
						//Email body
							$mail->Body = "<p>Dear $full_name ,<br>
                                            Your appointment for dose no $dose of $vname vaccine is confirmed. Your vaccination date is $up_push. You can get vaccinated from 9.00 am to 12.00 pm on this date. Get your dose on time and stay protected.<br><br>
							              Regards<br>
										  XYZ Health Care<br></p>";
						//Add recipient
							$email=$row['u_email'];
							$mail->addAddress($email);
						//Finally send email
							if ( $mail->send() ) {
									$_SESSION['status'] = "Mail sent.";
									$_SESSION['status_code'] = "success";
                                    $query_1 = "UPDATE registers_for SET confirmation_mail=1 WHERE reg_serial = '$serial';";
									$query_run_1 =mysqli_query($con,$query_1);	
								}
								else{
									$_SESSION['status'] = "Mail couldn't be sent.";
									$_SESSION['status_code'] = "error";
									
								}
							}
						//Closing smtp connection
							$mail->smtpClose();
					}
			header("Location: ../admin/view-register.php");
			exit(0);
			

	}
	else{
	header("Location: ../admin/view-register.php");
	exit(0);
	}

?>
