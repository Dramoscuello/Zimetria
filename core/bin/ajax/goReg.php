<?php

$db = new Conexion();

$pass = Encrypt($_POST['pass']);
$user = $db->real_escape_string($_POST['user']);
$email = $db->real_escape_string($_POST['email']);

$sql = $db->query("SELECT user FROM users WHERE user='$user' OR email='$email' LIMIT 1;");
if($db->rows($sql) == 0) {
  $db->query("INSERT INTO users (user,email,pass) VALUES ('$user','$email','$pass');");
  $sql_2 = $db->query("SELECT MAX(id) AS id FROM users;");
  $_SESSION['app_id'] = $db->recorrer($sql_2)[0];
  $db->liberar($sql_2);
  $HTML = 1;
}else {
  $usuario = $db->recorrer($sql)[0];
  if(strtolower($user) == strtolower($usuario)){
    $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El usuario ingresado ya existe.
  </div>';
}else {
  $HTML = '<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>ERROR:</strong> El email ingresado ya existe.
  </div>';
  }
}
$db->liberar($sql);
$db->close();

echo $HTML;

?>
