<?php

     if (in_array('pdo', get_loaded_extensions())) {
         echo 'El controlador PDO está instalado.';
     } else {
         echo 'El controlador PDO no está instalado.';
     }
     ?>

