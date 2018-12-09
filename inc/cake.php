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
			<table class="table table-bordered">
                    <tbody>                                
                         <tr width="90%">
                         <?php
                            $count = 1;
                            while($row = mysqli_fetch_assoc($result)) { 
                                /*extract($row);
                                $data = $row['image'];*/
                                        echo '<td class="text-center">
                                                <img src="'. $row['image'].'" alt="" class="img-responsive text-center" />
                                                <p class="text-center">Цена</p>
                                                <a class="btn btn-success add-to-cart" tid="'.$row["id"].'">Купить</a>
                                              </td>';
                                if($count++ % 2 == 0){
                                    echo "</tr><tr>";
                                    }
                                }

                                    ?>
                                    </tr>                      
                    </tbody>                        
                </table>
		</div>
	</div>

 <?php include_once('footer.php'); ?>