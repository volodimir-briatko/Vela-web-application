<?
class Godfather
{

	// Классы API
	private $classes = array(
		'db' => 'db',
		'products'   => 'products',
		'pages' => 'pages',
		'images' => 'images',
		'categories' => 'categories',
		'series' => 'series',
		'orders' => 'orders',
		'reviews' => 'reviews',
		'gallery' => 'gallery',
		'slider' => 'slider',		
		'design'=>'design',
		'watermark'=>'watermark',
		'mobile_detect' => 'Mobile_Detect',
		'requests' => 'requests',
		'groups' => 'groups',
		'characteristics' => 'characteristics',
		'pdf_create'=>'pdf_create',
		'colors_filter'=>'colors_filter',
		'sendmailsmtpclass' => 'SendMailSmtpClass',
		'works'=>'works',
		'works_categories'=>'works_categories'
	);
	
	// Созданные объекты
	private static $objects = array();
	
	/**
	 * Конструктор 
	 */
	public function __construct()
	{	}

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
		if ($name=='sendmailsmtpclass'){
		//self::$objects[$name] = new $class('norohujsanje@gmail.com', '89273769866', 'ssl://smtp.gmail.com', 'norohujsanje.si', 465);
		self::$objects[$name] = new $class('TuningETS@yandex.ru', 'ETS2018', 'ssl://smtp.yandex.ru', 'units.bz', 465);
		}
		else {
		self::$objects[$name] = new $class();
		}
		
		// Возвращаем созданный объект
		return self::$objects[$name];
	}

var $fotos_dir = "/files/";
var $big_foto_dir = "/files/";
var $projects_dir = "/projects_files/";


//очистить переменную
public function prepare_var($p)	{
	$p = strip_tags ($p);
	$p = trim($p);
	$p = htmlspecialchars($p, ENT_QUOTES);
	return $p;
}

//вывод настроек
public function settings()	{
	$query = "SELECT * FROM `settings` WHERE id='1' LIMIT 1";
	$cont = $this->db->result($query);
	return $cont[0];
}

//обновить настройки
public function update_settings($id, $arr)	{	
		$part = '';
		$i=0;
		foreach($arr as $k=>$v){
		if ($i>0){$part .= ",";}
		$part .= sprintf($k."='%s'", $this->db->real_escape($v));
		$i++;
		}
		$query = "UPDATE `settings` SET ".$part." WHERE id='$id'";
		$this->db->query($query);		
}

//отправка письма
public function send_letter($html,$subject,$from='')	{
	$settings = $this->settings();
	$admin_email = $settings->admin_email ;
	if ($from==''){
		$from = $admin_email;
	}
	$headers  = "Content-type: text/html; charset=utf-8 \r\n";
	$headers .= "From: <$from>\r\n";
	$sucess=mail($admin_email, $subject, $html, $headers);
	}

	//отправка письма
public function send_letter_smtp($message,  $subject, $to)	{
	$settings = $this->settings();
	$admin_email = 'TuningETS@yandex.ru' ;

	$headers= "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=utf-8\r\n"; // кодировка письма
	$headers .= "From: units.bz <$admin_email>\r\n"; // от кого письмо !!! тут e-mail, через который происходит авторизация
	$headers .= "To: <$to>\r\n"; //
	
 		$contentMail = "Date: " . date("D, d M Y H:i:s") . " UT\r\n";
        $contentMail .= 'Subject: =?' . $this->sendmailsmtpclass->smtp_charset . '?B?'  . base64_encode($subject) . "=?=\r\n";
        $contentMail .= $headers . "\r\n";
        $contentMail .= $message . "\r\n";	
		$result =  $this->sendmailsmtpclass->send($to, $subject, $contentMail); // отправляем письмо
		
		//echo $result;
	return 1;
	}
	
//clean danger artefacts from url
public function clean_url($url){	
$url = strip_tags ($url);
$url = htmlspecialchars($url, ENT_QUOTES);
$url = str_replace('"','',$url);
$url = str_replace("'",'',$url);
$url = str_replace("/",'',$url);
return $url;
}	

//word depending on the number
public function getInclinationByNumber($number, $arr = Array()) {
    $number = (string) $number;
    $numberEnd = substr($number, -2);
    $numberEnd2 = 0;
    if(strlen($numberEnd) == 2){
        $numberEnd2 = $numberEnd[0];
        $numberEnd = $numberEnd[1];
    }
    if ($numberEnd2 == 1) return $arr[2];
    else if ($numberEnd == 1) return $arr[0];
    else if ($numberEnd > 1 && $numberEnd < 5)return $arr[1];
    else return $arr[2];
}
	
//пейджинг
public function paging($page_number,$page_length){
$paging_list = array();
if($page_number<4){
for ($i=1; $i<5; $i++){
	if ($page_length>=$i){
		$paging_list[] = array('text'=>$i,'link'=>$i);
	}
}
	if ($page_length>5){
	$paging_list[] = array('text'=>'...','link'=>5);
	}
	if ($page_length>4){
	$paging_list[] = array('text'=>$page_length,'link'=>$page_length);
	}
}
else if ($page_number>$page_length-3){
if ($page_length>4){
	$paging_list[] = array('text'=>1,'link'=>1);
}
if ($page_length>5){
	$paging_list[] = array('text'=>'...','link'=>($page_length-4));
	}
for ($i=($page_length-3); $i<($page_length+1); $i++){
	$paging_list[] = array('text'=>$i,'link'=>$i);
}
}
else {
$paging_list[] = array('text'=>1,'link'=>1);
$paging_list[] = array('text'=>'...','link'=>($page_number-2));
$paging_list[] = array('text'=>($page_number-1),'link'=>($page_number-1));
$paging_list[] = array('text'=>$page_number,'link'=>$page_number);
$paging_list[] = array('text'=>($page_number+1),'link'=>($page_number+1));
$paging_list[] = array('text'=>'...','link'=>($page_number+2));
$paging_list[] = array('text'=>$page_length,'link'=>$page_length);
		}
		return $paging_list;
}
//пейджинг END
public function rus_monthes($num){	
	$monthes = array('января', 'февраля', 'марта', 'апреля', 'мая', 'июня', 'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря' );
	return $monthes[$num];
	}
}
?>