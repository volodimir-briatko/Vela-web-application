<?
$what_page = explode('/',$_SERVER['HTTP_REFERER']);
if ($godfather->products->get_product($what_page[3]))$what_page=1;
else $what_page=false;
$smarty->assign('what_page', $what_page);

$url =  $godfather->clean_url ($_GET['url']);
$categories = $godfather->categories->get_categories_tree(array('vis'=>1));
$fav_ids = array();
if (isset($_COOKIE['favourite']) && count($_COOKIE['favourite'])>0){
$fav_ids=$_COOKIE['favourite'];
}
$page = $godfather->products->get_product($url,array('vis'=>1));
$products = $godfather->products->get_products(array('vis'=>1));
$urls = array();
foreach($products as $p){ 
	$urls[] = $p['url'];
			}
$urls_count = count($urls);			

if ($page){
$product_id = $page['id'];

if (array_key_exists($product_id, $fav_ids)) {
$page['fav'] = 1;
}

$product_cat = $godfather->categories->get_categories_features(array($product_id));
$product_cat = $product_cat[count($product_cat)-1];


$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$page['image_big'] = $images[0]['image3'];
$page['image_middle'] = $images[0]['image2'];

//previos url, next url
$curent_url = array_search($page['url'], $urls);
if ($curent_url===0){
$prev_url = $urls[$urls_count-1];
}
else {
$prev_url = $urls[$curent_url-1];
}
if ($curent_url===$urls_count-1){
$next_url = $urls[0];
}
else {
$next_url = $urls[$curent_url+1];
}

$active_menu = "active";

$smarty->assign('product_cat', $product_cat);
$smarty->assign('big_photo_path', $godfather->big_foto_dir);
$smarty->assign('middle_photo_path', $godfather->middle_foto_dir);
$smarty->assign('active_menu', $active_menu);
$smarty->assign('categories', $categories);
$smarty->assign('page', $page);
$smarty->assign('prev_url', $prev_url);
$smarty->assign('next_url', $next_url);
$template = "product.tpl";
}
else {
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
$template = "404.tpl";
}
?>