<?
class Design extends godfather {

public function get_tempates($folder,&$all_files)	{
	$fp=opendir($folder);
    while($cv_file=readdir($fp)) {
        if(is_file($folder."/".$cv_file)) {
$ext = substr($cv_file, 1 + strrpos($cv_file, "."));
if ($ext=='tpl') {
$all_files[]=$folder."/".$cv_file;
}
        }elseif($cv_file!="." && $cv_file!=".." && is_dir($folder."/".$cv_file)){
            $this->get_tempates($folder."/".$cv_file,$all_files);
        }
    }
	return $all_files;
    closedir($fp);
}
	
public function update_tempate($tempate, $text)	{
$fp211=fopen($tempate,"a+");
flock ($fp211,LOCK_EX);
ftruncate ($fp211,0);
fputs($fp211,$text);
fflush ($fp211);
flock ($fp211,LOCK_UN);
fclose($fp211);
@chmod($tempate, 0644);
}

public function get_images($folder,&$all_files)	{
	$fp=opendir($folder);
    while($cv_file=readdir($fp)) {
        if(is_file($folder."/".$cv_file)) {
$all_files[]=$folder."/".$cv_file;
        }elseif($cv_file!="." && $cv_file!=".." && is_dir($folder."/".$cv_file)){
            $this->get_tempates($folder."/".$cv_file,$all_files);
        }
    }
	return $all_files;
    closedir($fp);
}

public function upload_image($file,$width=2000)	{
	$dir = $_SERVER['DOCUMENT_ROOT'].'/images/';
$valid_types =  array("gif","jpg", "png", "jpeg", "JPEG", "GIF", "JPG", "PNG", "swf", "SWF");
$ext = substr($file['name'], 
			1 + strrpos($file['name'], "."));
if (!in_array($ext, $valid_types)) {		
			echo '<script type="text/javascript">
			alert("eror file format!");
location.replace(window.location.href);
</script>';
exit ;
		}
$name_of=$file["name"];
$name_of=strrchr($name_of, ".");
$string = str_replace($name_of,'',$file['name']);
$string = $this->images->rus2translit($string);
if (file_exists($dir.$string.$name_of)) {
for ($counter=1; $counter<10000; $counter++){
	$filename = $dir.$string.'-'.$counter.$name_of;
	if (!file_exists($filename)) {
		break;
	}
}
}
else {
$filename = $dir.$string.$name_of;
}

if(copy($file["tmp_name"],  $filename))   {
	return true;
} else {
      echo("Error!");
} 
}
}
?>