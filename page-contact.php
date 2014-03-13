<?php
/**
 * Template name: CONTACT Page Template 
 * The template for displaying contact pages.
 */

get_header(); ?>
<?php $i=0;$first_post=""; if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php if($i==0){$first_post=get_permalink();$i++;} ?>
<div class="page_name">
    <div class="container"><div class="sixteen columns"><h1><?php the_title();?></h1></div></div>
</div>
<section>
	<div class="container">
		<div class="sixteen columns">
			<h6 class="contact-cew-title">Commitment Engineering Works.</h6>
			<div class="contact-cew-desc"><?php the_content();?></div>
			<div class="contact-area">
				<div class="contact-item">
					<div class="contact-item-title">Location</div>
					<div class="contact-item-detail">Doha - Qatar</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-title">Address</div>
					<div class="contact-item-detail">P. O Box 1332</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-title">Main Office</div>
					<div class="contact-item-detail">+974 435 7497</div>
					<div class="contact-item-detail">+974 431 8376</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-title">Workshop</div>
					<div class="contact-item-detail">+974 460 4505</div>
				</div>
				<hr class="no-margin" />
				<div class="contact-item">
					<div class="contact-item-title">Showroom</div>
					<div class="contact-item-detail">+974 450 4843</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-title">Fax</div>
					<div class="contact-item-detail">+974 442 6816</div>
				</div>
				<div class="contact-item">
					<div class="contact-item-title">Email</div>
					<div class="contact-item-detail">cew@qatar.net.qa</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map"></div>
	<div class="container">
		<div class="sixteen columns">
			<form id="contact-form" class="contact-form">
				<h1>Get intouch</h1>
				<input type="text" name="first_name" placeholder="First Name*" tabindex="1">
				<input type="text" name="last_name" placeholder="Last Name*" tabindex="2">
				<input type="text" name="designation" placeholder="Designation" tabindex="3">
				<input type="text" name="organization" placeholder="Organization" tabindex="4">
				<input type="text" name="email" placeholder="Email*" tabindex="5">
				<input type="text" name="remail" placeholder="Retype Email*" tabindex="6">
				<h1 class="sec">Your Contact Info</h1>
				<input type="text" name="office" class="small" placeholder="Office" tabindex="7">
				<input type="text" name="mobile" class="small" placeholder="Mobile" tabindex="8">
				<input type="text" name="home" class="small" placeholder="Home" tabindex="9">
				<textarea  name="contact" placeholder="Contact" tabindex="10"></textarea>
				<p>*Required Fields</p>
				<input type="submit" value="Submit" tabindex="11">
				<input type="reset" value="Reset" tabindex="12">
				<div class="success-message">Email has been sent!</div>
                <div class="alert-message"></div>
                <div class="error-message">Email could not be delivered. Please try again later!</div>
			</form>
		</div>
	</div>
</section>
<?php endwhile;endif; ?>
<script type='text/javascript'>
	/* <![CDATA[ */
	var fangohr_dynload = {"postType":"post","startPage":"1","maxPages":"<?php echo $wp_query->max_num_pages;;?>","nextLink":"<?php echo get_vogaye_next_link(get_next_posts_link( ''));?>","startPostPage":"1","nextPostPageLink":"<?php echo $first_post?>"};
	/* ]]> */
	</script>
<?php get_footer();?>