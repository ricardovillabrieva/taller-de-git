<?php

// Autor: usuario <usuario@iesbelen.org>
   require('HolaMundo.php')

   print "Introduce tu nombre:";
   $nombre = trim(fgets(STDIN));
   print new HolaMundo($nombre);

?>
