<?php
require_once('view.php');

$view = new VIEW_View('/projects/socialpromoters/tpl/');
$view->set('title', 'SocialPromoters');
$view->set('about_text1', "Grow and Optimize Your Social Media Accounts");
$view->set('about_text11', "Live Customer Service to Help You 24 Hours a Day, 7 Days a Week.");
$view->set('about_text2',"The <font color='#ffde00'>Best</font> Price Match Guarantee <br> <font color='#ffde00'>98%</font> of customers recommend  <font color='#4bde74'> social-promoters.com</font>");
$view->set('about_text3',"What our customers said");
$view->set('about_text4',"Don’t take our word. See our testimonials");
$view->set('about_text5',"We've helped thousands of personal brands and companies <br> kickstar their social media campaigns");




$view->display('head.tpl');


if (isset($_GET["level"])){
    $view->display($_GET["level"].".tpl");
}else{
    $view->display('home.tpl');
}

$view->display('footer.tpl');
?>