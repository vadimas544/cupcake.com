<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cupcake.com</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <!--HEADER-->
	<div class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-2">
	     			<div class="navbar-header">
	     				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	     					<span class="icon-bar"></span>
	     					<span class="icon-bar"></span>
	     					<span class="icon-bar"></span>
	     				</button>
	     				<a href="#" class="navbar-brand"><img src="img/logo.png" alt="logo" class="img-responsive"></a>
	     			</div>
	     		</div>
	     		<div class="col-lg-8 col-md-8">
	     			<div class="navbar-collapse collapse">
	     				<ul class="nav navbar-nav navbar-left">
	     					<li><a href="#header">Главная</a></li>
	     					<li><a href="#catalog">Каталог</a></li>
	     					<li><a href="#jobs">Работы</a></li>
	     					<li><a href="#delivery">Доставка</a></li>
	     					<li><a href="#payment">Оплата</a></li>
	     					<li><a href="#contacts">Контакты</a></li>
	     				</ul>
	     			</div>
	     		</div>
	     		<div class="col-lg-2 col-md-2 text-right">
	     			<div class="header-contacts">
	     				<p>0639489354</p>
	     				<a href="#">Заказать обратный звонок</a>
	     				<p><a href="#"><img src="img/facebook.png" alt="facebook"></a>
	     				<a href="#"><img src="img/twitter.png" alt="facebook"></a>
	     				</p>
	     			</div>
	     		</div>
      		</div>
      	</div>
     </div>
	 <div class="jumbotron">
      			<div class="container">
      				<div class="header-text">
      					<div class="row">
      						<div class="col-lg-8 col-lg-offset-2 text-center">
      							<a href="#">заказать тортик</a>
      							<p>самые вкусные тортики в вишневом</p>
      						</div>
      					</div>
      				</div>
  				</div>
      </div>

   <!--END HEADER-->
   <!--ADVANTAGES-->
	      <div class="container advantage_wrap">
      	<div class="row">
      		<div class="col-lg-4 adv">
      			<img src="img/1.jpg" class="img-circle img-responsive" alt="...">
      			<span style="color: black;">Вкусные и качественные<br /> тортики на <br />любую тематику</span>
      		</div>
      		<div class="col-lg-4 adv">
      			<img src="img/1.jpg" class="img-circle img-responsive" alt="...">
      			<span style="color: black;">Выбор начинок<br />на любой вкус</span>
      		</div>
      		<div class="col-lg-4 adv">
      			<img src="img/1.jpg" class="img-circle img-responsive" alt="...">
      			<span style="color: black;">Доставка по Вишневому<br />и Киеву</span>
      		</div>
      	</div>
      </div>
   <!--END ADVANTAGES-->
   <!--GALLERY-->
   <div class="container-fluid gallery">
   	<div class="row">
   		<h2>галлерея работ</h2>
   	</div>
   	<div class="row">
   		<div class="col-lg-10 col-lg-offset-1">
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
   			<!--
	   			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -
				  <ol class="carousel-indicators">
				    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
				    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <img src="img/slide1.jpg" alt="slide1">
				      <div class="carousel-caption">
				      </div>
				    </div>
				    <div class="item">
				     <img src="img/slide2.jpg" alt="slide1">
				      <div class="carousel-caption">
				      </div>
				    </div>
				   	<!--
				    <div class="item">
				      <img src="img/slide3.jpg" alt="slide1">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/slide4.jpg" alt="slide1">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				    <div class="item">
				      <img src="img/slide5.jpg" alt="slide1">
				      <div class="carousel-caption">
				        ...
				      </div>
				    </div>
				
				  </div>
				</div>
			-->
   		</div>
   	</div>

  </div>
   <!--END GALLERY-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.3.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/common.js"></script>
  </body>
</html>