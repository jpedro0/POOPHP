<html>
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 - Classes</title>
    </head>
    <body>
        <pre>
        <?php
            require_once "Model/Caneta.php";
            require_once "Model/Lutador.php";
            require_once "Model/Lutar.php";
            $caneta = new Caneta("teste", "50%", "Red", 0.5, true);
            $pessoa[0] = new Lutador("Teste", "Brasil", 30, 1.75, 68.8,11,2,1);
            $pessoa[1] = new Lutador("Teste1", "Brasil", 30, 1.75, 68.8,11,2,1);
            print_r($caneta);

            $caneta->rabiscar();
            $caneta->destampar();
            $caneta->rabiscar();

            $pessoa->status();

            $luta = new Lutar();

            $luta->marcarLuta($pessoa[0], $pessoa[1]);
            $luta->lutar();

        ?>
    </body>
    </pre>
</html>