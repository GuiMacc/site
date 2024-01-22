<?php
include "header.php";
?>
    

    <section id="contactos" class="container">
        <div class="row">
            <div class="col">
                <h2>Contactos</h2>
            </div>
        </div>
        <div class="row">

            <div class="col-6 col-lg-4">
                <p>
                    Visite-nos
                    <br>Almada | Sede
                    <br>Agência de turismo +Neve
                    <br>Rua Pedro Nunes nº8
                    <br>2805-225 Almada
                    <br>
                    <br><a href="mailto:+neve@business.com">+neve@business.com</a>
                    <br><a href="tel:213123123">213123123</a>
                </p>
            </div>

            <div class="col-6 col-lg-4">
                <form action="index.html" method="POST" onsubmit="return validarForm();">
                    <div class="mb-3">
                        <label for="formName" class="form-label" name="formName">Nome</label>
                        <input type="text" required id="formName" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formEmail" class="form-label" name="formName">Email</label>
                        <input type="email" id="formEmail" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="formMessage" name="formName">Mensagem</label>
                        <textarea class="form-control" id="formMessage" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <input type="checkbox" id="formNewsletter" class="form-check-input">
                        <label for="formNewsletter" class="form-check-label" name="formName">Quero subscrever!</label>
                    </div>
                  </form> 
            </div>

            <div class="col-6 col-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d952.1056960422175!2d-9.160248371451718!3d38.674712345237445!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1934e39d2e716d%3A0xb47d15b44eda358e!2sR.%20Pedro%20Nunes%208%2C%202805-225%20Almada!5e1!3m2!1sen!2spt!4v1695031960297!5m2!1sen!2spt" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

<?php
include "footer.php";
?>