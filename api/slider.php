<?
require_once('godfather.php');
class Slider extends godfather {

public function get_slide($id,$filter = array())	{

$vis_filter = '';
if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
			$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));

	$query = "SELECT * FROM slider WHERE 1 ".$vis_filter ." ".$where." LIMIT 1";
    $result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont[0];
	}

public function get_slides($filter = array())	{
	$vis_filter = '';
		if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
	$query = "SELECT * FROM slider WHERE 1 $vis_filter ORDER BY pos";
    $result = mysql_query($query)
    or die(mysql_error());
$cont = array();
	while($row = mysql_fetch_array($result))
		{
			$rid = $row['id'];
			$cont[$rid] = $row;
		}
return $cont;
	}
	
	public function update_slide($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE slider SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
	}
		public function insert_slide($arr)	{			
$max = mysql_query("SELECT Max(pos) FROM slider");
$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO slider (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
	}
public function delete_slide($id)	{
	$image = $this->get_slide($id);
	$filename = $_SERVER['DOCUMENT_ROOT'].$this->fotos_dir.$image['foto'];
	if (file_exists($filename)) {
		unlink($filename);
	}
}
}
?>