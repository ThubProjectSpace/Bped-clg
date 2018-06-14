
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="gallery-clean.css">



<div class="container gallery-container section-gap">
    <br><br><br>
    <h1>gallery</h1>

    
    
    <div class="tz-gallery">

        <div class="row">
           
           
            <?php
            $query = "SELECT * FROM `category`";
            
            $result = mysqli_query($con, $query);
            while($fetch = mysqli_fetch_array($result)) 
            {

             $query2 = "SELECT * FROM `all` where category='".$fetch['categoryname']."'";
             $result2 = mysqli_query($con, $query2);
             $fetch2 = mysqli_fetch_array($result2)
             ?> <div class="col-sm-6 col-md-4">
                <div class="thumbnail">

                   
                   <img src="admin/images/staff/<?php echo $fetch2['photo'];?>" alt=""><div class="caption">
                    
                    <h3><?php echo $fetch['categoryname']; ?></h3>
                    <a href="?p=all&c=<?php echo  $fetch['categoryname']; ?>" class="btn btn-info">View All</a>
                    
                </div>
            </div>
        </div>
        <?php
    }
    ?>
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">

           
           <img src="admin/images/staff/9.jpg" alt=""><div class="caption">
            
            <h3>All Photos</h3>

            <a href="?p=all&c=All" class="btn btn-info">View All</a>
            
        </div>
    </div>
</div>



</div>
</div>
</div>  


</body>

