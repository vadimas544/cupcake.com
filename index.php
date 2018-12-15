<?php include_once("inc/header.php"); ?>
<!-------------------JUMBOTRON--------------->
      <div class="jumbotron jumbotron-fluid">
      	<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<p>самые вкусные тортики в вишневом</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="route.php?id=cake">заказать тортик</a>
				</div>
			</div>
		</div>
	  </div>
<!-------------------END JUMBOTRON--------------->

<!---------------------ADVANTAGES----------------->
	

	<div class="row">
		<div class="col-lg-12 text-center adv">
			<p>начинки на любой вкус</p><br>
		</div>	
	</div>
	<div class="row">
		<div class="col-lg-4 text-center advantage">
			<div class="row">
				<img src="img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
			</div>
			<br>
			<div class="row">
				<p class="mx-auto">Вкусные и качественные тортики на любую тематику</p>
			</div>
			<br>
			<button type="button" class="btn btn-secondary">Подробнее...</button>
			<br>
		</div>
		<div class="col-lg-4 text-center advantage">
			<div class="row">
				<img src="img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
			</div>
			<br>
			<div class="row">
				<p class="mx-auto">Вкусные и качественные тортики на любую тематику</p>
			</div>
			<br>
			<button type="button" class="btn btn-secondary">Подробнее...</button>
			<br>
		</div>
		<div class="col-lg-4 text-center advantage">
			<div class="row">
				<img src="img/new_1.jpg" class="img-thumbnail rounded mx-auto d-block" alt="...">
			</div>
			<br>
			<div class="row text-center">
				<p class="mx-auto">Вкусные и качественные тортики на любую тематику</p>
			</div>
			<br>
			<button type="button" class="btn btn-secondary">Подробнее...</button>
			<br>
		</div>
	</div>
     		
<!---------------------END ADVANTAGES--------------->

<!----------------------------GALLERY-------------------------------------------->
<div class="gallery">
   	<div class="row text-center">  		
   			<p class="mx-auto">галлерея работ</p>
   	</div>


   	<div class="row mx-auto">
   			 <div id="block-for-slider">
		        <div id="viewport">
		            <ul id="slidewrapper">
		                <li class="slide"><img src="https://hsto.org/files/8d4/b19/80d/8d4b1980d48c418090e2c4466d8c06e1.jpg" alt="1" class="slide-img"></li>
		                <li class="slide"><img src="https://hsto.org/files/ef1/3d7/97e/ef13d797e4c642c7a1d4b2b91f7ad7b3.jpg" alt="2" class="slide-img"></li>
		                <li class="slide"><img src="https://hsto.org/files/ec5/592/f1e/ec5592f1e814401eb38305682a8e88d4.jpg" alt="3" class="slide-img"></li>
		                <li class="slide"><img src="https://hsto.org/files/eda/61a/3c5/eda61a3c53db408d820643998d9acd81.jpg" alt="4" class="slide-img"></li>
		            </ul>

		            <div id="prev-next-btns">
		                <div id="prev-btn" class="button">&lt;</div>
		                <div id="next-btn" class="button">&gt;</div>
		            </div>

		            <ul id="nav-btns">
		                <li class="slide-nav-btn"></li>
		                <li class="slide-nav-btn"></li>
		                <li class="slide-nav-btn"></li>
		                <li class="slide-nav-btn"></li>
		            </ul>
		        </div>
		    </div>
   	</div>

  <div class="row">
  	<div class="col-lg-4  mx-auto">
  		<button type="button" class="btn btn-secondary">Перейти в галлерею</button>
  	</div>			
  </div>
</div>
<!-------------------------------------END GALLERY---------------------------------->
 
<!--------------------------------------MAKECAKE------------------------------------>
<div class="makecake">
	<div class="row text-center">  		
   		<p class="mx-auto">Выбери и закажи тортик сам</p>
   	</div>
   	<div class="row">
   		<div class="col-lg-4 mx-auto">
            <img src="img/make_cake.png" class="mx-auto d-block" alt="makecake">
        </div>
        <div class="col-lg-4 mx-auto">
            <button type="button" class="btn btn-secondary">подобрать тортик</button>
        </div>
   	</div>

</div>   
 <!--  
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <h2 class="text-center">Выбери и закажи тортик сам</h2>
        </div>
      </div>
 
      <div class="row">
          <div class="col-lg-4 col-lg-offset-1">
            <img src="img/make_cake.png" alt="makecake">
          </div>
          <div class="col-lg-4">
            <button>подобрать тортик</button>
        </div>
      </div>
   </div> 
   <!--END MAKECAKE-->
<?php include_once("inc/footer.php"); ?>