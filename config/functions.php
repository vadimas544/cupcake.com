<?php 

	function db_connect()
	{
		$host = 'localhost';
		$dbname = 'beesweet';
		$user = 'root';
		$password = '';

		$link = mysqli_connect($host, $user, $password, $dbname);

		if (!$link) {
	    echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
	    echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
	    echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
	    exit;
		}

		/*echo "Соединение с MySQL установлено!" . PHP_EOL;*/
		/*echo "Информация о сервере: " . mysqli_get_host_info($link) . PHP_EOL;*/
		mysqli_set_charset($link, "utf8");
		//var_dump($link);
		return $link;
	}


	function db_result_to_array($result)
	{
		$res_array = [];

		while($row = mysqli_fetch_array($result)){
			$res_array[] = $row;
		}
		return $res_array;
	}

	function getCategories()
	{
		$link = db_connect();
		
		$sql = 'SELECT cat_name FROM categories';

		$result = mysqli_query($link, $sql);
		return $result;		
		$result = db_result_to_array($result);
		return $result;
	
	}

	function getProducts()
	{
		$link = db_connect();

		$sql = 'SELECT * FROM products';

		$result = mysqli_query($link, $sql);
		
		$result = db_result_to_array($result);
		return $result;
	}

	function getCountProd()
	{
		$link = db_connect();

		$sql = 'SELECT count(*) FROM products';
		$result = mysqli_query($link, $sql);

		$num = mysqli_fetch_row($result);
		return $num[0];
	}
	function resize_image($name) {
		/*
		switch($type){
			case 'jpg': 
				$img = imagecreatefromjpeg($name);
				break;
			case 'gif': 
				$img = imagecreatefromgif($name);
				break;
			case 'png': 
				$img = imagecreatefrompng($name);
				break;
		}
	*/
		$img = imagecreatefromjpeg($name);

		$img_width = imageSX($img);
		$img_height = imageSY($img);

		$width = 120;
		$koef = round($img_width/$width,3);

		$new_width = $img_width/$koef;
		$new_height = $img_height/$koef;

		$new_img = imagecreatetruecolor($new_width, $new_height);
		$res = imagecopyresampled($new_img, $img, 0, 0, 0, 0, $new_width, $new_height, $img_width, $img_height);
		/*
		switch($type){
			case 'jpeg': 
				imagejpeg($new_img,'img/cake/newcake/'.$name);
				break;
			case 'gif': 
				imagegif($new_img,'img/cake/newcake/'.$name);
				break;
			case 'png': 
				imagepng($new_img,'img/cake/newcake/'.$name);
				break;
		}
		*/

		imagejpeg($new_img,'img/cake/rescake'.substr($name,8,6));
		imagedestroy($new_img);
		imagedestroy($img);

		return true;
	}

	
	//echo getCountProd();
	//var_dump(getAllCategories());
	//var_dump($link);	
