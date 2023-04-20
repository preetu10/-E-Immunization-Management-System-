<?php
include('../fpdf/fpdf.php');
if(isset($_POST['rota']))
{
    $font = "ARIAL.TTF";
    $image = imagecreatefrompng("rotarix.png");
    $color= imagecolorallocate($image, 13, 14, 15);
    $fname= $_POST['fname'];
    $lname= $_POST['lname'];
    $name= $fname." ".$lname;
    imagettftext($image, 80, 0, 480, 2000, $color, $font, $name);
    $nationality= "Bangladeshi";
    imagettftext($image, 80, 0, 630, 2320, $color, $font, $nationality);
    $dob= $_POST['dob'];
    imagettftext($image, 80, 0, 670, 2650, $color, $font, $dob);
    $gender= $_POST['gender'];
    imagettftext($image, 80, 0, 550, 2950, $color, $font, $gender);
    $d1= $_POST['d1'];
    $d2= $_POST['d2'];
    imagettftext($image, 80, 0, 3500, 2000, $color, $font, $d1);
    imagettftext($image, 80, 0, 3500, 2350, $color, $font, $d2);
    $v="XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3200, 2650, $color, $font, $v);
    $v="Director General of XYZ HOSPITAL";
    imagettftext($image, 65, 0, 3050, 2980, $color, $font, $v);
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