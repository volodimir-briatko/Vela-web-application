<?
$url =  $godfather->clean_url ($_GET['url']);
$page_arr = $godfather->pages->get_page($url,array());
$smarty->assign('page', $page_arr);
$reviews = $godfather->reviews->get_reviews(array('vis'=>1));
foreach ($reviews as $rev){
$id = $rev['id'];
$text=str_replace("\r\n","<br>",$rev['text']);
$reviews[$id]['text'] = $text;
}

$smarty->assign('reviews', $reviews);
$template = "reviews.tpl";


?>