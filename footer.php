			<!-- footer -->
            <footer class="footer">
                <div class="inner_wrapper">
                    <div class="footer_content clearfix">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cage.png" alt="Footer element 1" class="foot_el1">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cage1.png" alt="Footer element 2" class="foot_el2">
                    </div>
                    <div class="footer_links_holder">
                        <span class="footer_link_item">Inventor, <?php echo date("Y"); ?>. All rights reserved.</span>
                        <a href="https://www.facebook.com/InventorSTEMSchool" target="_blank" class="footer_link_item"><img src="<?php echo get_template_directory_uri() ?>/img/fb_icon_wh.png" alt="Facebook" class="fb_wh_footer"></a>
                        <a href="<?php echo get_template_directory_uri(); ?>/files/Policy.pdf" class="footer_link_item">Privacy Policy</a>
                        <!--                    <a href="#!" class="footer_link_item">Offer agreement</a>-->

                    </div>

                </div>

            </footer>
			<!-- /footer -->

		</div>
		<!-- / total_wrapper -->

		<?php wp_footer(); ?>

            <!-- Start of adroll_adv -->

            <script type="text/javascript">

                adroll_adv_id = "LNHTCVMHCFBB5PYY5VUAEP";

                adroll_pix_id = "WPZI6UOJ2VEJRJ72CR7RYL";

                adroll_version = "2.0";



                (function(w, d, e, o, a) {

                    w.__adroll_loaded = true;

                    w.adroll = w.adroll || [];

                    w.adroll.f = [ 'setProperties', 'identify', 'track' ];

                    var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id

                        + "/roundtrip.js";

                    for (a = 0; a < w.adroll.f.length; a++) {

                        w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function(n) {

                            return function() {

                                w.adroll.push([ n, arguments ])

                            }

                        })(w.adroll.f[a])

                    }



                    e = d.createElement('script');

                    o = d.getElementsByTagName('script')[0];

                    e.async = 1;

                    e.src = roundtripUrl;

                    o.parentNode.insertBefore(e, o);

                })(window, document);

                adroll.track("pageView");

            </script>
            <!-- End of adroll_adv -->

            <!-- Start of HubSpot Embed Code -->
            <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/7958870.js"></script>
            <!-- End of HubSpot Embed Code -->

	</body>
</html>
