

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Aditya College of Educational Institutions</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="gallery-clean.css">



<div class="container gallery-container section-gap">
  <br><br><br>
  <h1>All</h1>



  <div class="all-gallery">

    <div class="row">


      <?php

      if($_GET['c']!='All')
      {
        $query2 = "SELECT * FROM `all` where category='".$_GET['c']."' ";
      }
      else{
       $query2 = "SELECT * FROM `all`  "; 
     }

     $result2 = mysqli_query($con, $query2);


     while($fetch2 = mysqli_fetch_array($result2)) 
     {



       ?> 
       <div class="col-sm-6 col-md-4">
        <div class="thumbnail">


         <img src="admin/images/staff/<?php echo $fetch2['photo'];?>" alt=""><div class="caption">
           <h4><?php echo $fetch2['category'];?></h4>
         </div>
       </div></div>
       <?php

     }
     ?>


     

   </div>

 </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
  baguetteBox.run('.all-gallery');
</script>
</body>
