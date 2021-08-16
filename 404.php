<?php get_header(); ?>

<script>
    //support old static site urls:
    //check if url contain old .php address. if yes - redirect to new page;
    if(window.location.href.indexOf('3-6.php') !== -1) {
        window.location.href = '/3-6';
    }
    if(window.location.href.indexOf('6-10.php') !== -1) {
        window.location.href = '/6-10';
    }
    if(window.location.href.indexOf('10-16.php') !== -1) {
        window.location.href = '/10-16';
    }
    if(window.location.href.indexOf('online-programs.php') !== -1) {
        window.location.href = '/online-programs';
    }
    if(window.location.href.indexOf('summer.php') !== -1) {
        window.location.href = '/summer';
    }
    if(window.location.href.indexOf('schedule.php') !== -1) {
        window.location.href = '/schedule';
    }
    if(window.location.href.indexOf('mission.php') !== -1) {
        window.location.href = '/mission';
    }
    if(window.location.href.indexOf('methodology.php') !== -1) {
        window.location.href = '/methodology';
    }
    if(window.location.href.indexOf('team.php') !== -1) {
        window.location.href = '/team';
    }
    if(window.location.href.indexOf('contacts.php') !== -1) {
        window.location.href = '/contact';
    }
    if(window.location.href.indexOf('covid.php') !== -1) {
        window.location.href = '/covid';
    }
</script>

	<main role="main" class="inner_wrapper">
		<!-- section -->
		<section>

			<!-- article -->
			<article id="post-404">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>



<?php get_footer(); ?>
