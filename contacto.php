<?php
    include('fmontacabecera.php');
    montacabecera('Contacto');

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
    var fondo = document.getElementById('cover');
    fondo.id=('cover-contacto');
</script>
    <div class="container">
        <div class="row justify-content-center">
            <div id="contacto-form" class="col-sm-6">
                <div class="form-top">
                    <div>
                        <h3>Contactanos</h3><i id="sobre" class="fa fa-envelope-o"></i>
                        <p>Rellena el formulario para mandarnos un mensaje:</p>
                    </div>
                        
                </div>
                <div class="form-bottom contact-form">
                    <form role="form" action="assets/contact.php" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Email..." class="contact-email form-control" id="contact-email">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-subject">Asunto</label>
                            <input type="text" name="subject" placeholder="Asunto..." class="contact-subject form-control" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-message">Mensaje</label>
                            <textarea name="message" placeholder="Mensaje..." class="contact-message form-control" rows="7" id="contact-message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-info">Send message</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
<?php
    include('templates/footer.html')
?>