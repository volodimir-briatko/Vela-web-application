<?
    $db_host = 'localhost';
    $db_name = 'dolce';
    $db_username = 'root';
    $db_password = '';

    $connect_to_db = mysql_connect($db_host, $db_username, $db_password)
    or die("Could not connect: " . mysql_error());

    mysql_select_db($db_name, $connect_to_db)
    or die("Could not select DB: " . mysql_error());
	
	mysql_query("SET NAMES utf8");
	mysql_query("SET CHARACTER SET utf8");
	




class Godfather
{

	// Классы API
	private $classes = array(
		'products'   => 'products',
		'pages' => 'pages',
		'images' => 'images',
		'categories' => 'categories',
		'orders' => 'orders',
		'reviews' => 'reviews',
		'gallery' => 'gallery',
		'slider' => 'slider'
	);
	
	// Созданные объекты
	private static $objects = array();
	
	/**
	 * Конструктор 
	 */
	public function __construct()
	{
	}

	/**
	 * Магический метод, создает нужный объект API
	 */
	public function __get($name)
	{
		// Если такой объект уже существует, возвращаем его
		if(isset(self::$objects[$name]))
		{
			return(self::$objects[$name]);
		}
		
		// Если запрошенного API не существует - ошибка
		if(!array_key_exists($name, $this->classes))
		{
			return null;
		}
		
		// Определяем имя нужного класса
		$class = $this->classes[$name];
		
		// Подключаем его
		include_once($_SERVER['DOCUMENT_ROOT'].'/api/'.$class.'.php');
		
		// Сохраняем для будущих обращений к нему
		self::$objects[$name] = new $class();
		
		// Возвращаем созданный объект
		return self::$objects[$name];
	}

var $fotos_dir = "/files/";
var $big_foto_dir = "/files/original/";
var $middle_foto_dir = '/files/middle/';
var $small_foto_dir = '/files/small/';

public function delete_items($ids = array(),$base)	{
	$i=0;
	$query='';
	foreach($ids as $id){
	if ($i>0){$query .= " AND ";}
	$query .= "id='$id'";
	}
	$query  = "DELETE FROM ".$base." WHERE ".$query; 
	$result2 = mysql_query ($query)  or die(mysql_error());
}
public function prepare_var($p)	{
	$p = strip_tags ($p);
	$p = trim($p);
	$p = htmlspecialchars($p, ENT_QUOTES);
	return $p;
}

public function settings()	{
	$result_settings = mysql_query("SELECT * FROM settings WHERE id='1' LIMIT 1") or die(mysql_error());
	$row = mysql_fetch_array($result_settings);
	return $row;
}
public function update_settings($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'",  mysql_real_escape_string($v));
		$i++;
		}
		$query = "UPDATE settings SET ".$part." WHERE id='$id'";
		$result = mysql_query($query) or die(mysql_error());		
}

public function send_letter($html,$subject,$from='')	{
	$settings = $this->settings();
	$admin_email = $settings['admin_email'] ;
	if ($from==''){
		$from = $admin_email;
	}
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: <$from>\r\n";
	$sucess=mail($admin_email, $subject, $html, $headers);
	}
	//clean danger artefacts from url
public function clean_url($url){	
$url = strip_tags ($url);
$url = htmlspecialchars($url, ENT_QUOTES);
$url = str_replace('"','',$url);
$url = str_replace("'",'',$url);
return $url;
}	
	
}

?>