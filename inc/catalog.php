<?php 
 require_once('config/db.php');
 include_once('header.php');
 ?>
 <div class="category text-center">
 	<div class="row mx-auto">
 		<div class="col-lg-12 text-center">
 			<br>
 			<p>Выберите категорию</p>
 			<br>
 		</div>			
	</div>
	<div class="row">
		<div class="col-lg-6 ml-auto">
			<div class="cake">
				<span class="new_text">торты</span>
				<a href="#"><img class="mx-auto d-block" src="img/cake_cat2.jpg" alt="facebook"></a>				
			</div>
		</div>
		<div class="col-lg-6 mr-auto">
			<div class="cupcake">
				<span>капкейки</span>
				<a href="#"><img class="mx-auto d-block" src="img/cupcake.jpg" alt="facebook"></a>
			</div>
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-lg-6 ml-auto">
			<div class="honey-cake">
				<span>пряники</span>
				<a href="#"><img class="mx-auto d-block" src="img/honey-cake.jpg" alt="facebook"></a>
			</div>
		</div>
		<div class="col-lg-6 mr-auto">
			<div class="merenga">
				<span>меренги</span>
				<a href="#"><img class="mx-auto d-block" src="img/merenga.jpg" alt="facebook"></a>
			</div>
		</div>
	</div>
 </div>
<?php include_once('footer.php'); ?>

