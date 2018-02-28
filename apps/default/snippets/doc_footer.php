      </div>
        <!-- // end container -->

    </div>
    <!-- end wrapper -->

    <script src="https://allyoucan.cloud/cdn/jquery/core/3.2.1/jquery.js"></script>
    <script src="https://allyoucan.cloud/cdn/bootstrap/core/3.3.7/js/bootstrap.js"></script>
    <script src="https://allyoucan.cloud/cdn/wowjs/custom/wow.js"></script>
    <script src="https://allyoucan.cloud/cdn/syntax-highlighter/custom/scripts/shCore.js"></script>
    <script src="https://allyoucan.cloud/cdn/syntax-highlighter/custom/scripts/shBrushXml.js"></script>
    <script src="https://allyoucan.cloud/cdn/syntax-highlighter/custom/scripts/shBrushPhp.js"></script>

    <script>
        (function($) {
            "use strict";

            /* ==============================================
            ANIMATION -->
            =============================================== */
            new WOW({
                boxClass: 'wow', // default
                animateClass: 'animated', // default
                offset: 0, // default
                mobile: true, // default
                live: true // default
            }).init();

           
            /* ==============================================
            SCROLL -->
            =============================================== */
            $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });

            /* ==============================================
            SCROLLSPY -->
            =============================================== */
            $('body').scrollspy({
                target: '.docs-sidebar'
            });
            $('[data-spy="scroll"]').each(function () {
              var $spy = $(this).scrollspy('refresh')
            })

        })(jQuery);


        /* ==============================================
        SyntaxHighlighter -->
        =============================================== */
        $(document).ready(function() {

            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();

        });

    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-1396990-54"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-1396990-54');
    </script>


</body>

</html>
