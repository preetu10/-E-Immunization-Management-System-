<?php
include('../fpdf/fpdf.php');
if(isset($_POST['tt']))
{
    $font = "ARIAL.TTF";
    $image = imagecreatefrompng("tt.png");
    $color= imagecolorallocate($image, 13, 14, 15);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $name= $fname." ".$lname;
    imagettftext($image, 80, 0, 490, 2340, $color, $font, $name);
    $nationality= "Bangladeshi";
    imagettftext($image, 80, 0, 630, 2680, $color, $font, $nationality);
    $dob= $_POST['dob'];
    imagettftext($image, 80, 0, 690, 2980, $color, $font, $dob);
    $gender= $_POST['gender'];
    imagettftext($image, 80, 0, 550, 3320, $color, $font, $gender);
    $d1= $_POST['d1'];
    $d2= $_POST['d2'];
    $d3= $_POST['d3'];
    $d4= $_POST['d4'];
    $d5= $_POST['d5'];
    imagettftext($image, 80, 0, 3500, 1850, $color, $font, $d1);
    imagettftext($image, 80, 0, 3500, 2200, $color, $font, $d2);
    imagettftext($image, 80, 0, 3500, 2500, $color, $font, $d3);
    imagettftext($image, 80, 0, 3500, 2850, $color, $font, $d4);
    imagettftext($image, 80, 0, 3500, 3190, $color, $font, $d5);
    $v="XYZ HOSPITAL";
    imagettftext($image, 70, 0, 3200, 3530, $color, $font, $v);
    $v="Director General of XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3050, 3840, $color, $font, $v);
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