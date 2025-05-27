<?
$page_arr = $godfather->pages->get_page(1,array());
$smarty->assign('photo_path', $godfather->fotos_dir);

$slider = $godfather->slider->get_slides(array('vis'=>1));
$smarty->assign('slider', $slider);
$slider_html = $smarty->fetch('slider.tpl');
$page_text = $page_arr['text'];
$page_text = str_replace('{include_main_slider}',$slider_html,$page_text);

$smarty->assign('page_text', $page_text);
$smarty->assign('page', $page_arr);
$template = "mainpage.tpl";
?>