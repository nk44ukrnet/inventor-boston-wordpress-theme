<?php
/* Template Name: contacts-page */
get_header();
?>

<main class="main side-elements">
    <div class="inner_wrapper">

        <h1>Contact</h1>

        <section class="contacts_section">
            <div class="contacts_inner_holder">
                <div class="contacts_inner_item contacts_inner_item1">Report an absence</div>
                <div class="contacts_inner_item contacts_inner_item2">
                    <a href="<?php echo site_url(); ?>/report_absence" class="btn-sbm-contacts btn-sbm-contacts1" data-toggle="modal" data-target="#reportAnAbsence">Report</a>
                </div>
            </div>

            <div class="contacts_inner_holder">
                <div class="contacts_inner_item contacts_inner_item1"><!--Sign up for a Trial Lesson-->Learn more about Inventor</div>
                <div class="contacts_inner_item contacts_inner_item2">
                    <a href="<?php echo site_url(); ?>/learn_more" class="btn-sbm-contacts">Learn More</a>
                </div>
            </div>

            <div class="contacts_inner_holder">
                <div class="contacts_inner_item contacts_inner_item1">Email the Director</div>
                <div class="contacts_inner_item contacts_inner_item2">
                    <a href="<?php echo site_url(); ?>/email_director" class="btn-sbm-contacts btn-sbm-contacts3" data-toggle="modal" data-target="#emailToDirector">Send</a>
                </div>
            </div>

            <div class="contacts_inner_holder">
                <div class="contacts_inner_item contacts_inner_item1">Call us</div>
                <div class="contacts_inner_item contacts_inner_item2">
                    <div class="btn-sbm-contacts btn-sbm-contacts-transparent" data-toggle="modal" data-target=""><a href="tel:7817570600">781-757-0600</a></div>
                </div>
            </div>

            <h2>Our location:</h2>
            <br>
            <p style="text-align: center; font-weight: 300">54 Middlesex Turnpike Bedford, MA  01730</p>
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1420.5984193946497!2d-71.23917024530154!3d42.51143439701103!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e39f8ede47c75d%3A0x662dbeb35cac061b!2sInventor%20STEM%20School!5e0!3m2!1sen!2sus!4v1598800178864!5m2!1sen!2sus" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </section>

        <section class="social_media_panel social_media_panel_contact_us">

            <div class="social_inner">

                <div class="social_inner_item">

                    Find us on Social Media

                </div>

                <div class="social_inner_item">

                    <a href="https://www.facebook.com/InventorSTEMSchool" target="_blank" class="soc_icon"><img src="<?php get_theme_file_uri(); ?>/img/fb_icon.png" alt="Facebook"></a>

                    <!-- <a href="#!" class="soc_icon"><img src="./img/youtube_icon.png" alt="Youtube"></a>

                     <a href="#!" class="soc_icon"><img src="./img/twitter_icon.png" alt="Twitter"></a>-->

                </div>

            </div>

        </section>
    </div>
</main>


<?php
get_footer();
?>
