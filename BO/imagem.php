<?php
include "header.php";
?>

<section id="sobrenos" class="container">
    <div class="row">
        <div class="col">
            <h2>Imagem</h2>
        </div>
    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-4">


            <?php
            $formNome = $formFicheiro = $formOrdem = $formActivo = "";
            if ($_SERVER['REQUEST_METHOD'] == "POST") {

                $formNome = $_POST["nome"];
                $formOrdem = $_POST["ordem"];
                if ($formOrdem == "") $formOrdem = 0;
                $formActivo = (isset($_POST["activo"])) ? $_POST["activo"] : 0;
                $formFicheiro = $_FILES["ficheiro"]["name"];

                $target_dir = "../img/galeria/";
                $target_file = $target_dir . basename($_FILES["ficheiro"]["name"]);
                $uploadOk = true;
                $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

                // Check if image file is a actual image or fake image
                if ($uploadOk) {
                    $check = getimagesize($_FILES["ficheiro"]["tmp_name"]);
                    if ($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                    } else {
                        echo "File is not an image.";
                        $uploadOk = false;
                    }
                }

                // Check if file already exists
                if ($uploadOk and file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = false;
                }

                // Check file size
                if ($uploadOk and $_FILES["ficheiro"]["size"] > 2000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = false;
                }

                // Allow certain file formats
                if (
                    $uploadOk and
                    $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" && $imageFileType != "webp"
                ) {
                    echo "Sorry, only JPG, JPEG, PNG, GIF & WEBP files are allowed.";
                    $uploadOk = false;
                }

                // Check if $uploadOk is set to 0 by an error
                if (!$uploadOk) {
                    echo "Sorry, your file was not uploaded.";
                    // if everything is ok, try to upload file
                } else {
                    if (move_uploaded_file($_FILES["ficheiro"]["tmp_name"], $target_file)) {
                        echo "The file " . htmlspecialchars(basename($_FILES["ficheiro"]["name"])) . " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        $uploadOk = false;
                    }
                }


                if ($uploadOk) {

                    $sql = "INSERT INTO imagem (titulo, ficheiro, ordem, activo)
                        VALUES ('$formNome', '$formFicheiro', '$formOrdem', '$formActivo') ";

                    $listaRegistos = mysqli_query($ligacaoDB, $sql);

                    if ($listaRegistos) {

                        echo '<div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Inserção com sucesso!</h4>
                    </div>';
                        $formNome = $formFicheiro = $formOrdem = $formActivo = "";
                    } else {
                        echo '<div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Erro na inserção. Tente novamente.</h4>
                    </div>';
                    }
                }
            }
            ?>

            <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="nome" class="form-label">Título</label>
                    <input type="text" value="<?= $formNome ?>" class="form-control" id="nome" name="nome" required>
                </div>
                <div class="mb-3">
                    <label for="ficheiro" class="form-label">Imagem</label>
                    <input type="file" class="form-control" id="ficheiro" name="ficheiro" required>
                </div>
                <div class="mb-3">
                    <label for="ordem" class="form-label">Ordem</label>
                    <input type="text" value="<?= $formOrdem ?>" class="form-control" id="ordem" name="ordem">
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="activo" name="activo" checked>
                    <label class="form-check-label" for="activo">
                        Activo
                    </label>
                </div>
                <button type="submit" class="btn btn-primary">Inserir</button>
            </form>

        </div>
    </div>
</section>


<?php
include "footer.php";
?>