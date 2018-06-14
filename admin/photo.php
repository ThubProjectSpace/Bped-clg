<?php  
include "config.php";

?>
<div class="col-md-6 col-md-offset-3">
  <form method="post" enctype="multipart/form-data">
    
    <div class=" table-bordered table-responsive">
      <table class="table" align="center">
        <tr>
          <th>Category Name</th>
          <th>:</th>
          <td><select name="category_type" class="form-control">
           <option value="">--Select category--</option>
           

           <?php
           $query = "SELECT * FROM `category`";
           $result = mysqli_query($con, $query);
           


           while ($fetch = mysqli_fetch_array($result)) {

            

            ?>

            <option value="<?php echo $fetch['categoryname']; ?>"><?php echo  $fetch['categoryname'];?></option>


            <?php
          }

          ?>


          

        </select></td>

      </tr>
      
      <tr>
        <th>Photo</th>
        <th>:</th>
        <td><input type="file" name="photo" class="form-control" value=""></td>
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
  $insert = "INSERT INTO `all` SET `category`='".$_POST['category_type']."'";
  $result2 = mysqli_query($con,$insert);



  $file_name = $_FILES['photo']['name'];
  $target = 'images/staff/';
  $tmp_name= $_FILES['photo']['tmp_name'];

  $last = mysqli_insert_id($con);

  $upload = move_uploaded_file($tmp_name, $target.$file_name);
  
  if ($upload) {
    

    $update ="UPDATE `all` SET photo='".$file_name."' WHERE id='".$last."'" ;
    $result3 = mysqli_query($con,$update);
    echo "<script>alert('sucess uploaded')</script>";

  }

  else{
    echo "<script>alert('failed uploaded')</script>";
  }


  
}
?>