<?
require_once('godfather.php');
class Pages extends godfather {



public function get_page($id,$filter = array())	{
//echo get_magic_quotes_gpc(); 


$vis_filter = '';
if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

if(gettype($id) == 'string')
			$where = sprintf("AND url='%s'",  mysql_real_escape_string($id));
		else
			$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));

	$query = "SELECT * FROM pages WHERE 1 ".$vis_filter ." ".$where." LIMIT 1";
    $result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont[0];
	}

public function get_pages($filter = array())	{
	
	$inmenu_filter = '';
	$vis_filter = '';
	if(isset($filter['inmenu']))
			$inmenu_filter = sprintf(" AND inmenu='%s'",  mysql_real_escape_string($filter['inmenu']));

		if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
	
	$query = "SELECT * FROM pages WHERE 1 $inmenu_filter $vis_filter ORDER BY pos";
	
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
	public function update_page($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE pages SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
	}
		public function insert_page($arr)	{			
$max = mysql_query("SELECT Max(pos) FROM pages");
$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO pages (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
	}
	
}
?>