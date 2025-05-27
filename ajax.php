<? 
require_once($_SERVER['DOCUMENT_ROOT'].'/api/godfather.php'); 
$godfather = new Godfather();

require_once($_SERVER['DOCUMENT_ROOT'].'/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'smarty/demo/templates_c/';
$smarty->config_dir = 'smarty/demo/configs/';
$smarty->cache_dir = 'smarty/demo/cache/';

$settings = $godfather->settings();
$products_on_page = $settings['products_on_page'] ;
$admin_email = $settings['admin_email'] ;
$fotoalbums_on_page = $settings['fotoalbums_on_page'] ;
$photos_in_photoalbum = $settings['photos_in_photoalbum'] ;

if (isset($_GET['action'])){

/*add Products*/
	if ($_GET['action']=='add_products' && isset($_POST['number']) && isset($_POST['categ'])){
		$limit_srart = $_POST['number']-0;
		

if (isset($_POST['categ']) && $_POST['categ']!=''){
$category =  $godfather->clean_url ($_POST['categ']);
$page_arr =$godfather->categories->get_category($category,array('vis'=>1));
if ($page_arr){
$product_ids = $godfather->categories->get_categories_products($page_arr['id']); 
if ($product_ids){
$filter = array('vis'=>1,'product_ids'=>$product_ids, 'limit_srart'=>$limit_srart, 'limit'=>$products_on_page);
$products = $godfather->products->get_products($filter);
foreach ($products as $product){
$product_id = $product['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$products[$product_id]['image'] = $images[0]['image1'];
}
$prod_count = $godfather->products->get_products_count(array('vis'=>1,'product_ids'=>$product_ids));
}
}
 
}
else {
$products = $godfather->products->get_products(array('vis'=>1, 'limit_srart'=>$limit_srart, 'limit'=>$products_on_page));
foreach ($products as $product){
$product_id = $product['id'];
$images = $godfather->images->get_images(array('product_id'=>$product_id,'vis'=>1));
$products[$product_id]['image'] = $images[0]['image1'];
}
$prod_count = $godfather->products->get_products_count(array('vis'=>1));
}

$to_return = array();
$to_return['list'] = array();
	if ($prod_count<=$limit_srart){
		$to_return['products_on_page'] = 0;	
	}	
	else {
	
		$to_return['products_on_page'] = $limit_srart + $products_on_page;
	}
		$to_return['all_items'] = $prod_count;
	
		
		 foreach ($products as $product) {
		 if ($product['image'] && $product['image']!=''){
		 	$img_src =  $godfather->small_foto_dir.$product['image'];
		 }
		 else {
		 	$img_src ='/images/image_coming_soon.jpg';
		 }
		 
                 $to_return['list'][] = '<li>
                    	<div class="img"><a href="/'.$product['url'].'/"><img src="'.$img_src.'" alt=""></a></div>
                        <div class="category">&nbsp;'.$product['type'].'&nbsp;</div>
                        <div class="name">&nbsp;<a href="/'.$product['url'].'/">'.$product['page_name'].'</a>&nbsp; </div>
                        <div class="select">
                        <a href="javascript:;" val="'.$product['id'].'">select</a>
                        <div class="hint"><span></span>This meal is ready<br>to order</div>
                        </div>
                    </li>';
                   }
		

		echo json_encode($to_return);
	}
	/*add products END*/
	
	/*add photos*/
if ($_GET['action']=='add_photos' && isset($_POST['number']) && isset($_POST['categ'])){
		$limit_srart = $_POST['number']-0;


$filter = array('vis'=>1,'limit_srart'=>$limit_srart,'limit'=>$photos_in_photoalbum);
$galleries = $godfather->gallery->get_gallery_photos($filter);
$for_gal_count = $godfather->gallery->get_gallery_photos(array('vis'=>1));
$for_gal_count = count($for_gal_count);
$to_return = array();
$to_return['list'] = array();
	if ($for_gal_count<=$limit_srart){
		$to_return['photos_in_photoalbum'] = 0;	
	}	
	else {
		$to_return['photos_in_photoalbum'] = $limit_srart + $photos_in_photoalbum;
	}
		$to_return['all_items'] = $for_gal_count;
		 foreach ($galleries as $photo) {
                 $to_return['list'][] = ' <li><a href="'.$godfather->big_foto_dir.''.$photo['foto_b'].'"><img src="'.$godfather->small_foto_dir.''.$photo['foto_m'].'" alt="'.$photo['page_name'].'"><span class="zoom"></span></a></li> ';
                   }
		echo json_encode($to_return);
	

	}	
	
	/*add photos END*/
	
}

if (isset($_POST['action'])){

/*to_favourite*/
if ($_POST['action']=='to_favourite'){
	$id = $_POST['id'];
	$count = count($_COOKIE['favourite']);
	if (!isset($_COOKIE['favourite'][$id])){
	setcookie("favourite[".$id."]",$id,time()+3600*24*30);
	$count++;
	}
	echo $count;
}

/*del_favourite*/
if ($_POST['action']=='del_favourite'){
	$id = $_POST['id'];
	$filter = array('vis'=>1,'product_ids'=>$_COOKIE['favourite']);
	$count = $godfather->products->get_products_count($filter);
	if (isset($_COOKIE['favourite'][$id])){
	setcookie("favourite[".$id."]","",time()+3600*24*30);
	$count--;
	}
	
	echo $count;
}

/*add_order*/
if ($_POST['action']=='add_order'){
	
	$order_arr = array(	
	'lastname' => $godfather->prepare_var($_POST['lastname']),
	'event' => $godfather->prepare_var($_POST['Event']),
	'persnum' => $godfather->prepare_var($_POST['persnum']),
	'email' => $godfather->prepare_var($_POST['email']),
	'tel' => $godfather->prepare_var($_POST['tel']),
	'creating' => time()
	);
	
	if (isset($_COOKIE['favourite']) && count($_COOKIE['favourite'])>0){
	$order_arr['products'] = implode(",", $_COOKIE['favourite']);
	foreach ($_COOKIE['favourite'] as $k=>$p){
		setcookie("favourite[$k]","");
	}
		setcookie("favourite","");
	}
	$ins_id = $godfather->orders->insert_order($order_arr); 
	$smarty->assign('ins_id', $ins_id);
	$smarty->assign('creating', date('j.m.Y H:i:s', $order_arr['creating']));
	$smarty->assign('lastname', $order_arr['lastname']);
	$smarty->assign('event', $order_arr['event']);
	$smarty->assign('persnum', $order_arr['persnum']);
	$smarty->assign('email', $order_arr['email']);
	$smarty->assign('tel', $order_arr['tel']);
	$ids = explode(',',$order_arr['products']);
	$products = array();
	$products = $godfather->products->get_products(array('vis'=>1,'product_ids'=>$ids));
	$smarty->assign('products', $products);
	$html = $smarty->fetch('email/sucess_order.tpl');
	$godfather->send_letter($html,'order from site ');
	echo $ins_id;
}

/*add_review*/
if ($_POST['action']=='review' ){

	$review_arr = array(	
	'page_name' => $godfather->prepare_var($_POST['lastname']),
	'text' => $godfather->prepare_var($_POST['message']),
	'rate' => $godfather->prepare_var($_POST['rating']),
	'creating' => time()
	);

	$ins_id = $godfather->reviews->insert_review($review_arr); 
	echo $ins_id;
}
}
?>

