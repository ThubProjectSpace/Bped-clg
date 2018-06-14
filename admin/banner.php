
<?php  
include "config.php";
?>
<div class="container-fluid">
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">banner</li>
  </ol>
  <!-- Example DataTables Card-->
  <div class="card mb-3">
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          
          <thead>
            <tr>
              <th>Id</th>
              <th>Photo</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM `banner`";
            $result = mysqli_query($con, $query);
            $count = mysqli_num_rows($result);
            if ($count>0) {
             while ($fetch = mysqli_fetch_array($result)) {
               ?>
               <tr>
                 <td><?php echo $fetch['id'] ?></td>
                 <td><img width="200px" src="images/staff/<?php echo $fetch['photo'] ?>"></td>

                 <td>
                   <form method="post" action="#edit">

                    <button class="btn btn-success" name="edit" value="<?php echo $fetch['id'] ?>">EDIT</button>
                    <br><br>

                    <button class="btn btn-success" name="del" value="<?php echo $fetch['id'] ?>">DELETE
                    </button>
                  </form>
                </td>
              </tr>
              <?php
            }
          }
          
          
          else{
           ?>
           <tr>
            <td colspan="5"><span class="text-danger">No data Found</span></td>
          </tr>
          <?php
        }


        ?>
      </tbody>
    </table>
  </div>
</div>

</div>
</div>
<?php
if (isset($_POST['edit'])) {
 $id = mysqli_real_escape_string($con, $_POST['edit']);
 $query= "SELECT * FROM `banner` WHERE id='$id'";
 $result = mysqli_query($con, $query);
 $fetch = mysqli_fetch_array($result);
 ?>
 <div class="col-md-6 col-md-offset-3" id="edit"> 
  <form method="post"  enctype="multipart/form-data">
   <input type="text" name="id"  value="<?php echo $fetch['id'];?>"  style="display: none">
   <div class=" table-bordered table-responsive">
    <table class="table">
      <tr>
        <th>photo</th>
        <th>:</th>
        <img width="100px" src="images/staff/<?php echo $fetch['photo'] ?>">
        <input type="file" name="photo" class="form-control" value="<?php echo $fetch['photo'];?>"></td>
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
}
if (isset($_POST['del'])) {
  $id = mysqli_real_escape_string($con, $_POST['del']);
  $del = "DELETE FROM `banner` WHERE id='$id'";
  $result = mysqli_query($con,$del);
  if ($del) {
    echo "<script>location.href=''</script>";
  }
}
if (isset($_POST['submit'])) {




  $file_name = $_FILES['photo']['name'];
  $target = 'images/staff/';
  $tmp_name= $_FILES['photo']['tmp_name'];
  $upload = move_uploaded_file($tmp_name, $target.$file_name);
  
  if ($upload) {
    $update ="UPDATE `banner` SET photo='".$file_name."' WHERE id='".$_POST['id']."'" ;
    $result3 = mysqli_query($con,$update);
// if ($result3) {
    echo "<script>location.href=''</script>";
    // }
  }
  else{
    echo "<script>location.href=''</script>";
  }



}
?>

