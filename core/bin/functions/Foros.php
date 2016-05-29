<?php

function Foros() {
  $db = new Conexion();
  $sql = $db->query("SELECT * FROM foros;");
  if($db->rows($sql) > 0) {
    while($d = $db->recorrer($sql)) {
      $foros[$d['id']] = array(
        'id' => $d['id'],
        'nombre' => $d['nombre'],
        'descrip' => $d['descrip'],
        'cantidad_mensajes' => $d['cantidad_mensajes'],
        'cantidad_temas' => $d['cantidad_temas'],
        'id_categoria' => $d['id_categoria'],
        'estado' => $d['estado']
      );
    }
  } else {
    $foros = false;
  }
  $db->liberar($sql);
  $db->close();

  return $foros;
}

?>
