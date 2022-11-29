<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>PHP6 OOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <h1>PHP6 OOP</h1>
    
    <?php 
    include "./Coin.php";
    
    $moneta = new Coin();
    $moneta1 = new Coin();
    $moneta2 = new Coin();
    $moneta3 = new Coin();

    $moneta->setSalis("Vokietija");
    $moneta->setVerte("20 markių (4850 eur)");
    $moneta->setPagaminimometai("1890");
    $moneta->setMedziaga("auksas");
    // print_r($moneta);
    // echo "<br>";
    $moneta1->setSalis("Vengrija");
    $moneta1->setVerte("20 kronų (550 eur)");
    $moneta1->setPagaminimometai("1893");
    $moneta1->setMedziaga("auksas");
    // print_r($moneta1);
    // echo "<br>";
    $moneta2->setSalis("JAV");
    $moneta2->setVerte("1 doleris (40 eur)");
    $moneta2->setPagaminimometai("1922");
    $moneta2->setMedziaga("sidabras");
    // print_r($moneta2);
    // echo "<br>";
    $moneta3->setSalis("Lietuva");
    $moneta3->setVerte("2 litai (19,95 eur)");
    $moneta3->setPagaminimometai("1925");
    $moneta3->setMedziaga("sidabras");
    // print_r($moneta3);
    // echo "<br>";
    $coins = [$moneta, $moneta1, $moneta2, $moneta3];
    // foreach ($coins as $coin) {
    //     echo $coin->getSalis() . ", ";
    //     echo $coin->getVerte() . ", ";
    //     echo $coin->getPagaminimometai() . ", ";
    //     echo $coin->getMedziaga() . ", ";
    // }
    // echo "<br>";
    // echo "<br>";
   ?>

    <div class="container">
        <table class="table table-success table-striped-columns caption-top">
            <caption><h3>Monetos</h3></caption>
            <thead>
                <tr>
                    <th class="col-3" scope="col">Šalis</th>
                    <th class="col-3" scope="col">Vertė</th>
                    <th class="col-3" scope="col">Pegaminimo metai</th>
                    <th class="col-3" scope="col">Medžiaga</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($coins as $coin) { ?> 
                <tr>
                    <td><?php echo $coin->getSalis(); ?></td>
                    <td><?php echo $coin->getVerte(); ?></td>
                    <td><?php echo $coin->getPagaminimometai(); ?></td>
                    <td><?php echo $coin->getMedziaga(); ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    
    <?php
    include "./Phone.php";
    
    $telefone = new Phone("Apple", "2022", "iPhone 14", true);
    // print_r($telefone);
    // echo "<br>";
    $telefone1 = new Phone("Samsung", "2021", "Galaxy S22", false);
    // print_r($telefone1);
    // echo "<br>";
    $telefone2 = new Phone("Xiaomi", "2022", "12T", true);
    // print_r($telefone2);
    // echo "<br>";
    $telefone3 = new Phone("Nokia", "2020", "225 4G", false);
    // print_r($telefone3);
    // echo "<br>";
        $phones = [$telefone, $telefone1, $telefone2, $telefone3];
    // foreach ($phones as $phone) {
    //     echo $phone->gamintojas . ", ";
    //     echo $phone->metai . ", ";
    //     echo $phone->modelis . ", ";
    //     echo $phone->bukle . ", ";
    // }
    echo "<br>";
    echo "<br>";
    ?>

    <div class="container">
        <table class="table table-success table-striped-columns caption-top">
            <caption><h3>Telefonai</h3></caption>
            <thead>
                <tr>
                    <th class="col-3" scope="col">Gamintojas</th>
                    <th class="col-3" scope="col">Metai</th>
                    <th class="col-3" scope="col">Modelis</th>
                    <th class="col-3" scope="col">Būklė</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($phones as $phone) { ?> 
                <tr>
                    <td><?php echo $phone->gamintojas; ?></td>
                    <td><?php echo $phone->metai; ?></td>
                    <td><?php echo $phone->modelis; ?></td>
                    <td><?php echo $phone->bukle ? "naujas" : "dėvėtas"; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>

</body>
</html>