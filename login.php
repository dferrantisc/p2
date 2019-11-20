<?php

    require("conec.php");
    
    $user = $_POST["user"];

    $pass = $_POST["password"];

        $sql = "SELECT * FROM login WHERE user ='$user' AND pass='$pass'";


            $result = $bd->query($sql);
                //print_r($result->num_rows );

                    if($result->num_rows>0){
                        echo "Logado!";
                        
                    }else{
                        
                        header("Location:index.html");
                    }
?>