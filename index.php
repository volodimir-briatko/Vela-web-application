<? 
require_once($_SERVER['DOCUMENT_ROOT'].'/smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->template_dir = 'templates/';
$smarty->compile_dir = 'smarty/demo/templates_c/';
$smarty->config_dir = 'smarty/demo/configs/';
$smarty->cache_dir = 'smarty/demo/cache/';

include_once($_SERVER['DOCUMENT_ROOT']."/view/settings.php");
$smarty->assign('template', $template);
$smarty->display('index.tpl');



?>

