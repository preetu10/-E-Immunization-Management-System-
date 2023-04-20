<?php
include('authentication.php');
include('includes/header.php');
?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        <h5 class="m-0 font-weight-bold text black">Add Admin</h5> 
    </div>
    <div class="card mb-4">
    <div class="card-body">
    <?php
    if(isset($_POST['add']))
    {
    ?>
    <form action="add-vaccinatorcon.php" method="POST">
        <div class="form-group">
            <label><b>First Name</b></label>
                <input required type="text" class="form-control" name="fname" placeholder="Enter First Name">
        </div>
        <div class="form-group">
            <label><b>Last Name</b></label>
                <input required type="text" class="form-control" name="lname" placeholder="Enter Last Name">
        </div>
        <div class="form-group">
            <label><b>Father's First Name</b></label>
                <input required type="text" class="form-control" name="ffname" placeholder="Enter Father's First Name">
        </div>
        <div class="form-group">
            <label><b>Father's Last Name</b></label>
                <input required type="text" class="form-control" name="flname" placeholder="Enter Father's First Name">
        </div>
        <div class="form-group">
            <label><b>Father's NID Number</b></label>
                <input required type="text" class="form-control" name="fnid" placeholder="Enter Father's NID Number">
        </div>
        <div class="form-group">
        <label><b>Division</b></label><br>
            <select name="division" class="custom-select">
              <option value="" disabled selected hidden>Please Choose Division</option>
              <option value="Chattogram">Chattogram</option>
              <option value="Dhaka">Dhaka</option>
              <option value="Kumilla">Kumilla</option>
              <option value="Sylhet">Sylhet</option>
              <option value="Rongpur">Rongpur</option>
              <option value="Rajshahi">Rajshahi</option>
              <option value="Barishal">Barishal</option>
              <option value="Khulna">Khulna</option>
            </select>
          </div>
          <div class="form-group">
          <label><b>Email</b></label>
            <input type="email" name="email" class="form-control" placeholder="Enter Email">
          </div>
          <div class="form-group">
          <label><b>Gender</b></label><br>
            <select name="gender" class="custom-select">
              <option value="" disabled selected hidden>Please Choose Gender</option>
              <option value="Male">MALE</option>
              <option value="Female">FEMALE</option>
            </select>
          </div>
          <div class="form-group">
          <label><b>Birth Date</b></label>
            <input placeholder="Enter Date of Birth" type="date" name="dob" onfocus="(this.type='date')" class="form-control">
          </div>
          <div class="form-group">
          <label><b>Password</b></label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
          </div>
          <div class="form-group">
          <label><b>Confirm Password</b></label>
            <input type="password" name="rpassword" class="form-control" placeholder="Re-enter the Password">
          </div>
          <br>
        <button type="submit" name="add-btn" class="btn btn-success">Add </button>
        <a href="view-vaccinator.php" class="btn btn-danger"> Cancel </a>
        </form>
        <?php
            }
        ?>
    </div>
     </div>
    </div>
</div>
</div>

<?php
include('includes/scripts.php');
?>