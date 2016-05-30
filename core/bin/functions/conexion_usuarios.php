<?php

  $db = new Conexion();
  class Conexion_usuarios
  {

    public function saludar($usu){
      global $db;
      $time = time();
      $date = date("d-m-Y", $time);
      $hora = date("H:i:s", $time);
      $sql = $db->query("INSERT INTO conexiones (fecha_up, hora_up, user) values ('$date', '$hora','$usu')");
    }
  }

 ?>
