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
		<div class="col-lg-10 mx-auto">
			<br>
			<?php 

			$products = getProducts();
			$num = getCountProd();
			$count = 0; 
			?>
			 <table class="table table-bordered">
				<?php 
				 	echo "<tr>";
				    
					while($count < $num){
    				if($count % 2 == 0) {
    				echo '</tr><tr>';
    				}
                    echo '<td>'.$products[$count]['prod_desc'].'</td>';
                    $count++;
                    }
                    echo '</tr>'; ?>
			</table>		
		</div>
	</div>

 <?php include_once('footer.php'); ?>