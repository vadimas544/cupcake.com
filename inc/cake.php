<?php 
error_reporting(0);
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
			<?php $products = getProducts();
				  $count = getCountProd();
			 ?>
			 <table class="table table-bordered">
				<?php 
				    echo "<tr>";
				    $count = 0;
					while($count){
    				if (!($count % 2)){ echo "</tr><tr>"; }
    				echo "<td>{$products['id']}{$products['title']}</td>";
					}
					echo "</tr>"; ?>
			</table>		
		</div>
	</div>

 <?php include_once('footer.php'); ?>