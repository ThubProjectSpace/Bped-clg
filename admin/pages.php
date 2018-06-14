<?php
error_reporting(0);

$p = mysqli_real_escape_string($con, $_GET['p']);



switch($p){
    
    case "banner"   :include("banner.php"); break;
    case "add_banner"   :include("add_banner.php"); break;
    case "academic_staff"   :include("ac_staff.php"); break;
    case "supporting_staff"   :include("su_staff.php"); break;
    case "add_staff"   :include("add_su_staff.php"); break;
    case "all_photos" :include("all.php");break;
    case "add_category":include("category.php"); break;
    case "del_category":include("delete_category.php"); break;
    case "add_photo"   :include("photo.php"); break;
    default	: include("banner.php");

}

?>