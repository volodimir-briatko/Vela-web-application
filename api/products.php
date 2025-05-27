<?
class Products extends godfather {

public function get_product($id,$filter = array())	{

$vis_filter = '';
if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

if(gettype($id) == 'string')
			$where = sprintf("AND url='%s'",  mysql_real_escape_string($id));
		else
			$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));

	$query = "SELECT * FROM products WHERE 1 ".$vis_filter ." ".$where." LIMIT 1";
  
	$result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont[0];
	}

public function get_products($filter = array())	{
	$vis_filter = '';
	$product_ids_filter = '';
	$limit_filter = '';

		if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
		if(isset($filter['product_ids']))
			$product_ids_filter = " AND id IN (".implode(",", $filter['product_ids']).")";
			
		if(isset($filter['limit']))
			$limit_filter = " LIMIT 0,".$filter['limit'];	
		 
		 if(isset($filter['limit_srart']) && isset($filter['limit']))
			$limit_filter = " LIMIT ".$filter['limit_srart'].",".$filter['limit'];
	
	$query = "SELECT * FROM products WHERE 1  $vis_filter $product_ids_filter ORDER BY pos $limit_filter";
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
public function get_products_count($filter = array())	{
	$vis_filter = '';
	$product_ids_filter = '';

		if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));
		if(isset($filter['product_ids']))
			$product_ids_filter = " AND id IN (".implode(",", $filter['product_ids']).")";
	
	$query = "SELECT * FROM products WHERE 1  $vis_filter $product_ids_filter ORDER BY pos";
	
    $result = mysql_query($query)
    or die(mysql_error());
$count = mysql_num_rows($result); 
return $count;
	}	
	public function update_product($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE products SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
	}

public function insert_product($arr)	{			
$max = mysql_query("SELECT Max(pos) FROM products");
$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO products (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
	}

public function delete_product_feature($product_id)	{
	$product_id = intval($product_id);
	if ($product_id>0){
	$query  = "DELETE FROM categories_features WHERE product_id='$product_id'"; 
	$result2 = mysql_query ($query)  or die(mysql_error());
	}
}
	
}
?>