<?php
include('../fpdf/fpdf.php');
if(isset($_POST['opv']))
{
    $font = "ARIAL.TTF";
    $image = imagecreatefrompng("opv.png");
    $color= imagecolorallocate($image, 13, 14, 15);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $name= $fname." ".$lname;
    imagettftext($image, 80, 0, 500, 2170, $color, $font, $name);
    $nationality= "Bangladeshi";
    imagettftext($image, 80, 0, 630, 2520, $color, $font, $nationality);
    $dob= $_POST['dob'];
    imagettftext($image, 80, 0, 670, 2850, $color, $font, $dob);
    $gender= $_POST['gender'];
    imagettftext($image, 80, 0, 550, 3150, $color, $font, $gender);
    $d1= $_POST['d1'];
    $d2= $_POST['d2'];
    $d3= $_POST['d3'];
    $d4= $_POST['d4'];
    imagettftext($image, 80, 0, 3500, 1850, $color, $font, $d1);
    imagettftext($image, 80, 0, 3500, 2200, $color, $font, $d2);
    imagettftext($image, 80, 0, 3500, 2500, $color, $font, $d3);
    imagettftext($image, 80, 0, 3500, 2850, $color, $font, $d4);
    $v="XYZ HOSPITAL";
    imagettftext($image, 70, 0, 3190, 3200, $color, $font, $v);
    $v="Director General of XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3050, 3520, $color, $font, $v);
    $file=time();
    $file_path="save/".$file.".jpg";
    imagejpeg($image, $file_path);
    $pdf = new fpdf();
    $pdf -> AddPage();
    $pdf->image($file_path, 0, 0, 210, 250);
    $pdf->output(); 
    imagedestroy($image);
    echo "Certificate Created";
}
?>