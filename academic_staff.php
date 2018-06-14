<link href="assets\css\main1.css" rel="stylesheet" media="screen">
<section class="content-info section-gap">
    <br><br><br><br> <h1 style="padding-left: 15%;font-color:yellow;"> Academic Staff </h1>
    <br>
    <div class="container ">
        <div class="row portfolioContainer">
            <?php
            $query = "SELECT * FROM `sustaff` where staff_type='academic'";
            $result = mysqli_query($con, $query);
            while($fetch = mysqli_fetch_array($result)) 
            {
                ?>

                <!-- Item Player -->
                <div class="col-xl-4 col-lg-3 col-md-6 forward">
                    <div class="item-player" style="border:1px solid #eeeeee;z-index:2;box-shadow: 0px 0px 1px #9e9e9e;">
                        <div class="head-player">
                            <img src="admin\images\staff\<?php echo $fetch['photo'];?>" class="content-image img-fluid d-block mx-auto" alt="" style="height: 200px;width:150px;margin:10px 0px 0px 0px;">
                            <div class="overlay"></div>
                        </div>
                        <div class="info-player">
                          

                            <h4 style="margin:0px;padding:0px;">
                                <?php echo $fetch['name'] ?>
                                
                            </h4>
                            <hr></hr>
                            <ul>
                                <li>
                                    <strong>DESIGNATION:</strong> <span><?php echo $fetch['designation'] ?></span></li>
                                    <li><strong>QUALIFICATION:</strong> <span><?php echo $fetch['qualification'] ?></span></li>
                                    <li><strong>EXPERIENCE:</strong> <span><?php echo $fetch['experience'] ?></span></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                    <?php
                }
                ?>
                <!-- End Item Player -->
            </div>
        </div>
    </section>
    