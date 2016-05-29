<?php
define('HTML_DIR', 'html/');
define('APP_TITTLE', 'Zimetria Foro');
define('APP_URL', 'http://localhost:8080/proyecto/');
require('vendor/autoload.php');

define('DB_HOST','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','zimetria');

require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
 ?>
