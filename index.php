<?php
require_once('view.php');

$view = new VIEW_View('/projects/socialpromoters/tpl/');
$view->set('title', 'SocialPromoters');

$view->set('about_text1', "Grow and Optimize Your Social Media Accounts");
$view->set('about_text11', "Live Customer Service to Help You 24 Hours a Day, 7 Days a Week.");
$view->set('about_text2',"The <font color='#ffde00'>Best</font> Price Match Guarantee <br><br> <font color='#ffde00'>98%</font> of customers recommend  <font color='#4bde74'> social-promoters.com</font>");
$view->set('about_text3',"What our customers said");
$view->set('about_text4',"Don’t take our word. See our testimonials");
$view->set('about_text5',"We've helped thousands of personal brands and companies <br> kickstar their social media campaigns");
$view->set('about_text6',"50 000+");
$view->set('about_text66',"clients served");
$view->set('about_text666',"The more views and likes you have, the more credibility your business or craft gains. When people trust your videos they tend to listen, follow and subscribe.");
$view->set('about_text7',"2 900 000+");
$view->set('about_text77',"orders completed");
$view->set('about_text777',"The more views and likes you have, the more credibility your business or craft gains. When people trust your videos they tend to listen, follow and subscribe. ");
$view->set('about_text8',"Startup is really a great service to get strarted with. With its awesome features and easy customization with unbounce. This is great products. Very recommended.");
$view->set('about_text9',"I like this service very much. easy customization and perfect support. This is the finest startup work I’ve ever seen. Its minimal, Flat and responsive too. I’m really happy with their service.");










$view->display('head.tpl');


if (isset($_GET["level"])){
    $view->display($_GET["level"].".tpl");
}else{
    $view->display('home.tpl');
}

$view->display('footer.tpl');
?>