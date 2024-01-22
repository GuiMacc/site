<footer class="container bg-warning">
        <div class="row">
            <div class="col-3" class="list-group list-group-horizontal">
                <li class="list-group-item">
                        <i class="fa-solid fa-copyright d-lg-none"></i>
                        <span class="d-none d-lg-inline">COPYRIGHT</span>
                        <span>2023</span>
                </li>
            </div>

            <div class="col d-flex justify-content-end">
                <ul class="list-group list-group-horizontal">

<?php

$sql = "SELECT ficheiro, titulo
        FROM sociais
        WHERE activo = 1
        ORDER BY ordem DESC, id_soc
        ";

$listaResgistos_Soc = mysqli_query($ligacaoDB, $sql);

while ($value = mysqli_fetch_assoc($listaResgistos_Soc)) {
    
    ?>

                    <li class="list-group-item">
                        <a href="https://www.<?= $value["titulo"] ?>.com" target="_blank">
                            <i class="fa-brands fa-<?= $value["ficheiro"] ?>"></i>
                            <span class="d-none d-lg-inline"><?= $value["titulo"] ?></span>
                        </a>
                    </li>
                    
                <?php
                }
                ?>
                    
                </ul>
            </div>
            
        </div>

    </footer>

</body>
</html>