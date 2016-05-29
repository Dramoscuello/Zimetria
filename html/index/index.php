<?php include(HTML_DIR . 'overall/header.php'); ?>
  <body>
	<?php include(HTML_DIR . 'overall/nav.php'); ?>
	<div class="container">
		<div class="row">
			<div class="slider">
				<div class="img-responsive">
					<ul class="bxslider">
						<li><img src="http://placehold.it/1500x600" alt=""/></li>
						<li><img src="http://placehold.it/1500x600" alt=""/></li>
						<li><img src="http://placehold.it/1500x600" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
  <section class="mbr-section mbr-after-navbar">
  <div class="mbr-section__container container mbr-section__container--isolated">
  <div class="row container">
      <ol class="breadcrumb">
        <li><a href="?view=index"><i class="fa fa-home"></i> Inicio</a></li>
        <?php
          if(isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]['permisos'] >= 2) {
            echo '<li><a href="?view=configforos" class="btn btn-danger">Gestionar Foros</a></li>
            <li><a href="?view=categorias" class="btn btn-danger">Gestionar Categorias</a></li>';
          }
        ?>
      </ol>
  </div>

  <?php
    for($i = 1; $i <= 3; $i++) {
  ?>
  <div class="row categorias_con_foros">
    <div class="col-sm-12">
        <div class="row titulo_categoria">Esto es la categoría</div>

        <?php
          for($x = 1; $x <= 5; $x++) {
        ?>
        <div class="row foros">
          <div class="col-md-1" style="height:50px;line-height: 37px;">
            <img src="views/app/images/foros/foro_leido.png" />
          </div>
          <div class="col-md-7 puntitos" style="padding-left: 0px;">
            <a href="#">Esto es el titulo de un foro</a><br />
            Descripción corta sobre este foro
          </div>
          <div class="col-md-2 left_border" style="text-align: center;font-weight: bold;">
            407 Temas<br />
            1084 Mensajes
          </div>
          <div class="col-md-2 left_border puntitos" style="line-height: 37px;">
            <a href="#">Ultimo mensaje acá texto largo</a>
          </div>
        </div>
        <?php
          }
        ?>

    </div>
  </div>

  <?php
    }
  ?>

  </div>
  </section>
	<!-- <div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Multi Purpose Theme</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br>
					vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
					lorem sit amet scelerisque justo</p>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="box">
				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.4s">
						<h4>Responsive</h4>
							<div class="icon">
								<i class="fa fa-heart-o fa-3x"></i>
							</div>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.0s">
						<h4>Multi Purpose</h4>
						<div class="icon">
							<i class="fa fa-desktop fa-3x"></i>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.6s">
						<h4>Easy Customize</h4>
						<div class="icon">
							<i class="fa fa-location-arrow fa-3x"></i>
						</div>
						<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu libero</p>
						<div class="ficon">
							<a href="#" class="btn btn-default" role="button">Read more</a>
						</div>
					</div>

				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="text-center">
					<h2>Galleries</h2>
					<p>Lorem ipsum dolor sit amet consectetur adipiscing elit Cras suscipit arcu<br>
					vestibulum volutpat libero sollicitudin vitae Curabitur ac aliquam <br>
					</p>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="http://placehold.it/480x360" alt="img25"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>
			</figure>
			<figure class="effect-zoe">
				<img src="http://placehold.it/480x360" alt="img26"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>
			</figure>
		</div>
	</div>

	<div class="content">
		<div class="grid">
			<figure class="effect-zoe">
				<img src="http://placehold.it/480x360" alt="img27"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>
			</figure>
			<figure class="effect-zoe">
				<img src="http://placehold.it/480x360" alt="img30"/>
				<figcaption>
					<h2>Title <span>Name</span></h2>
					<p class="icon-links">
						<a href="#"><span class="icon-heart"></span></a>
						<a href="#"><span class="icon-eye"></span></a>
						<a href="#"><span class="icon-paper-clip"></span></a>
					</p>
					<p class="description">Zoe never had the patience of her sisters. She deliberately punched the bear in his face.</p>
				</figcaption>
			</figure>
		</div>
	</div>-->

	<?php include(HTML_DIR . 'overall/footer.php'); ?>
  </body>
</html>
