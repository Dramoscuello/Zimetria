<?php include(HTML_DIR . 'overall/header.php'); ?>

 <body>
 <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITTLE ?></a></section>

 <?php include(HTML_DIR . '/overall/nav.php'); ?>

 <section class="mbr-section mbr-after-navbar">
   <div class="row cajas">
     <div class="col-md-12">
       <?php

       if($db->rows($sql) > 0) {
        $HTML = '<h4>';
         while($data = $db->recorrer($sql)) {
             $HTML .= '<span>El usuario '.$data['u'].'</span><span> se ha conectado '.$data['c'].' veces, ultima sesión fue</span><span> fecha: '.$data['f'].'</span><span> hora: '.$data['h'].'</span>';
         }
         $HTML .= '</h4>';
       }else {
         $HTML = '<div class="alert alert-dismissible alert-danger"><strong>No hay informacion sobre este usuario</div>';
       }
       echo $HTML;
       ?>
     </div>
   </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
 </html>
