<?
require_once($_SERVER['DOCUMENT_ROOT'].'/api/godfather.php'); 

class Images extends godfather {

public function get_image($id)	{

$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));

	$query = "SELECT * FROM images WHERE 1 ".$where." LIMIT 1";
  
	$result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont[0];
	
}

public function get_images($filter = array())	{
	$vis_filter = '';
	$product_id_filter = '';
	$sort_filter = " ORDER BY pos";
	
if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

if(isset($filter['product_id']))
$product_id_filter = sprintf(" AND product_id='%s'",  mysql_real_escape_string($filter['product_id']));

if(isset($filter['sort']))
$sort_filter = sprintf(" ORDER BY %s",  mysql_real_escape_string($filter['sort']));
	
	$query = "SELECT * FROM images WHERE 1 ".$vis_filter.$product_id_filter.$sort_filter;
	$result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont;
}

	public function update_image($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE images SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
	}

public function insert_image($arr)	{			
$max = mysql_query("SELECT Max(pos) FROM images");
$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO `images` (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
	}
	
	
public function upload_image($file,$product_id,$dir,$width=1000)	{
		$product = $this->products->get_product(intval($product_id));
		$url = $product['url'];
		 
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
$string = $url;

if (file_exists($dir.$url.$name_of)) {
for ($counter=1; $counter<1000; $counter++){
	$filename = $filename = $dir.$url.'-'.$counter.$name_of;
	if (!file_exists($filename)) {
		$fname = $url.'-'.$counter.$name_of;
		break;
	}
}
}
else {
$filename = $dir.$url.$name_of;
$fname = $url.$name_of;
}

if(copy($file["tmp_name"],  $filename))   {
$source = $filename;

$sizeArr=GetImageSize ($source);
$iw=$sizeArr[0];
$ih=$sizeArr[1];

if ($iw<=$width){
$newWidth = $iw;
$new_h=$ih;
}
else {
$newWidth = $width; 
$new_h=$ih*$newWidth/$iw;
}

$type=$sizeArr[2];
if ($type==1) {$src=imagecreatefromgif ($source);}
else
if ($type==2) {$src=imagecreatefromjpeg ($source); }
else
if ($type==3) {$src= imagecreatefrompng ($source);}
else
return;
$dst=imagecreatetruecolor ($newWidth, $new_h);
imagesavealpha($dst, true);
imagefill( $dst, 0, 0, imagecolorallocatealpha( $dst, 0, 0, 0, 127 ) );
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, $newWidth, $new_h, ImageSX ($src), ImageSY ($src));
if ($type==1) {imagegif ($dst, $source);  }
else
if ($type==2) {imagejpeg ($dst, $source, 90);  }
else
if ($type==3) {imagepng ($dst, $source, 0); }
else
return;
$fname = str_replace('---','-',$fname);
$fname = str_replace('--','-',$fname);

return $fname;
   } else {
      echo("Error!");
} 
}	
public function upload_general_image($file,$dir,$width=1000)	{
		
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

if (file_exists($dir.$string.$name_of)) {
for ($counter=1; $counter<1000; $counter++){
	$filename = $dir.$string.'-'.$counter.$name_of;
	if (!file_exists($filename)) {
		$fname = $string.'-'.$counter.$name_of;
		break;
	}
}
}
else {
$filename = $dir.$string.$name_of;
$fname = $string.$name_of;
}

if(copy($file["tmp_name"],  $filename))   {
$source = $filename;

$sizeArr=GetImageSize ($source);
$iw=$sizeArr[0];
$ih=$sizeArr[1];

if ($iw<=$width){
$newWidth = $iw;
$new_h=$ih;
}
else {
$newWidth = $width; 
$new_h=$ih*$newWidth/$iw;
}

$type=$sizeArr[2];
if ($type==1) {$src=imagecreatefromgif ($source);}
else
if ($type==2) {$src=imagecreatefromjpeg ($source); }
else
if ($type==3) {$src= imagecreatefrompng ($source);}
else
return;
$dst=imagecreatetruecolor ($newWidth, $new_h);
imagesavealpha($dst, true);
imagefill( $dst, 0, 0, imagecolorallocatealpha( $dst, 0, 0, 0, 127 ) );
ImageCopyResampled ($dst, $src, 0, 0, 0, 0, $newWidth, $new_h, ImageSX ($src), ImageSY ($src));
if ($type==1) {imagegif ($dst, $source);  }
else
if ($type==2) {imagejpeg ($dst, $source, 90);  }
else
if ($type==3) {imagepng ($dst, $source, 0); }
else
return;
$fname = str_replace('---','-',$fname);
$fname = str_replace('--','-',$fname);

return $fname;
   } else {
      echo("Error!");
} 
}
public function upload_resize_image($filename)	{

}

public function delete_images($id)	{
	$image = $this->get_image($id);
	
	$filename3 = $_SERVER['DOCUMENT_ROOT'].$this->big_foto_dir.$image['image3'];
	if (file_exists($filename3)) {
		unlink($filename3);
	}
	$filename2 = $_SERVER['DOCUMENT_ROOT'].$this->middle_foto_dir.$image['image2'];
	if (file_exists($filename2)) {
		unlink($filename2);
	}
	$filename1 = $_SERVER['DOCUMENT_ROOT'].$this->small_foto_dir.$image['image1'];
	if (file_exists($filename1)) {
		unlink($filename1);
	}
}

	
}
?>