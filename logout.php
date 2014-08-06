<?php

$pagina = $_GET['pg'];
session_start();
session_destroy();
echo '<script> 
       location.href="'.$pagina.'"
           
         </script>
               ';