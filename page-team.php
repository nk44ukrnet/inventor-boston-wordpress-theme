<?php
/* Template Name: our-team-page */
get_header();
?>

<main class="main side-elements">

    <div class="inner_wrapper">

        <h1>Our Team</h1>

        <section style="padding-left:10px; padding-right:10px;">

            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <h2>Our teachers are <b>mentors</b> who:</h2>
                        <ul class="ul-brick ul-brick-green">
                            <li>Genuinely enjoy working with children</li>
                            <li>Have the freedom and flexibility to focus on children’s interests</li>
                            <li>Treat each child as an individual with valuable ideas and opinions</li>
                            <li>Ask children about their dreams, and offer support and motivation</li>
                            <li>Explain how the world works and ask children what they want to with it</li>
                            <li>Help children learn how to focus their minds and think deeply to solve problems</li>
                            <li>Provide feedback after every lesson</li>
                            <li>Love being part of this team</li>
                            <li>Are always finding ways to keep learning and developing themselves</li>
                        </ul>
                        <p class="p-subhead"><strong>Interested in employment with Inventor STEM School?</strong></p>
                        <p class="p-bigger">
                            We welcome teaching applications
                            from both experienced educators and STEM enthusiasts who want to share their knowledge
                            with the next generation. We offer fair compensation, training, and opportunities for
                            professional growth. Learn more about current teaching and administrative openings on
                            our <a href="https://www.indeedjobs.com/inventor-stem-school/_hl/en_US?cpref=JXWAtnzf3XW5aRnY2g_zosKhmt5T2XHWg00QxT-6pHY" target="_blank">jobs page</a>.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-md-12">
                        <a href="#lightshot1"><img src="<?php echo get_template_directory_uri(); ?>/img/teachers1.jpg" class="img-contain540-400"
                                                   alt="Our team"></a>
                    </div>
                    <div class="col-xl-6 col-md-12">
                        <a href="#lightshot2"><img src="<?php echo get_template_directory_uri(); ?>/img/teachers2.jpg" class="img-contain540-400"
                                                   alt="Our team"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12 pr0-team">
                        <a href="#lightshot3"><img src="<?php echo get_template_directory_uri(); ?>/img/team3.png" class="img-contain" alt="Our team"></a>
                    </div>
                </div>
            </div>

        </section>

    </div>

</main>


<!-- small gallery -->
<a href="#_" id="lightshot1" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/teachers1.jpg" alt="Bigger photo">
</a>
<a href="#_" id="lightshot2" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/teachers2.jpg" alt="Bigger photo">
</a>
<a href="#_" id="lightshot3" class="lightshot">
    <img src="<?php echo get_template_directory_uri(); ?>/img/team3.png" alt="Bigger photo">
</a>

<?php
get_footer();
?>
