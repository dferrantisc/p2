<?php

    $masqli = new mysqli('host','root','pass','p2') or die(mysqli_error($mysqli));

    if(){

    }else{
        
    }


?>

<?php

    require("conec.php");



?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    </head>
    
    <body>

    <h2>Controle</h2>
            <table> 
            <tr>
                <th>Nome de Usuários</th>
                    <th>Senha dos Usuários</th>
            
            </tr>

    <?php

        $sql = "SELECT * FROM login";

        $result= $bd->query($sql);
        echo "<pre/>";
        var_dump($result->fetch_all()[0][1]);
        echo "<pre/>";

        $ruser= $result->fetch_all();

        for($i=0;$i<10;$i++)
        {
        
            echo "das";
       
    ?>

            <tr>
                <td><?php echo $ruser[$i][1]; ?></td>
                <td><?php echo $ruser[$i][2]; ?></td>
                        
            </tr>




    <?php
         }
    ?>

            
            </table>        
        
    </body>

</html>