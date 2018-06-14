<?php  
include "config.php";

?>
<div class="col-md-6 col-md-offset-3">
<form method="post" enctype="multipart/form-data">
            
            <div class=" table-bordered table-responsive">
              <table class="table" align="center">
               
             

                <tr>
                  <th>Name</th>
                  <th>:</th>
                  <td><input type="text" name="name" class="form-control" value=""></td>
                </tr>
                <tr>
                  <th>designation</th>
                  <th>:</th>
                  <td><input type="text" name="designation" class="form-control" value=""></td>
                </tr>
                <tr>
                  <th>qualification</th>
                  <th>:</th>
                  <td><input type="text" name="qualification" class="form-control" value=""></td>
                </tr>
                <tr>
                  <th>experience</th>
                  <th>:</th>
                  <td><input type="text" name="experience" class="form-control" value=""></td>
                </tr>
                   <tr>
                  <th>Photo</th>
                  <th>:</th>
                  <td><input type="file" name="photo" class="form-control" value=""></td>
                </tr>

                 <tr>
                  <th>staff type</th>
                  <th>:</th>
                  <td><select name="staff_type" class="form-control">
                     <option value="">--Select staff type--</option>
                    <option value="academic">Academic</option>
                    <option value="supporting">Supporting</option>


                  </select></td>
                </tr>

                <tr>
                <th colspan="3">
                  <center><button class="btn btn-info Change_Password" name="submit">Submit</button></center>
                </th>
              </tr>
              </table>
            </div>
          </form>
      </div>
      <?php
if (isset($_POST['submit'])) {
$insert = "INSERT INTO `sustaff` SET `name`='".$_POST['name']."', `designation`='".$_POST['designation']."', `qualification`='".$_POST['qualification']."', `experience`='".$_POST['experience']."', `staff_type`='".$_POST['staff_type']."'";
    $result2 = mysqli_query($con,$insert);



  $file_name = $_FILES['photo']['name'];
  $target = 'images/staff/';
  $tmp_name= $_FILES['photo']['tmp_name'];

$last = mysqli_insert_id($con);

  $upload = move_uploaded_file($tmp_name, $target.$file_name);
  
  if ($upload) {
    

$update ="UPDATE `sustaff` SET photo='".$file_name."' WHERE id='".$last."'" ;
$result3 = mysqli_query($con,$update);
 echo "<script>alert('sucess uploaded')</script>";

  }

  else{
    echo "<script>alert('failed uploaded')</script>";
  }


    
  }
   ?>