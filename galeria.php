<?php
include "header.php";
?>
    

    <section id="galeria" class="container">
        <div class="row">
            <div class="col">
                <h2>Galeria <span>de</span> Fotos</h2>
            </div>
        </div>

        <div class="row">

<?php

    $sql = "SELECT ficheiro, titulo
            FROM imagem
            WHERE activo = 1
            ORDER BY ordem DESC, id_imagem DESC
            ";

   $listaResgistos = mysqli_query($ligacaoDB, $sql);

    while ($value = mysqli_fetch_assoc($listaResgistos)) {
        
        ?>
    

            <div class="col-6 col-md-4 col-lg-3 col-xxl2">
                <div class="gal">
                    <a data-fancybox="+neve" href="img/galeria/<?= $value["ficheiro"] ?>" target="_blank">
                        <img src="img/galeria/<?= $value["ficheiro"] ?>">
                        <h5><?= $value["titulo"] ?></h5>
                    </a>
                </div>
            </div>

            <?php
        }
        ?>

        </div>

        <div class="row">
            <div class="col">
                <h2>Galeria <span>de</span> Videos</h2>
            </div>
        </div>

        <div class="row">

        <?php

    $sql_v = "SELECT ficheiro, titulo
            FROM video
            WHERE activo = 1
            ORDER BY ordem DESC, id_video DESC
            ";

   $listaResgistos_V = mysqli_query($ligacaoDB, $sql_v);

    while ($value = mysqli_fetch_assoc($listaResgistos_V)) {
        
        ?>

            <div class="col-6 col-md-4 col-lg-3 col-xxl2">
                <div class="gal">
                    <a data-fancybox="+vid" href="https://youtu.be/<?= $value["ficheiro"] ?>" target="_blank">
                        <img src="https://img.youtube.com/vi/<?= $value["ficheiro"] ?>/maxresdefault.jpg">
                        <h5><?= $value["titulo"] ?></h5>
                    </a>
                </div>
            </div>
            
            <?php
        }
        ?>

        </div>

    </section>

    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>

<?php
include "footer.php";
?>