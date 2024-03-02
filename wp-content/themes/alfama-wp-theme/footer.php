<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage None Plate
 * @since None Plate 1.0
 */
?>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="marca-footer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/alfamaweb-footer.png" class="img-card-experiencia img-fluid">
                </div>
            </div>
            <div class="divisoria">
                <hr>
            </div>
            <div class="col-md-12">
                <div class="enderecos">
                    <div class="info-enderecos">
                        <p class="filial">FILIAL SÃO PAULO</p>
                        <p class="endereco">R. Paes Leme, 215, - Sala 1704 - Pinheiros 05424-150 - São Paulo/SP</p>
                        <p class="telefone">(79) 3302-7830</p>
                    </div>
                    <div class="info-enderecos">
                        <p class="filial">FILIAL ARACAJU</p>
                        <p class="endereco">Av. Rotary, 295 - Atalaia - 49037-550 - Aracaju/SE</p>
                        <p class="telefone">(79) 3302-7830</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Footer Links Libraries -->
<!-- Prefix Free -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/prefixfree/prefixfree.min.js'></script>

<!-- Alertify -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/alertify/js/alertify.js'></script>

<!-- Lightbox -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/lightbox/js/lightbox.min.js'></script>

<!-- Lince Form -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/linceform/linceform.js'></script>

<!-- Bootstrap -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/bootstrap/bootstrap.min.js'></script>

<!--  Cycle 2  -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.min.js'></script>
<!-- <script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.carousel.min.js'></script> -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/cycle2/jquery.cycle2.swipe.min.js'></script>

<!--  if IE 8  -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/ifIE/ifIE.js'></script>

<!--  WOW  -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/libs/wow/wow.min.js'></script>

<!-- Main JS -->
<script type='text/javascript' src='<?php echo get_template_directory_uri(); ?>/assets/js/app.js'></script>

<!-- Footer Tags -->
<?php wp_footer(); ?>

</body>


</html>