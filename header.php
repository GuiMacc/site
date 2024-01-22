<?php
$servidor = "localhost";
$userBaseDados = "site_proj_user";
$passwordBaseDados = "guijojo14";
$baseDados = "site_proj";

$ligacaoDB = mysqli_connect($servidor, $userBaseDados, $passwordBaseDados, $baseDados)
    or die("Erro de acesso à Base de Dados.");

?>


<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>+Neve</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- FANCY BOX -->
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
    

    <!-- JAVASCRIPT-->
    <script src="app.js"></script>

    <!-- estilos -->
    <link rel="stylesheet" href="estilos.css">
</head>


<body>

    <?php

    /*
    echo "Olá Mundo!!!";
    echo "<br>Como estão?";
    echo "<br>" . 3765 * 3; // CONCATENAR
    echo "<br>Eu tenho " . (2023 - 1996) . " anos";

    $nome = 50.35;
    $nome = true;
    $nome = null;
    $nome = "Gui";

    $ano = 1996;
    echo "<br>" . $nome . " tem " . (date("Y") - $ano) . " anos.";

    echo "<h4>IF ELSE ELSEIF</h4>";

    $nota = 12;

    if ($nota <0 or $nota > 20) {
        echo "Nota inválida... seu este seu aquele";
    } elseif ($nota < 10){
        echo "Negativa";
    } elseif ($nota < 14) {
        echo "Suficiente";
    } elseif ($nota < 18) {
        echo "Bom";
    } else {
        echo "Excelente";
    }

    echo "<h4>SWITCH</h4>";

    $cor = "vermelho";

    switch (strtoupper($cor)) {
        case strtoupper("verde"):
            echo "verde";
            break;
        case strtoupper("vermelho"):
            echo "vermelho";
            break;
        case strtoupper("azul"):
            echo "azul";
            break;
        default:
            echo "não existe";
    }

    echo "<h4>LOOPS FOR / WHILE / DO WHILE</h4>";

    for ($i = 1; $i <= 10; $i++) {
        echo "Nº $i <br>";
    }

    echo "<br>";

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . $j * $i . "<br>";
        }
        echo "<br>";
    }

    $i = 1;
    while ($i <=10) {
        echo $i;

        $i++;
    }

    echo "<br><br>";

    $i = 1;
    do {
        echo $i;

        $i++;
    } while ($i <= 10);

    echo "<h4>ARRAY UNIDIMENSIONAL INDEXADO</h4>";

    $carros = array(
        "Picasso",
        "Panda",
        "Aston Martin"
    );

    echo $carros[0];

    echo "<h4>ARRAY UNIDIMENSIONAL ASSOCIATIVO</h4>";

    $carros = array(
        "familia" => "Picasso",
        "cidade" => "Panda",
        "sonho" => "Aston Martin"
    );

    echo $carros["familia"];

    echo "<h4>ARRAY BIDIMENSIONAL INDEXADO</h4>";

    $carros = array(
        array("Panda", "branco", 2022),
        array("Picasso", "preto", 2008),
        array("Aston Martin", "cinza", 2029)
    );

    for ($i = 0; $i < count($carros); $i++) {
        echo $carros[$i][0] . " é " . $carros[$i][1] . " e é de " . $carros[$i][2] . "<br>";
    }

    echo "<br><br>";

    foreach ($carros as $value) {
        echo $value[0] . " é " . $value[1] . " e é de " . $value[2] . "<br>";
    }

    echo "<h4>ARRAY BIDIMENSIONAL ASSOCIATIVO</h4>";

    $carros = array(
        array("modelo" => "Panda", "cor" => "branco", "ano" => 2022),
        array("modelo" => "Picasso", "cor" => "preto", "ano" => 2008),
        array("modelo" => "Aston Martin", "cor" => "cinza", "ano" => 2029)
    );

    foreach($carros as $value) {
        echo $value["modelo"] . " é " . $value["cor"] . " e é de " . $value["ano"] . "<br>";
    }

    echo "<h4>DESAFIO IMAGEM E TITULO</h4>";
    
        - CRIA UM ARRAY COM 6 IMAGENS, ou seja, 
        nome de ficheiro e título para cada imagem
        - CRIA UMA LISTAGEM DAS IMAGENS, ou seja, 
        as imagems aparecerem com título, por baixo ou lado
    

    $gal = array(
        array("imagem" => "ski_gal1.jpg", "titulo" => "Alojamentos"),
        array("imagem" => "ski_gal2.jpg", "titulo" => "Descanço"),
        array("imagem" => "ski_gal3.jpg", "titulo" => "Cadeirinhas"),
        array("imagem" => "ski_gal4.jpg", "titulo" => "Pistas"),
        array("imagem" => "ski_gal5.jpg", "titulo" => "Hub"),
        array("imagem" => "ski_gal6.jpg", "titulo" => "Vista"),
    );

    foreach($gal as $value) {
        echo "<br><div><img src='img/" . $value["imagem"] . "' style='max-width:300px'>";
        echo "<h5>" . $value["titulo"] . "</h5></div>";
    }

    */
?>

    <header class="container d-none d-md-block">
        <div class="row">
            <div id="logo" class="col-3">
                <img src="img/ski_logo.png" alt="logo ski" class="img-fluid">
                <h2>+Neve</h2>
            </div>
            <div id="banner" class="col bg-success d-flex">
                <h4>Não existe neve a mais!</h4>
            </div>
        </div>
    </header>


    <?php
        $pagina = str_replace(".php", "", basename($_SERVER['PHP_SELF']));
    ?>
    <nav class="navbar navbar-expand-md bg-body-tertiary">
        <div class="container">
          <a class="navbar-brand d-md-none" href="#">
            <img src="img/ski_logo.png" alt="logo ski">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link <?= ($pagina== "index") ? "active" : ""?>"  href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($pagina== "sobrenos") ? "active" : ""?>" href="sobrenos.php">Sobre nós</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($pagina== "servicos") ? "active" : ""?>" href="servicos.php">Serviços</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($pagina== "galeria") ? "active" : ""?>" href="galeria.php">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link <?= ($pagina== "contactos") ? "active" : ""?>" href="contactos.php">Contactos</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>