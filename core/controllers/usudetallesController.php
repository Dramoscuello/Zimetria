<?php

  $detalle = $_GET['user'];
  $db = new Conexion();
  $sql = $db->query("SELECT user AS u, COUNT(user) AS c, MAX(fecha_up) AS f, MAX(hora_up) AS h FROM conexiones WHERE user='$detalle' GROUP BY user;");
  include(HTML_DIR . 'users/detalles_users.php');
  $db->liberar($sql);
  $db->close();
 ?>
