	<!-- Newsletter -->
	<div class="hero-row skinny row newsletter">

		<section class="hero-column col-md-12 col-12">	            					
			<img src="<?php  the_field('newsletter_background_image'); ?>" />
		</section>
		
		<section class="newsletter-container">
		    <?php
		  
				if ( ! is_active_sidebar( 'footer-social-subscribe-v2' ) ) {
					return;
				}
			
			?>  
			<aside id="social-subscribe" class="widget-area">
				<div class="mobile-subcription-img"> 
					<img src="<?php  the_field('newsletter_mobile_image'); ?>" alt="mobile-subcription-img"/>						
				</div>
			    <div id="field_2_2" class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
				   <label class="gfield_label" for="input_2_2">Subscribe to Pure Joy</label>
					<p>Stay in the know on new products and special offers</p>
				</div>
				<div class="newsletter-inner-form-block">
					<?php dynamic_sidebar( 'footer-social-subscribe-v2' ); ?>
				</div>
			</aside>
		</section>
		 
	</div> 
	<!-- Newsletter -->