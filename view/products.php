<?
$url =  $godfather->clean_url ($_GET['url']);
$categories = $godfather->categories->get_categories_tree(array('vis'=>1));
$for_text = $godfather->pages->get_page($url,array('vis'=>1));
$page_text = $for_text['text'];
$fav_ids = array();
if (isset($_COOKIE['favourite']) && count($_COOKIE['favourite'])>0){
$fav_ids=$_COOKIE['favourite'];
}
if (isset($_GET['category']) && $_GET['category']!=''){
$category =  $godfather->clean_url ($_GET['category']);
$url2 = $category;
$page_arr =$godfather->categories->get_category($category,array('vis'=>1));
if ($page_arr){
$product_ids = $godfather->categories->get_categories_products($page_arr['id']); 
if ($product_ids){
$filter = array('vis'=>1,'product_ids'=>$product_ids, 'limit'=>$products_on_page);
$products = $godfather->products->get_products($filter);
foreach ($products as $product){
$product_id = $product['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$products[$product_id]['image'] = $images[0]['image1'];
if (array_key_exists($product_id, $fav_ids)) {
$products[$product_id]['fav'] = 1;
}
}
$prod_count = $godfather->products->get_products_count(array('vis'=>1,'product_ids'=>$product_ids));
}
}
 
}
else {
$products = $godfather->products->get_products(array('vis'=>1, 'limit'=>$products_on_page));
foreach ($products as $product){
$product_id = $product['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$products[$product_id]['image'] = $images[0]['image1'];
if (array_key_exists($product_id, $fav_ids)) {
$products[$product_id]['fav'] = 1;
}
$page_arr = $godfather->pages->get_page($url,array('vis'=>1));
}
$prod_count = $godfather->products->get_products_count(array('vis'=>1));
}


if ($page_arr || $products){
if ($prod_count>$products_on_page){
$smarty->assign('products_on_page', $products_on_page);
}
if ($url2){
$smarty->assign('url2', $url2);
}
$smarty->assign('photo_path', $godfather->small_foto_dir);
$smarty->assign('pdf_file', $pdf_file);
$smarty->assign('categories', $categories);
$smarty->assign('page', $page_arr);
$smarty->assign('products', $products);
$smarty->assign('page_text', $page_text);

$template = "products.tpl";
}

else {
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
$template = "404.tpl";
}
?>