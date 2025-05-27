<?
require_once($_SERVER['DOCUMENT_ROOT'].'/api/godfather.php');
$godfather = new Godfather();

$settings = $godfather->settings();
$products_on_page = $settings['products_on_page'] ;
$admin_email = $settings['admin_email'] ;
$fotoalbums_on_page = $settings['fotoalbums_on_page'] ;
$photos_in_photoalbum = $settings['photos_in_photoalbum'] ;
$pdf_file = $settings['pdf_file'] ;

//wishlist 
if (isset($_COOKIE['favourite']) && count($_COOKIE['favourite'])>0){
$filter = array('vis'=>1,'product_ids'=>$_COOKIE['favourite']);
$wish_count = $godfather->products->get_products_count($filter);
}
else {
$wish_count = 0;
}
$smarty->assign('wish_count', $wish_count);

//header menu
$h_filter['vis']=1;
$header_menu = $godfather->pages->get_pages($h_filter);
$active_menu = "";

$smarty->assign('active_menu', $active_menu);
$smarty->assign('header_menu', $header_menu);

if (isset($_GET['url'])){
if ($_GET['url']=='menu'){
include_once("view/products.php");
}
else if ($_GET['url']=='gallery'){
include_once("view/gallery.php");
}
else if ($_GET['url']=='wishlist'){
include_once("view/wishlist.php");
}
else if ($_GET['url']=='testimonial'){
include_once("view/reviews.php");
}
else {
$prod = $godfather->products->get_product($_GET['url']);
if ($prod){
include_once("view/product.php");
}
else {
include_once("view/page.php");
}
}
}
else {
include_once("view/mainpage.php");
}


?>