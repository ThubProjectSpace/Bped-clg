<?php
include("config.php");
?>

<br><br><br><br><br><br>
<!-- start banner Area -->
<section class="banner-area " id="home">
	<!-- #region Jssor Slider Begin -->
	<!-- Generator: Jssor Slider Maker -->
	<!-- Source: https://www.jssor.com -->
	
	
	<div class="flash_margin" id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:600px;overflow:hidden;visibility:hidden;">
		<!-- Loading Screen -->
		<div data-u="loading" class="jssorl-004-double-tail-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
			<img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/loader.gif" />
		</div>
		<div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1302px;height:600px;overflow:hidden;">
			<?php
			$query = "SELECT * FROM `banner`";
			$result = mysqli_query($con, $query);
			while($fetch = mysqli_fetch_array($result)) 
			{
				?>
				

				<div>
					<a href="" ><img src="admin\images\staff\<?php echo $fetch['photo'];?>" /></a>
				</div>
				<?php
			}
			?>
			
			
			

			<a data-u="any" href="https://www.jssor.com" style="display:none">slider bootstrap</a>
		</div>
		<!-- Bullet Navigator -->
		<div data-u="navigator" class="jssorb051" style="position:absolute;bottom:14px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
			<div data-u="prototype" class="i" style="width:18px;height:18px;">
				<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%; color: #EC6224 !important;">
					<circle class="b" cx="8000" cy="8000" r="5800"></circle>
				</svg>
			</div>
		</div>
		<!-- Arrow Navigator -->
		<div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
			</svg>
		</div>
		<div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
			<svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
				<polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
			</svg>
		</div>
	</div>
	<script type="text/javascript">jssor_1_slider_init();</script>
	<!-- #endregion Jssor Slider End -->
	
</section>


<!-- End banner Area -->


<!-- Start feature Area -->
<section class="feature-area ">
	<div class="container">
		
		
		<div class="col-lg-12 justify-content-between align-items-center">
			<br>
			<p class="text-center" style="font-size: 25px;"><b> <?php echo $fetch['designation'] ?> </b></p><br>
			<!--<p class="text-center" style="font-size: 20px">principal</p>-->
			<img class="img-fluid img-responsive center-block" src="img/f.jpg" alt="" style="height: 200px;width:150px ">
			<br>
			<p class="text-center">NAME : Dr .S. SARABOJI</p>
			<p class="text-center">QUALIFICATION : B.Sc., M.P.Ed ., M.Phil., Ph.D.,</p>
			<p class="text-center">EXPERIENCE : 15 YEARS</p>
		</div>
		
	</div>			
</section>

<!-- End feature Area -->
<!-- Start testomial Area --><br>
<section class="testomial-area ">
	<div class="container">
		<div class="row section-title"><br>

			<h1>Our Management</h1>
			
		</div>					
		<div class="row">
			<div class="active-testimonial-carusel">
				<div class="single-testimonial item">
					<img class="mx-auto img-responsive" src="img/t1.jpg" alt="" style="height: 100px ;width: 50px">
					<p class="desc">
						As and when I recollect the glimpses of my memory, the co-operation extended by parents and students during this 25 year period, to unfold the present stature of Aditya with 50 institutions, 5000 employees and 50000 students will always be green. When chaos was ruling the minds of the parents during 80s regarding the future of their children in this competitive world, the thought of providing quality education had sprouted in my mind.... 
					</p>
					<a href="?p=chairman#chairman" class="btn btn-info">Read More...</a><br><br>
					<h4>Sri Sesha Reddy</h4>
					<p>
						Chairman
					</p>
				</div>
				<div class="single-testimonial item">
					<img class="mx-auto img-responsive" src="img/t2.jpg" alt="" style="height: 100px ;width: 50px">
					<p class="desc">
						It brings me great joy to be calling myself an integral part of this coveted institution. My brother and I have witnessed it all when father toiled hard to structure this wonderful institution. The posterity would always look up to its lineage, not just the success, attitude and hard work involved to see the aspired results but also most importantly the journey that made it happen. And a beautiful journey means a strong thought.....
					</p>
					<a href="?p=chairman#vicechairman" class="btn btn-info">Read More...</a><br><br>
					<h4>Sri Satish Reddy</h4>
					<p>
						Vice Chairman
					</p>
				</div>
				<div class="single-testimonial item">
					<img class="mx-auto img-responsive" src="img/t3.jpg" alt="" style="height: 100px ;width: 50px">
					<p class="desc">
						With great powers comes great responsibility, this adage is my favourite line indeed for it succinctly puts across what educational institutions ought to do. And for an educational institution as mighty as Aditya, some serious responsibility lies on the shoulders for we not just mould careers but lives of individuals. There are great instances and cases where students join at the KG level and leave us only at the PG level....
					</p>
					<a href="?p=chairman#secretary" class="btn btn-info">Read More...</a><br><br>
					<h4>Sri Deepak Reddy</h4>
					<p>
						Secratary
					</p>
				</div>	
				
			</div>
		</div>
	</div>	
</section>
<!-- End testomial Area -->

