<?
$url =  $godfather->clean_url ($_GET['url']);
$ff['vis']=1;
$page_arr = $godfather->pages->get_page($url,$ff);

if ($page_arr){
$smarty->assign('page', $page_arr);
$template = "page.tpl";
}
else {
header($_SERVER['SERVER_PROTOCOL']." 404 Not Found");
$template = "404.tpl";
}
?>