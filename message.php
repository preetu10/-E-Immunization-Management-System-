<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.closebtn {
  margin-right: 20px;
  color: black;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
</head>
<body>

<?php
if(isset($_SESSION['message']))
{
?>

<div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?=$_SESSION['message']?>
</div>
    <?php
    unset($_SESSION['message']); 
}   ?>


</body>
</html>
