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
if (isset($_SESSION['app_id']) and $_users[$_SESSION['app_id']]) {
  if(false != $_categorias) {
    $prepare_sql = $db->prepare("SELECT id FROM foros WHERE id_categoria = ? ;");
    $prepare_sql->bind_param('i',$id_categoria);
    foreach($_categorias as $id_categoria => $array_categoria) {
      $prepare_sql->execute();
      $prepare_sql->bind_result($id_del_foro);
      echo '<div class="row categorias_con_foros">
        <div class="col-sm-12">
            <div class="row titulo_categoria">'.$_categorias[$id_categoria]['nombre'].'</div>';

            while($prepare_sql->fetch()) {

              if($_foros[$id_del_foro]['estado'] == 1) {
                $extension = '.png';
              } else {
                $extension = '_bloqueado.png';
              }

              echo '<div class="row foros">
                <div class="col-md-1" style="height:50px;line-height: 37px;">
                  <img src="views/app/images/foros/foro_leido'.$extension.'" />
                </div>
                <div class="col-md-7 puntitos" style="padding-left: 0px;">
                  <a href="#">'.$_foros[$id_del_foro]['nombre'].'</a><br />
                  '.$_foros[$id_del_foro]['descrip'].'
                </div>
                <div class="col-md-2 left_border" style="text-align: center;font-weight: bold;">
                  '.$_foros[$id_del_foro]['cantidad_temas'].' Temas<br />
                  '.$_foros[$id_del_foro]['cantidad_mensajes'].' Mensajes
                </div>
                <div class="col-md-2 left_border puntitos" style="line-height: 37px;">
                  <a href="#">Ultimo mensaje acá texto largo</a>
                </div>
              </div>';
            }

      echo '</div>
      </div>';
    }
    $prepare_sql->close();

  } else {
    echo '<div class="row categorias_con_foros">
      <div class="col-sm-12">
          <div class="row titulo_categoria">'. APP_TITTLE . '</div>
          <div class="row foros">
            <div class="col-md-12" style="height:50px;line-height: 37px;">
              No existe ninguna categoría
            </div>
          </div>
      </div>
    </div>';
  }
}else{
  echo "<h2>Debes iniciar sesión para poder ver los foros :)</h2>";
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
