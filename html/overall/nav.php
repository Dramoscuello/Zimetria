<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php"><span><?php echo APP_TITTLE ?></span></a>
    </div>
    <div class="navbar-collapse collapse">
      <div class="menu">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="index.php">Home</a></li>
          <li role="presentation"><a href="#">Posts</a></li>
          <?php
            if(!isset($_SESSION['app_id'])) {
              echo '<li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-sm">Login</a></li>
              <li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-lg">Register</a></li>';
            }else{
              echo '<li role="presentation"><a href="#">'. strtoupper($_users[$_SESSION['app_id']]['user']) .'</a></li>
              <li role="presentation"><a href="#">Cuenta</a></li>
              <li role="presentation"><a href="?view=logout">Salir</a></li>';
            }
           ?>


        </ul>
      </div>
    </div>
  </div>
</nav>


<?php
if(!isset($_SESSION['app_id'])) {
  include(HTML_DIR . 'public/login.html');
  include(HTML_DIR . 'public/reg.html');
}
?>
