<?php include("includes/head.php"); ?>
<?php include("includes/top-bar.php"); ?>
        
        <section class="result-container">
            
            <div class="result-header">
            <!-- CALL TO ACTION -->
            <h2>Esta es tu situaci&oacute;n de reciclaje en <strong>Ag&utilde;ero 2502, Ciudad de Buenos Aires</strong></h2>
            <!-- <h3>Ingresá tu ubicación para conocer opciones de reciclaje.</h3> -->
            <a href="#" class="result-header-action btn btn-link">No ves resultados?</a>
            </div>
            <div class="result-grid">
                
                <?php include("includes/results/reciclables-caba.php"); ?>

                <?php include("includes/results/organicos.php"); ?>

                <?php include("includes/results/basura.php"); ?>

                <?php include("includes/results/pilas.php"); ?>

                <?php include("includes/results/aceite.php"); ?>

                <?php include("includes/results/raee.php"); ?>

                <?php include("includes/results/otros.php"); ?>

            </div>

        </section><!-- 

         --><aside class="side-content">
            <p>Extra Content</p>
        </aside>

<?php include("includes/footer.php"); ?>

