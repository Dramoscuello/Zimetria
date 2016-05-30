<?php include(HTML_DIR . 'overall/header.php'); ?>

 <body>
   <section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITTLE ?></a></section>
    <?php include(HTML_DIR . '/overall/nav.php'); ?>
 <section class="mbr-section mbr-after-navbar">
   <h3>Seguimientos de usuarios</h3>
   <hr>
   <div class="row cajas">
     <div class="col-md-12">
       <?php

       if(false != $_users) {
        $HTML = '<ol>';

         foreach($_users as $id_user => $content_array) {
             $HTML .= '<li><a href="?view=usudetalles&user='.$_users[$id_user]['user'].'">'.$_users[$id_user]['user'].'</a></li>';
         }
         $HTML .= '</ol>';
       } else {
         $HTML = '<div class="alert alert-dismissible alert-info"><strong>No hay usuarios registrados</div>';
       }

       echo $HTML;
       ?>
     </div>
   </div>
 </section>

 <?php include(HTML_DIR . 'overall/footer.php'); ?>

 </body>
 </html>
