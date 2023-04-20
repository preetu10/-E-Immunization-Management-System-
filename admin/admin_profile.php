<?php
include('authentication.php');
include('includes/header.php');
include('../message.php');
$email = $_SESSION['email'];
$result = mysqli_query($con, "SELECT * FROM user WHERE u_email='$email'");
$retrive = mysqli_fetch_array($result);
$id = $retrive['u_id'];
$fname = $retrive['u_firstname'];
$lname = $retrive['u_lastname'];
$regdate = $retrive['dateofcreation'];
$ffname= $retrive['u_ffirstname'];
$flname = $retrive['u_flastname'];
$dob = $retrive['u_dob'];
$gender = $retrive['u_gender'];
$division = $retrive['u_division'];
$fnid = $retrive['u_fnid'];
?>


<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<div class="container bootdey flex-grow-1 container-p-y">
<div class="media align-items-center py-3 mb-3">
<div class="media-body ml-4">
<h4 class="font-weight-bold mb-0"><?php echo $fname." ".$lname ?></h4>
<div class="text-muted mb-2">ID: <?php echo $id ?> <br>
<form action="edit-myadmin.php" method="POST">
                        <input type="hidden" name="edit_id" value="<?php echo $id; ?>">
                          <button type="submit" name="edit" class="btn btn-success"> Edit Profile</button>
</form>
</div>
<!-- <a href="javascript:void(0)" class="btn btn-success">Edit Profile</a>&nbsp; -->
</div>
</div>
<div class="card mb-4">
<div class="card-body">
<table class="table user-view-table m-0">
<tbody>
<tr>
<td><strong>Joining date:</strong></td>
<td><?php echo $regdate ?></td>
</tr>
<tr>
<td><strong>Father's name:</strong></td>
<td><?php echo $ffname." ".$flname ?></td>
</tr>
<tr>
<td><strong>Date of birth:</strong></td>
<td><?php echo $dob ?></td>
</tr>
<tr>
<td><strong>Gender:</strong></td>
<td><?php echo $gender ?></td>
</tr>
<tr>
<td><strong>E-mail:</strong></td>
<td><?php echo $email ?></td>
</tr>
<tr>
 <td><strong>Division:</strong></td>
<td><?php echo $division ?></td>
</tr> 
<tr> 
<td><strong>NID of guardian:</strong></td>
<td><?php echo $fnid ?></td>
</tr>
<tr>
<td><strong>Role:</strong></td>
<td>Admin</td>
</tr>
</tbody>
</table>
</div>
<div class="card-body">
</div>
</div>
</div>

<style type="text/css">
body{
    margin-top:20px;
    background: #f5f5f5;
}

.ui-w-100 {
    width: 100px !important;
    height: auto;
}

.card {
    background-clip: padding-box;
    box-shadow: 0 2px 4px rgba(24,28,33,0.012);
}

.user-view-table td:first-child {
    width: 12rem;
}
.user-view-table td {
    padding-right: 0 rem;
    padding-left: 0;
    border: 0;
}

.text-light {
    color: #babbbc !important;
}

.card .row-bordered>[class*=" col-"]::after {
    border-color: rgba(24,28,33,0.075);
}    

.text-xlarge {
    font-size: 170% !important;
}
</style>

<?php
include('includes/scripts.php');
?>
