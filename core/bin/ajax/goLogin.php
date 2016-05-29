<?php

if(!empty($_POST['user']) and !empty($_POST['pass'])) {
  $db = new Conexion();
  $data = $db->real_escape_string($_POST['user']);
  $pass = Encrypt($_POST['pass']);
  $sql = $db->query("SELECT id FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1;");
  if($db->rows($sql) > 0) {
    echo 1;
  } else {
    echo '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> Las credenciales son incorrectas.
  </div>';
  }
  $db->close();
} else {
  echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">x</button>
  <strong>ERROR:</strong> Todos los datos deben estar llenos.
</div>';
}

?>
