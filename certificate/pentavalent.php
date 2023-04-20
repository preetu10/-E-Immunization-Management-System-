<?php
include('../fpdf/fpdf.php');
if(isset($_POST['pentavalent']))
{
    $font = "ARIAL.TTF";
    $image = imagecreatefrompng("pentavalent.jpg");
    $color= imagecolorallocate($image, 13, 14, 15);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $name= $fname." ".$lname;
    imagettftext($image, 80, 0, 500, 2160, $color, $font, $name);
    $nationality= "Bangladeshi";
    imagettftext($image, 80, 0, 630, 2520, $color, $font, $nationality);
    $dob= $_POST['dob'];
    imagettftext($image, 80, 0, 670, 2850, $color, $font, $dob);
    $gender= $_POST['gender'];
    imagettftext($image, 80, 0, 550, 3150, $color, $font, $gender);
    $d1= $_POST['d1'];
    $d2= $_POST['d2'];
    $d3= $_POST['d3'];
    imagettftext($image, 80, 0, 3500, 2050, $color, $font, $d1);
    imagettftext($image, 80, 0, 3500, 2350, $color, $font, $d2);
    imagettftext($image, 80, 0, 3500, 2700, $color, $font, $d3);
    $v="XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3180, 3030, $color, $font, $v);
    $v="Director General of XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3050, 3350, $color, $font, $v);
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