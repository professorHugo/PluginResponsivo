<!DOCTYPE html>
<html lang="pt-BR" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Veículos BRDealer</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Veículos</h1>
    <?php
        $link = "EXPORT_B0487_487002.xml";
        echo $xml = simplexml_load_file($link)->CargaVeiculos;
    
        foreach($xml->Veiculo as $item):
        $i = 1;
        //faz o loop nas tag com o nome "item"
        //exibe o valor das tags que estão dentro da tag "item"
        //utilizamos a função "utf8_decode" para exibir os caracteres corretamente
        echo "<strong>Loja:</strong> ".utf8_decode($item -> Loja)."<br />";
        echo "<strong>Código:</strong> ".utf8_decode($item -> Codigo)."<br />";
        echo "<strong>Tipo:</strong> ".utf8_decode($item -> Tipo)."<br />";
        echo "<strong>ZeroKM:</strong> ".utf8_decode($item -> ZeroKM)."<br />";
        echo "<strong>Placa:</strong> ".utf8_decode($item -> Placa)."<br />";
        echo "<strong>Marca:</strong> ".utf8_decode($item -> Marca)."<br />";
        echo "<strong>ModeloVersao:</strong> ".utf8_decode($item -> ModeloVersao)."<br />";
        echo "<strong>AnoFabr:</strong> ".utf8_decode($item -> AnoFabr)."<br />";
        echo "<strong>AnoModelo:</strong> ".utf8_decode($item -> AnoModelo)."<br />";
        echo "<strong>Combustivel:</strong> ".utf8_decode($item -> Combustivel)."<br />";
        echo "<strong>Cambio:</strong> ".utf8_decode($item -> Cambio)."<br />";
        echo "<strong>Portas:</strong> ".utf8_decode($item -> Portas)."<br />";
        echo "<strong>Cor:</strong> ".utf8_decode($item -> Cor)."<br />";
        echo "<strong>Km:</strong> ".utf8_decode($item -> Km)."<br />";
        echo "<strong>Preco:</strong> ".utf8_decode($item -> Preco)."<br />";
        echo "<strong>Equipamentos:</strong> ".utf8_decode($item -> Equipamentos)."<br />";
        echo "<strong>Detalhes:</strong> ".utf8_decode($item -> Detalhes)."<br />";
        echo "<strong>Observacao:</strong> ".utf8_decode($item -> Observacao)."<br />";
        echo "<strong>EmDestaque:</strong> ".utf8_decode($item -> EmDestaque)."<br />";
        echo "<strong>Fotos:</strong> <br />";
        foreach($item->Fotos->FotoURL as $itemFotos){
            ?>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                <img class="img-responsive" src="<?php echo utf8_decode($itemFotos)?>" alt="<?php echo utf8_decode($item -> Marca)?>">
            </div>
            <?php
        }
        ?>
        <div class="clearfix"></div>
        <?php
    endforeach; //fim do foreach
    ?>
</body>
</html>