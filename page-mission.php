<?php
/* Template Name: our-mission-page */
get_header();
?>

<main class="main side-elements">

    <div class="inner_wrapper">

        <h1>Mission</h1>

        <section style="padding-left:10px; padding-right:10px;">

            <h2 class="text-center">We are <b>passionate</b> about helping children
                develop new horizons and follow their dreams - so that they can
                <b>be whatever they want to be</b>.</h2>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="p-subhead"><b>We believe that…</b></p>
                        <ul class="ul-brick ul-brick-yellow">
                            <li>We should always be ready to learn, change, and grow</li>
                            <li>Solving new problems requires new ways of thinking</li>
                            <li>An understanding of technology is essential for public health, the global economy, and daily life
                            </li>
                            <li>We should help children develop into active people who seek solutions and are capable of making decisions</li>
                            <li><b>And that all of these things are far more important than acquiring any specific information</b></li>
                        </ul>
                        <p class="p-subhead"><b>We have created an environment that allows children to:</b></p>
                        <ul class="ul-brick ul-brick-blue">
                            <li>Experiment and explore unfamiliar ideas and methods without fear of “failure”</li>
                            <li>“Stretch” themselves and experience successes</li>
                            <li>Learn while having fun</li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <a href="#lightshot1" class="to_lightshot"><img src="<?php echo get_template_directory_uri(); ?>/img/mission1.jpg" class="img-contain240-210" alt="Our mission"></a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="#lightshot2" class="to_lightshot"><img src="<?php echo get_template_directory_uri(); ?>/img/mission2.jpg" class="img-contain240-210" alt="Our mission"></a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="#lightshot3" class="to_lightshot"><img src="<?php echo get_template_directory_uri(); ?>/img/mission3.jpg" class="img-contain240-210" alt="Our mission"></a>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <a href="#lightshot4" class="to_lightshot"><img src="<?php echo get_template_directory_uri(); ?>/img/mission4.jpg" class="img-contain240-210" alt="Our mission"></a>
                    </div>
                </div>
            </div>

        </section>


    </div>

</main>

<!-- small gallery -->
<a href="#_" id="lightshot1" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mission1.jpg" alt="Bigger photo">
</a>
<a href="#_" id="lightshot2" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mission2.jpg" alt="Bigger photo">
</a>
<a href="#_" id="lightshot3" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mission3.jpg" alt="Bigger photo">
</a>
<a href="#_" id="lightshot4" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/mission4.jpg" alt="Bigger photo">
</a>

<?php
get_footer();
?>
