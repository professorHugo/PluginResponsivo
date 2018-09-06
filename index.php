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
    <header class="bg-warning"><h1>Veículos</h1></header>
    <div class="content-fluid col-md-10 col-md-push-1">
    <?php
        //Declarar o link do arquivo em XML
        $link1 = 'http://www.brdealer.com.br/portais/EXPORT_B0487_487001.xml';
        
        
        //Carregar o Link do arquivo XML
        $xml = simplexml_load_file($link1);
        
        echo "<strong>Link Carregado:</strong> $link1 <br>";
    
        //faz o loop nas tag com o nome "Veiculo"
        foreach($xml->Veiculo as $Veiculo):
        
        //exibe o valor das tags que estão dentro da tag "Veiculo"
        //utilizamos a função "utf8_encode(utf8_decode())" para exibir os caracteres corretamente
        echo "<strong>Loja:</strong> ".utf8_encode(utf8_decode($Veiculo -> Loja))."<br />";
        echo "<strong>Código:</strong> ".utf8_encode(utf8_decode($Veiculo -> Codigo))."<br />";
        echo "<strong>Tipo:</strong> ".utf8_encode(utf8_decode($Veiculo -> Tipo))."<br />";
        echo "<strong>ZeroKM:</strong> ".utf8_encode(utf8_decode($Veiculo -> ZeroKM))."<br />";
        echo "<strong>Placa:</strong> ".utf8_encode(utf8_decode($Veiculo -> Placa))."<br />";
        echo "<strong>Marca:</strong> ".utf8_encode(utf8_decode($Veiculo -> Marca))."<br />";
        echo "<strong>ModeloVersao:</strong> ".utf8_encode(utf8_decode($Veiculo -> ModeloVersao))."<br />";
        echo "<strong>AnoFabr:</strong> ".utf8_encode(utf8_decode($Veiculo -> AnoFabr))."<br />";
        echo "<strong>AnoModelo:</strong> ".utf8_encode(utf8_decode($Veiculo -> AnoModelo))."<br />";
        echo "<strong>Combustivel:</strong> ".utf8_encode(utf8_decode($Veiculo -> Combustivel))."<br />";
        echo "<strong>Cambio:</strong> ".utf8_encode(utf8_decode($Veiculo -> Cambio))."<br />";
        echo "<strong>Portas:</strong> ".utf8_encode(utf8_decode($Veiculo -> Portas))."<br />";
        echo "<strong>Cor:</strong> ".utf8_encode(utf8_decode($Veiculo -> Cor))."<br />";
        echo "<strong>Km:</strong> ".utf8_encode(utf8_decode($Veiculo -> Km))."<br />";
        echo "<strong>Preco:</strong> ".utf8_encode(utf8_decode($Veiculo -> Preco))."<br />";
        echo "<strong>Equipamentos:</strong> ".utf8_encode(utf8_decode($Veiculo -> Equipamentos))."<br />";
        echo "<strong>Detalhes:</strong> ".utf8_encode(utf8_decode($Veiculo -> Detalhes))."<br />";
        echo "<strong>Observacao:</strong> ".utf8_encode(utf8_decode($Veiculo -> Observacao))."<br />";
        echo "<strong>EmDestaque:</strong> ".utf8_encode(utf8_decode($Veiculo -> EmDestaque))."<br />";
        echo "<strong>Fotos:</strong> <br />";
        foreach($Veiculo->Fotos->FotoURL as $VeiculoFotos){
            ?>
            <div class="col-xs-6 col-sm-6 col-md-4 col-lg-2">
                <img class="img-responsive" src="<?php echo utf8_encode(utf8_decode($VeiculoFotos))?>" alt="<?php echo utf8_encode(utf8_decode($Veiculo -> Marca))."-".utf8_encode(utf8_decode($Veiculo -> ModeloVersao))?>" title="<?php echo utf8_encode(utf8_decode($Veiculo -> Marca))."-".utf8_encode(utf8_decode($Veiculo -> ModeloVersao))?>">
            </div>
            <?php
        }
        ?>
        <div class="clearfix"></div>
        <?php
    endforeach; //fim do foreach
    ?>
    </div>
</body>
</html>