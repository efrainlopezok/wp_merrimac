<?php

// Add shortcode support to text widgets
add_filter('widget_text', 'do_shortcode');


function spm_shortcode_get_template_directory_uri() {
	return get_template_directory_uri();
}
add_shortcode('get-template-directory-uri', 'spm_shortcode_get_template_directory_uri');


function spm_shortcode_list_child_pages() {
	global $post;
	
	return wp_list_pages('child_of='.$post->ID.'&title_li=&echo=0'); 
}
add_shortcode('list-child-pages', 'spm_shortcode_list_child_pages');


function spm_about_us() {
	ob_start();
?>
<div class="about_us_list">
	<div class="section">
		<a href="<?php echo home_url(); ?>/about-us/greg-browning/"><img src="<?php echo get_template_directory_uri(); ?>/images/about_us-greg_browning-img.jpg" alt="" class="photo" /></a>
		
		<h3 class="name"><a href="<?php echo home_url(); ?>/about-us/greg-browning/">Greg Browning</a></h3>
		
		<p class="position">CEO &amp; Principal</p>
		
		As the Chief Executive Officer and Principal of SPG, Greg is responsible for guiding the development and strategic direction of the company. Greg officially launched SinglePoint Global in 2010 (Formerly NewCoIT Corporation) and has been leading the company to near triple digit growth rates annually since the company’s inception. Greg’s 15 years of experience with industry leaders such as DuPont Fabros and other leading services companies have provided the insight and skill to create a focus on customer value and advance product development at SPG. Greg is an avid outdoorsman and spends his free time hunting or scaling rugged outdoor terrain in his lifted 85’ Jeep Comanche rock crawler.
	</div>
	
	<div class="section">
		<a href="<?php echo home_url(); ?>/about-us/brandon-tedder/"><img src="<?php echo get_template_directory_uri(); ?>/images/about_us-brandon_tedder-img.jpg" alt="" class="photo" /></a>
		
		<h3 class="name"><a href="<?php echo home_url(); ?>/about-us/brandon-tedder/">Brandon Tedder</a></h3>
		
		<p class="position">Director of Sales &amp; Marketing</p>
		
		Brandon started as the Director of Sales for SPG in April 2014, bringing with him over 12 years of sales and marketing leadership experience with Telecommunications, SaaS, and Professional Technical Services positions. As the DSM, Brandon is responsible for the day to day revenue growth, marketing strategy, and an integral part of the product development team. Brandon’s experiences provide a unique approach to developing solutions that are value drive and customer focused and have allowed SPG to continue to experience a client retention rate of over 98%. In his free time, Brandon enjoys reliving the glory days on the diamond playing softball or spending time in the garage.
	</div>
	
	<div class="section">
		<a href="<?php echo home_url(); ?>/about-us/joedy-mueller/"><img src="<?php echo get_template_directory_uri(); ?>/images/about_us-joedy_mueller-img.jpg" alt="" class="photo" /></a>
		
		<h3 class="name"><a href="<?php echo home_url(); ?>/about-us/joedy-mueller/">Joedy Mueller</a></h3>
		
		<p class="position">Director of Project Management</p>
		
		Joedy brings robust set of skills to SPG since joining the team in 2011.  In his 13 years in the IT field, Joedy has mastered everything from AV development to Server Virtualization.  He is a key member of the product development and project management team and has helped to optimize deployment of new services as SPG continues its rapid growth.  As the lead project manager, Joedy has developed systems to maintain smooth project completion, directed complex ongoing projects, and optimized service delivery.  Joedy enjoys roller hockey and fishing in his spare time.
	</div>
	
	<div class="section">
		<a href="<?php echo home_url(); ?>/about-us/bart-mueller/"><img src="<?php echo get_template_directory_uri(); ?>/images/about_us-bart_mueller-img.jpg" alt="" class="photo" /></a>
		
		<h3 class="name"><a href="<?php echo home_url(); ?>/about-us/bart-mueller/">Bart Mueller</a></h3>
		
		<p class="position">Director of Network Architecture</p>
		
		Bart brings 13 years of VoIP and application development experience since joining the team in early 2014.  Bart was an integral member of the engineering team at a large national Unified Communications platform provider.   Bart has developed deployment strategies, web application tools, and engineered optimized IP networks to bring customers a truly exceptional communications experience.  At SPG Bart handles all aspects of application development and VoIP related services including product development, SIP phone security, and installation processes, and building redundant infrastructures.  Bart spends his spare time as an ice hockey referee and fishing.
	</div>
	
	<div class="section">
		<a href="<?php echo home_url(); ?>/about-us/michael-boback/"><img src="<?php echo get_template_directory_uri(); ?>/images/about_us-michael_boback-img.jpg" alt="" class="photo" /></a>
		
		<h3 class="name"><a href="<?php echo home_url(); ?>/about-us/michael-boback/">Michael Boback</a></h3>
		
		<p class="position">Director of Operations</p>
		
		Michael leads and helps direct the day to day operations for all facets of the business including the voice, Internet, and managed services consulting departments. Michael brings a strong background in managing customer relationships and IT consulting projects for strategic accounts and manages a team of technical account managers. Michael has been involved in all facets of growing SPG for the past 4 since joining the company in 2011. In his spare time, Michael enjoys rock climbing, camping, and exploring the outdoors.
	</div>
</div>
<?php 
	$return = ob_get_clean();
	
	return $return;
}
add_shortcode('about-us', 'spm_about_us');