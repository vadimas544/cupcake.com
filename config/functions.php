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

	
	//echo getCountProd();
	//var_dump(getAllCategories());
	//var_dump($link);	
