<?php
include('../fpdf/fpdf.php');
if(isset($_POST['bcg']))
{
    $font = "ARIAL.TTF";
    $image = imagecreatefromjpeg("bcg.jpg");
    $color= imagecolorallocate($image, 13, 14, 15);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $name= $fname." ".$lname;
    imagettftext($image, 100, 0, 700, 3100, $color, $font, $name);
    $nationality= "Bangladeshi";
    imagettftext($image, 100, 0, 960, 3650, $color, $font, $nationality);
    $dob= $_POST['dob'];
    imagettftext($image, 100, 0, 1100, 4130, $color, $font, $dob);
    $gender= $_POST['gender'];
    imagettftext($image, 100, 0, 830, 4650, $color, $font, $gender);
    $d1= $_POST['d1'];
    imagettftext($image, 100, 0, 5470, 3430, $color, $font, $d1);
    $v="XYZ HOSPITAL";
    imagettftext($image, 100, 0, 5000, 3930, $color, $font, $v);
    $v="Director General of XYZ HOSPITAL";
    imagettftext($image, 100, 0, 4800, 4450, $color, $font, $v);
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