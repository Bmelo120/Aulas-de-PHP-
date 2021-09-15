<html>
    <head>
        <?php 
        $txt = isset($_GET["t"])?$_GET["t"]:"Texto Generico";
        $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
        $cor = isset($_GET["cor"])?$_GET["cor"]:"#0000000";
        ?>
        <meta charset="UTF-8">
        <title> Curso de Php </title>
        <style>
            span.texto { /** Agrupar elementos para fins de estilo */ 
                font-size: <?php echo $tam; ?>;
                color: <?php echo $cor; ?>;
            }

        </style>
    </head>
    <body>
        <div>
            <?php 
            echo "<span class='texto'>$txt</span>";
            ?>
        
        </div>
    </body>
</html>