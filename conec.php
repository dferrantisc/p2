<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $nomebd = "p2";

   $bd = mysqli_connect($host, $user, $pass, $nomebd);

   if($bd->connect_error){
       die('Falha na Conexão!'.$bd->connect_error);
       
   }

?>