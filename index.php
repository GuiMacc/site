<?php
include "header.php";
?>
    <section class="container">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <?php

    $sql = "SELECT ficheiro, titulo, descr
        FROM carousel
        WHERE activo = 1
        ORDER BY ordem DESC, id_carousel
        ";
        $listaResgistos_C = mysqli_query($ligacaoDB, $sql);
        
        $i=0;
        while ($value = mysqli_fetch_assoc($listaResgistos_C)) {
            
            ?>
              <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="<?= $i ?>"
                            <?= ($i == 0) ? "class='active'" : '' ?>></button>

                <?php
                    $i++;
                }
                ?>
                </div>
            <div class="carousel-inner">
                
            <?php
                        $i = 0;
                        mysqli_data_seek($listaResgistos_C, 0); 
                        while ($value = mysqli_fetch_assoc($listaResgistos_C)) {
                        ?>

                        <div class="carousel-item <?= ($i == 0) ? "active" : '' ?>">
                            <img src="img/<?= $value['ficheiro'] ?>" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5><?= $value['titulo'] ?></h5>
                                <p><?= $value['descr'] ?></p>
                            </div>
                        </div>

                        <?php
                            $i++;
                        }
                        ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="destaques" class="container">
        <div class="row">

        <?php

$sql = "SELECT ficheiro, titulo
        FROM destaques
        WHERE activo = 1
        ORDER BY ordem DESC, id_destaques
        ";

$listaResgistos_D = mysqli_query($ligacaoDB, $sql);

while ($value = mysqli_fetch_assoc($listaResgistos_D)) {
    
    ?>

            <div class="col">
                <div class="item">
                    <img src="img/<?= $value["ficheiro"] ?>" class="d-block" alt="...">
                    <h5><?= $value["titulo"] ?></h5>
                </div>
            </div>

            <?php
        }
        ?>
            
        </div>
    </section>

    <script>
        
        const myCarouselElement = document.querySelector('#myCarousel')
    
        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 7000,
            touch: false
        } )
    </script>

<?php
include "footer.php";
?>