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
        <td><input type="text" name="categoryname" class="form-control" value=""></td>
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
  $insert = "INSERT INTO `category` SET `categoryname`='".$_POST['categoryname']."'";

  $result2 = mysqli_query($con,$insert);
}
?>