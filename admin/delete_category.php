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
      <th colspan="3">
        <center><button class="btn btn-success" name="del">DELETE
        </button></center>
      </th>
    </tr>
  </table>
</div>
</form>
</div>
<?php
if (isset($_POST['del'])) {
  $id = mysqli_real_escape_string($con, $_POST['category_type']);
  $del = "DELETE FROM `category` WHERE categoryname='$id'";
  $result = mysqli_query($con,$del);
  
}
?>