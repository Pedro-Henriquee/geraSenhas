<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action='' method='POST'>
            <input type="submit" value="Clique" name="enviar">
        </form>    
        <?php
        define('max', 10);
        if (isset($_POST['enviar'])) {

            function geraSenhas() {
                $tamanho = rand(5, max);
                $sItens = '0123456789abcdefghijklmnopqrstuvxyw@!.';
                $senhaFormada = str_shuffle($sItens);
                $senha = substr($senhaFormada, 0, $tamanho);
                return $senha;
            }
        }
        echo geraSenhas();
        ?>
    </body>
</html>
