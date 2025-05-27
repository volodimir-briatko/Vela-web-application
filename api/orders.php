<?
require_once('godfather.php');
class Orders extends godfather {

public function get_order($id,$filter = array())	{
$vis_filter = '';
if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
			$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));
	$query = "SELECT * FROM orders WHERE 1 ".$vis_filter ." ".$where." LIMIT 1";
    $result = mysql_query($query) or die(mysql_error());
	$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
	return 	$cont[0];
}

public function get_orders($filter = array())	{
	$vis_filter = '';
		if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
	$query = "SELECT * FROM orders WHERE 1 $vis_filter ORDER BY creating DESC";
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
	
public function update_order($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE orders SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
}
	
public function insert_order($arr)	{			
		$max = mysql_query("SELECT Max(pos) FROM orders");
		$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO orders (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
}
	
}
?>