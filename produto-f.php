<?php 
    //Modelo
    include("modelo-c.php");
    $grupoTC = selectTodosModelo();
?>

<DOCTYPE html>
    <html lang="pt-br">
        <head>
            <title>Adicionar Produto</title>
            <meta charset="utf-8">
        </head>
        
            <form name="Produtos" action="produto-c.php" method="POST">
    
                <table border="1">
                    <tbody>
    
                        <tr>
                            <td>Código Produto</td>
                            <td><input type="text" name="idProduto" value="" disabled="true" /></td>
                        </tr> 
                        <tr>
                            <td>Nome Produto</td>
                            <td><input type="text" name="nomeProduto" value="" disabled="true" /></td>
                        </tr>
                        <tr>
                            <td>Modelo</td>
                            <td>
                                <select name="idModelo">
                                    <?php
                                        foreach ($grupo as $Modelos)
                                        echo '<option name=" '.$Modelos['idModelo'].' " value=" ' . $Modelos['idModelo'] . '"> ' . $Modelos['nomeModelo'] . ' </option>';
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