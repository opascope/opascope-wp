<?php get_header(); ?>
    <?php if(have_posts()): the_post(); ?>
        <section class="main">
            <div class="container">
                <div class="content">
                    <h1>Select a Time Below</h1>
                    <div class="calendly_wrapper">
                        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js"></script>
                        <script>
                        var getUrlParameter = function getUrlParameter(sParam) {
                            var sPageURL = window.location.search.substring(1),
                                sURLVariables = sPageURL.split('&'),
                                sParameterName,
                                i;

                            for (i = 0; i < sURLVariables.length; i++) {
                                sParameterName = sURLVariables[i].split('=');

                                if (sParameterName[0] === sParam) {
                                    return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
                                }
                            }
                            return false;
                        };

                        Calendly.initInlineWidget({
                        url: 'https://calendly.com/maxthilen/intro-call?hide_event_type_details=1',
                        prefill: {
                                    email: getUrlParameter('businessEmail')
                                }    
                        });

                        $ = jQuery;
                        $(document).ready(function() {
                          var hasReloaded = sessionStorage.getItem('hasReloaded');

                          if (!hasReloaded) {
                            sessionStorage.setItem('hasReloaded', true);
                            location.reload();
                          }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

<?php get_footer(); ?>