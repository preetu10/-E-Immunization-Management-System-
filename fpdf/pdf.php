<?php
if(isset($_POST['btn']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $name=$fname." ".$lname;
    $email=$_POST['email'];
    //$vaccine=$_POST['vaccine'];
    $dose=$_POST['dose'];

    include('fpdf.php');

    $pdf= new fpdf();
    $pdf->AddPage();
    $pdf->SetFont("Arial", "", 16);
    $pdf->Cell(0, 10, "Registration Details", 1, 1, 'C');
    $pdf->Cell(45, 10, "Name", 1, 0);
    $pdf->Cell(0, 10, $name, 1, 1);
    $pdf->Cell(45, 10, "Email", 1, 0);
    $pdf->Cell(0, 10, $email, 1, 1);
    $pdf->Cell(45, 10, "Dose", 1, 0);
   // $pdf->Cell(45, 10, $email, 1, 1);
    $pdf->Cell(0, 10, $dose, 1, 1);
    $pdf->output();
}
?>