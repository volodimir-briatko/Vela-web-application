<?
$url =  $godfather->clean_url($_GET['url']);
$categories = $godfather->categories->get_categories(array('vis'=>1));


$page_arr = $godfather->pages->get_page($url,array('vis'=>1));
if ($page_arr){
$filter = array('vis'=>1,'limit'=>$photos_in_photoalbum);
$galleries = $godfather->gallery->get_gallery_photos($filter);
$for_gal_count = $godfather->gallery->get_gallery_photos(array('vis'=>1));
$smarty->assign('big_photo_path', $godfather->big_foto_dir);
$smarty->assign('small_photo_path', $godfather->small_foto_dir);

if (count($for_gal_count)>$photos_in_photoalbum){
$smarty->assign('photos_in_photoalbum', $photos_in_photoalbum);
}
$smarty->assign('url2', $cat_id);
$template = "gallery.tpl";
}


/*
else {
$galleries2 = $godfather->gallery->get_categories(array('vis'=>1,'limit'=>$fotoalbums_on_page));
$galleries = array();
foreach ($galleries2 as $gallery){
$gallery_id = $gallery['id'];
$images = $godfather->gallery->get_gallery_photos(array('cat_id'=>$gallery_id,'vis'=>1));
if ($images){
$galleries[$gallery_id] = $gallery;
$galleries[$gallery_id]['image_count'] = count($images);
$galleries[$gallery_id]['image'] = $godfather->small_foto_dir.$images[0]['foto_m'];
}
}
$page_arr = $godfather->pages->get_page($url,array('vis'=>1));
$template = "galleries.tpl";
}
*/

if ($galleries){
$smarty->assign('for_gal_count', $for_gal_count);
$smarty->assign('galleries', $galleries);
$smarty->assign('page', $page_arr);
}
else {
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
$template = "404.tpl";
}
?>