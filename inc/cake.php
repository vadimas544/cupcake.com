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
		<div class="col-lg-10 mx-auto cake-table">
			<br>
			<?php 

			$products = getProducts();
			$num = getCountProd();
			$count = 0;
			//$image_path = $products[$count]['prod_img'];
			//$image = resize_image($image_path);
			//var_dump($image);

			//$old_file = $products[$count]['prod_img'];
			//$img = resize($old_file, $new_file, $w, $h, false, false);
			//var_dump($img); 
			?>
			 <table class="table table-responsive-lg table-responsive-md table-responsive-sm text-center table-responsive-xl">
				<?php 
				 	echo "<tr>";
				    
					while($count < $num){
					$image_path = $products[$count]['prod_img'];
					//$image = resize_image($image_path);
					//$new_image_path = 'img/cake/rescake'.$count.'.jpg';
    				if($count % 2 == 0) {
    				echo '</tr><tr>';
    				}
                    echo '<td class="vert-aligned"><h2>'.$products[$count]['prod_desc'].'</h2><br>
                    	  <img src="'.$image_path.'" class="img-fluid" /><br>
                    	  <a href="route.php?id=cake_item&product_id='.$products[$count]["prod_id"].'">Подробнее</a>
                    	  </td>';
                    //var_dump($image);
                    $count++;
                    }
                    echo '</tr>'; ?>
			</table>		
		</div>
	</div>

 <?php include_once('footer.php'); ?>