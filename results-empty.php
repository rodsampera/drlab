<?php include("includes/head.php"); ?>
<?php include("includes/top-bar.php"); ?>
        
<section class="result-container">
    <div class="wrapper">

        <div class="result-header">
            <!-- CALL TO ACTION -->
            <h2>Esto es lo que podés hacer en <strong>Algún otro lugar</strong>:</h2>
            <!-- <h3>Ingresá tu ubicación para conocer opciones de reciclaje.</h3> -->
            <a id="pick-location" href="#" class="result-header-action btn btn-link">¿Estás en otro lugar?</a>
        </div>
        <div class="result-grid">

            <?php include("includes/results/empty-cta.php"); ?>

            <?php include("includes/results/reciclables-informal.php"); ?>

            <?php include("includes/results/organicos.php"); ?>

            <?php include("includes/results/basura.php"); ?>

            <?php include("includes/results/pilas.php"); ?>

            <?php include("includes/results/aceite.php"); ?>

            <?php include("includes/results/otros.php"); ?>

        </div>
        
        
    </div>
</section>



<!-- <aside class="side-content">
    <p>Extra Content</p>
</aside> -->

<?php include("includes/modals/modal-ubicacion.php"); ?>

<?php include("includes/footer.php"); ?>

