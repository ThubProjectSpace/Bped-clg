<?php

$p = mysqli_real_escape_string($con, $_GET['p']);



switch($p){
    case "Home"   :include("home.php"); break;
    case "courses"   :include("courses.php"); break;
    case "gallery"   :include("gallery.php"); break;
    case "academic_staff"   :include("academic_staff.php"); break;
    case "supporting_staff"   :include("supporting_staff.php"); break;
    case "infrastructure"   :include("infrastructure.php"); break;
    case "play_fields"   :include("play_fields.php"); break;
    case "library"   :include("library.php"); break;
    case "sports_fields"   :include("sports_fields.php"); break;
    case "hpl"   :include("hpl.php"); break;
    case "Sports_Psychology_Laboratory"   :include("Sports_Psychology_Laboratory.php"); break;
    case "ict"   :include("ict.php"); break;
    case "contact"   :include("contact.php"); break;

    case "chairman"  :include("chairman.php");break; 
    case "open" :include("open.php");break;
    case "close" :include("close.php");break;
    case "all" :include("all.php");break;

    default	: include("home.php");

}

?>