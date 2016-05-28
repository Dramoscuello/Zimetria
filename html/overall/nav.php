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
      <a class="navbar-brand" href="index.php"><span>Zimetria Foro</span></a>
    </div>
    <div class="navbar-collapse collapse">
      <div class="menu">
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="index.php">Home</a></li>
          <li role="presentation"><a href="services.html">Posts</a></li>
          <li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-sm">Login</a></li>
          <li role="presentation"><a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-lg">Register</a></li>
          <li role="presentation"><a href="contact.html">Contact</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>

<!-- login modal -->
<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="gridModalLabel">LOGIN</h4>
   </div>
   <div class="modal-body">
    <form class="form-horizontal">
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Remember me
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Sign in</button>
      </div>
    </div>
  </form>
   </div>
  </div>
</div>
</div>
<!-- login modal -->

<!-- registro modal -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
          <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
    <h4 class="modal-title" id="gridModalLabel">REGISTER</h4>
   </div>
   <div class="modal-body">
    <form class="form-horizontal">
      <div class="form-group">
        <label for="inputEmail33" class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="inputEmail33" placeholder="Usuario">
        </div>
      </div>
    <div class="form-group">
      <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
      <div class="col-sm-10">
        <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword34" class="col-sm-2 control-label">Repeat Password</label>
      <div class="col-sm-10">
        <input type="password" class="form-control" id="inputPassword34" placeholder="Password">
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> Accept term
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-danger">REGISTER</button>
      </div>
    </div>
  </form>
   </div>
    </div>
  </div>
</div>
