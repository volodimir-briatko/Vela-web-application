<?
class Categories extends godfather {

public function get_category($id,$filter = array())	{

$vis_filter = '';

if(isset($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

if(gettype($id) == 'string')
			$where = sprintf("AND url='%s'",  mysql_real_escape_string($id));
		else
			$where = sprintf("AND id='%s'",  mysql_real_escape_string($id));

	$query = "SELECT * FROM categories WHERE 1 $vis_filter $where LIMIT 1";
 
	$result = mysql_query($query) or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			array_push($cont, $row);
		}
return 	$cont[0];
	}

public function get_categories($filter = array())	{
	$vis_filter = '';
	$parent_id_filter = '';

		if(!empty($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

		if(isset($filter['parent_id']))
			$parent_id_filter = " AND parent_id IN (".implode(",", $filter['parent_id']).") ";

	$query = "SELECT * FROM categories WHERE 1 $vis_filter $parent_id_filter ORDER BY pos";
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

public function get_categories_tree($filter = array())	{
	$vis_filter = '';

		if(!empty($filter['vis']))
			$vis_filter = sprintf(" AND vis='%s'",  mysql_real_escape_string($filter['vis']));

	$query = "SELECT * FROM categories WHERE parent_id='0' ".$vis_filter." ORDER BY pos";
	$result = mysql_query($query)
    or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			$rid = $row['id'];
			$cont[$rid] = $row;
			$query2 = "SELECT * FROM categories WHERE parent_id='$rid' ".$vis_filter." ORDER BY pos";
			$result2 = mysql_query($query2) or die(mysql_error());
			while($row2 = mysql_fetch_array($result2)){
				$rid = $row2['id'];
				$cont[$rid] = $row2;
			}
		}
return $cont;
	}

	
	public function update_category($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE categories SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
	}

public function insert_category($arr)	{			
$max = mysql_query("SELECT Max(pos) FROM categories");
$pos = mysql_result($max,0)+1;
		$columns = 'pos';
		$values = "'$pos'";
		foreach($arr as $k=>$v){
		$columns .= ",".$k;
		$values .= sprintf(",'%s'",  mysql_real_escape_string($v));
		}
		$query = "INSERT INTO categories (".$columns.") VALUES (".$values.") ";
		$result = mysql_query($query) or die(mysql_error());
		return mysql_insert_id();		
	}


public function get_categories_features($product_ids = array())	{

	$query = "SELECT * FROM categories_features WHERE product_id IN (".implode(",", $product_ids).")";
	$result = mysql_query($query)
    or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			$cont[] = $row['category_id'];
		}
return $cont;
	}

public function get_categories_products($id)	{
	
	$query = "SELECT * FROM categories_features WHERE category_id='$id'";
	$result = mysql_query($query)
    or die(mysql_error());

$cont = array();
	while($row = mysql_fetch_array($result))
		{
			$cont[] = $row['product_id'];
		}
return $cont;
	}
	
public function delete_category_feature($category_id)	{
	$category_id = intval($category_id);
	if ($category_id>0){
	$query  = "DELETE FROM categories_features WHERE category_id='$category_id'"; 
	$result2 = mysql_query ($query)  or die(mysql_error());
	}
}

public function insert_categories_features($categories,$product_id)	{			
		foreach($categories as $v){
		$value = sprintf("'%s'",  mysql_real_escape_string($v));
		$query = "INSERT INTO categories_features (category_id,product_id) VALUES ($value,'$product_id') ";
		$result = mysql_query($query) or die(mysql_error());
		}
		
		return true;		
	}	
	
}
?>