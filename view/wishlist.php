<?
if (isset($_GET['product']) && $_GET['product']!=''){
$url =  $godfather->clean_url ($_GET['product']);
$page = $godfather->products->get_product($url,array('vis'=>1));
if ($page){
$product_id = $page['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$page['image_big'] = $images[0]['image3'];
$page['image_middle'] = $images[0]['image2'];
}
$smarty->assign('big_photo_path', $godfather->big_foto_dir);
$smarty->assign('middle_photo_path', $godfather->middle_foto_dir);
$smarty->assign('page', $page);
$template = "wishlist_product.tpl";
}
else {
$url =  $godfather->clean_url ($_GET['url']);
$ff['vis']=1;
$page_arr = $godfather->pages->get_page($url,$ff);
$smarty->assign('photo_path', $godfather->small_foto_dir);

if (isset($_COOKIE['favourite']) && count($_COOKIE['favourite'])>0){
$filter = array('vis'=>1,'product_ids'=>$_COOKIE['favourite']);
$products = $godfather->products->get_products($filter);
foreach ($products as $product){
$product_id = $product['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$products[$product_id]['image'] = $images[0]['image1'];
}
}
$smarty->assign('wish_products', $products);
$smarty->assign('page', $page_arr);
$template = "wishlist.tpl";
}

if (!$page_arr && !$page){
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
$template = "404.tpl";
}
?>