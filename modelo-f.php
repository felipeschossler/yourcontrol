<?php 
    //Marca
    include("marca-c.php");
    $grupoTC = selectTodosMarca();
    
?>

<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Adicionar Modelo</title>
            <meta charset="utf-8">
        </head>
        
            <form name="Modelos" action="modelo-c.php" method="POST">
    
                <table border="1">
                    <tbody>
    
                        <tr>
                            <td>Código Modelo</td>
                            <td><input type="text" name="idModelo" value="" disabled="true" /></td>
                        </tr> 
                        <tr>
                            <td>Nome Modelo</td>
                            <td><input type="text" name="nomeModelo" value="" disabled="true" /></td>
                        </tr>
                        <tr>
                            <td>Marca</td>
                            <td>
                                <select name="idMarca">
                                    <?php
                                        foreach ($grupo as $Marcas)
                                        echo '<option name=" '.$Marcas['idMarca'].' " value=" ' . $Marcas['idMarca'] . '"> ' . $Marcas['nomeMarca'] . ' </option>';
                                    ?>
                                </select> 
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" name="acao" value="Enviar" /></td>
                        </tr>
    
                    </tbody>
                </table>
    
            </form>  
</html>