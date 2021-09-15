<html>
    <head>
        <meta charset="UTF-8">
        <title> Curso de Php </title>
    </head>
    <body>
        <div>
        <?php 
            $nome = isset ($_GET["nome"]) ? $_GET["nome"] : "[Não informado]";
            $nome = isset ($_GET["ano"]) ? $_GET["ano"] : 0;
            $sexo = isset ($_GET["sexo"]) ? $_GET["sexo"] : "[Sem sexo]";
            $idade = date("Y") - $ano;
            echo "$nome e $sexo e tem $idade anos";
            ?> 
        </div>
    </body>
</html>