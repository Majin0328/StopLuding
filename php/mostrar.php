<!DOCTYPE html>
<html lang="ES">

<body>
    <table>
    <thead>
        <tr>
            <td>IDuser</td>
            <td>UserName</td>
            <td>UserCorreo</td>
            <td>UserContra</td>
            <td>UserTel</td>
            
            
        </tr>
        </thead>
        
        <tbody>
            
        <?php 
            require_once "conexion.php";
            $BD = new conexion();
            
            $usuarios = $BD -> getusuarios();
            
           foreach ($usuarios as $user) {
                echo "<tr>";
                echo "<td>{$user['UserID']}</td>";
                echo "<td>{$user['UserName']}</td>";
                echo "<td>{$user['UserCorreo']}</td>";
                echo "<td>{$user['UserContra']}</td>";
                echo "<td>{$user['UserTel']}</td>";
                

                echo "</tr>";
            }
            
        
            
            ?>
            
            
        </tbody>
    </table>
    </body>
</html>      
      