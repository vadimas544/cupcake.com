<?php 
//error_reporting(0);
require_once 'config/functions.php';

include_once('header.php');
 ?>

	<div class="row">
		<div class="col-lg-2">
			<br>	
			<?php
			$categories = getCategories();

			//var_dump($categories);
			/*
			*/// while($row = mysqli_fetch_assoc($result)) { ?> 
			<ul class="list-group">
			  <?php foreach($categories as $item) { ?>		   
			  <li class="list-group-item text-center"><a href=""><?php echo $item['cat_name']; ?></a></li>
			  <?php  } ?>
			</ul>
			<?php//  } ?>
		
		</div>
		<div class="col-lg-10 mx-auto cake-item">
			<br>
			<?php 
				$id = $_GET['product_id'];
				$product = getProduct($id);
				$count = 0;
			?>
			<div class="row">
				<div class="col-lg-6 mx-auto text-center">
					<img src="<?php echo $product[$count]['prod_img']; ?>" class="img-fluid" alt="">
				</div>
				<div class="col-lg-6 mx-auto cakeinfo">
					<p>Название: <?php echo $product[$count]['prod_title']; ?></p>
					<p>Описание: <?php echo $product[$count]['prod_desc']; ?></p>
					<p>Вес: <?php echo $product[$count]['prod_weight']; ?></p>
					<p>Цена: <?php echo $product[$count]['prod_price']; ?></p>
					<a class="cakeitem" href="">заказать</a>
				</div>
				
			</div>
		</div>
	</div>

 <?php include_once('footer.php'); ?>