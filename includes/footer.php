<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>
        <script type="text/javascript" src="js/jquery.tooltipster.min.js"></script>
        
        <script>
        $(document).ready(function(){

            $('.result-grid').isotope({
              // options
              itemSelector: '.result-wrapper',
              layoutMode: 'masonry',
              
            });
            $('.result-image img').on('load', function(){
                $('.result-grid').isotope({
                  // options
                  itemSelector: '.result-wrapper',
                  layoutMode: 'masonry',
                });
            });

             $('.tooltip').tooltipster({
              maxWidth: 280,
             });

            // $('.result-recyclables').isotope({
            //   // options
            //   itemSelector: '.result-material-item',
            //   layoutMode: 'masonry',
              
            // });
            
            $('#pick-location').on('click',function(){
              $('#modal-location').show();
              $('body').addClass('modal-on');
            });

            $('#close-modal').on('click',function(){
              $('#modal-location').hide();
              $('body').removeClass('modal-on');
            });

         });
        </script>
        

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>