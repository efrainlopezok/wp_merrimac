<!-- <?php /* Template Name: Landing  */ ?>
<?php $additional_body_classes = 'rockfon'; ?>
<head>
    <title></title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
    <link href="https://fonts.googleapis.com/css?family=Karla:400,700" rel="stylesheet">
</head>
<body> -->
<?php $header_banner = get_field('header_banner_text') ?>
<?php get_header('landing')?>

<style>
.d-flex {
    display:flex;
    flex-wrap: wrap;
}
.d-flex img {
    height:100%;
}
@media screen and (max-width: 991px){
    .latest_blogs .column{
        width: 48% !important;
    }
}
@media screen and (max-width: 767px){
    .latest_blogs .column{
        width: 100% !important;
    }
}
</style>

        <div class="landing-container">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <div class="initial_order" id="initial_order">
            <div class="wrap">
                <h1><?php echo $header_banner; ?></h1>
            </div>
        </div>
        <div id="contact-us" class="contact-us">
            <div class="wrap">
                <div class="columns two custom-column">
                    <div class="column">
                        <?php echo get_field('why_we_choose'); ?>
                    </div>
                    <div class="column">
                        <?php echo do_shortcode('[contact-form-7 id="1700" title="Contact Landing Page"]'); ?>
                        <!-- <form action="">
                            <div class="contact-us-today">
                                <h4>Contact Us Today <br> For More Information</h4>
                                <input type="text" id="your-name" placeholder="Your Name" required>
                                <input type="text" id="business" placeholder="Business" required>
                                <input type="email" id="email-address" placeholder="Email Address" required>
                                <input type="tel"  id="phone-number" placeholder="Phone Numer">
                                <input type="submit" value="GET THE OFFER">
                                
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
        
        <!-- div with blue icons -->
        <div id="services-details" class="services-details">
            <div class="wrap">
                <div class="columns two"> 
                    <?php echo get_field('bullet_content_with_icons'); ?>
                </div>
            </div>
        </div>
        <div id="compare-banner" class="compare-banner">
            <div class="wrap custom-wrap">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cta_background.jpg" alt="Compare - Banner Image">
                <div class="wrap-content">
                    <?php echo get_field('compare_and_save_content'); ?>
                    <!-- <h3>COMPARE & SAVE!</h3>
                    <p>Speak With A Merrimack Building Supply Representative <br> for a ROCKFON vs. Armstrong Product Price Comparisons!</p>
                    <a href="#" class="btn">GET STARTED!</a> -->
                </div>

            </div>
        </div>
        <div id="comments" class="comments">
            <div class="wrap custom-wrap">
                <?php echo get_field('landing_testimonial'); ?>
                <!-- <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/marks.png" alt="Comments Mark">
                <p>"Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy <br> euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad <br> minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut <br> stella emmy aliquip ex ea commodo." </p>
                <h4><strong>Joseph dough -</strong> abc company</h4> -->
            </div>
        </div>
        <div id="meet-paul" class="meet-paul">
            <div class="wrap custom-wrap">
                <?php $meet_image = get_field('meet_image'); ?>
                <img src="<?php echo $meet_image['url']; ?>" alt="Meet Paul - Banner Image">
                <div class="wrap-content">
                    <?php echo get_field('meet_text'); ?>
                    <!-- <h3>Meet Paul!</h3>
                    <p> If you are looking to learn more about Rockfon and all of it’s great benefits don’t hesitate to call and ask. He is standing by for your call and would be happy to go over the specifications for your next project!</p>
                    <a href="#" class="btn"><img class="blue-arrow" src="<?php echo get_stylesheet_directory_uri(); ?>/images/blue_arrow.png" alt="Blue Arrow">CONTACT PAUL TODAY</a> -->
                </div>

            </div>
        </div>
        <div id="wool-ceiling-tiles" class="wool-ceiling-tiles">
            <div class="wrap">
                <h3><?php echo get_field('entries_main_title'); ?></h3>
                <div class="columns custom-columns three">

                <?php 
                if( have_rows('list_of_entries') ):

                // loop through the rows of data
                while ( have_rows('list_of_entries') ) : the_row();

                // display a sub field value
                the_sub_field('sub_field_name');
                $img = get_sub_field('rep_image');
                ?>
                    <div class="column">
                        <a href="<?php echo the_sub_field('rep_entry_link'); ?>">
                            <img src="<?php echo $img['url']; ?>" alt="Click to continue">
                            <h4><?php echo get_sub_field('rep_entry_title'); ?></h4>
                        </a>
                    </div>

                <?php
                endwhile;
                endif;
                ?>

                    <!-- <div class="column">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles_2.jpg" alt="Tiles Baffles">
                            <h4>BAFFLES</h4>
                        </a>
                    </div>
                    <div class="column">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles_1.jpg" alt="Tiles Islands">
                            <h4>ISLANDS</h4>
                        </a>
                        
                    </div>
                    <div class="column">
                        <a href="#">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/tiles_3.jpg" alt="Tiles Suspended Ceilings">
                            <h4>SUSPENDED CEILINGS</h4>
                        </a>
                    </div> -->
                </div>
                <div class="column custom-column">
                    <a href="<?php echo get_field('entries_button_link'); ?>" class="btn"><?php echo get_field('entries_button_text'); ?></a>
                </div>
            </div>
        </div>

        <div id="latest_blogs" class="latest_blogs">
	<div class="wrap">
		<h3 class="lastest_blogs_title">Latest Blogs</h3>

		<div class="columns three d-flex">

        <?php 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array('post_type' => array('post'),'posts_per_page'=> 3, 'order'=>'DESC','orderby'=>'date', 'post_status' => array('publish'), 'paged' => $paged ); 
			?>

			<!-- <?php $wp_query = new  WP_Query($args); //print_r($wp_query); exit; ?> -->
			<?php if ( $wp_query->have_posts() ): ?>
			
			
			<?php while($wp_query->have_posts()): ?>

			<?php $wp_query->the_post();
			$fimage = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_ID()),"full");
			$trac1 = get_field('trac_field_1');
			$trac2 = get_field('trac_field_2');
			$the_category = get_the_category(get_the_ID());
			//print_r( $the_category ); exit;
        ?>
        
			<div class="column wow fadeInUpSmall" data-wow-delay="0ms" style="visibility: visible; animation-delay: 0ms; animation-name: fadeInUpSmall;">
				<img width="480" height="433" src="<?php echo $fimage[0]; ?>" class="attachment-blog_post size-blog_post wp-post-image" alt="">
				<div class="overlay">
					<div class="layer_2">
						<h3 class="title"><?php the_title(); ?></h3>

						<div class="excerpt">
							<?php the_excerpt(); ?>
						</div>
					</div>

					<div class="arrow_background"></div>
					<div class="arrow"></div>

					<a href="<?php the_permalink(); ?>" class="full_coverage_link">&nbsp;</a>
				</div>
            </div>
            
            <?php
            endwhile;

            endif;
            ?>

			<!-- <div class="column wow fadeInUpSmall post-1380 post type-post status-publish format-standard has-post-thumbnail hentry category-rockfon" data-wow-delay="200ms" style="visibility: visible; animation-delay: 200ms; animation-name: fadeInUpSmall;">
				<img width="480" height="433" src="https://www.merrimackbuildingsupply.com/wp-content/uploads/2018/06/merrinmack_building_supply_blog_why_nrc_is-important-for-sound-absorbtion-480x433.jpg" class="attachment-blog_post size-blog_post wp-post-image" alt="">
				<div class="overlay">
					<div class="layer_2">
						<h3 class="title">How NRC can help you select your next acoustic ceiling tiles</h3>

						<div class="excerpt">
							<p>What is NRC? NRC stands for Noise Reduction Coefficient. This is the measurement of the amount of noise absorbed by a ceiling material. Recent changes […]</p>
						</div>
					</div>

					<div class="arrow_background"></div>
					<div class="arrow"></div>

					<a href="https://www.merrimackbuildingsupply.com/how-nrc-can-help-you-select-your-next-acoustic-ceiling-tiles/" class="full_coverage_link">&nbsp;</a>
				</div>
			</div>
			<div class="column wow fadeInUpSmall post-1327 post type-post status-publish format-standard has-post-thumbnail hentry category-general-topics category-news category-rockfon" data-wow-delay="400ms" style="visibility: visible; animation-delay: 400ms; animation-name: fadeInUpSmall;">
				<img width="480" height="433" src="https://www.merrimackbuildingsupply.com/wp-content/uploads/2018/04/merrinmack_building_supply_blog_why_you_should_care_about_nrc-480x433.jpg" class="attachment-blog_post size-blog_post wp-post-image" alt="">
				<div class="overlay">
					<div class="layer_2">
						<h3 class="title">Why is NRC important to your clients?</h3>

						<div class="excerpt">
							<p>Your clients are thinking about sounds absorption, are you? According to Rockfon, NRC or Noise Reduction Coefficient represents of the amount of sound energy absorbed […]</p>
						</div>
					</div>

					<div class="arrow_background"></div>
					<div class="arrow"></div>

					<a href="https://www.merrimackbuildingsupply.com/why-is-nrc-important-to-your-clients/" class="full_coverage_link">&nbsp;</a>
				</div>
			</div> -->

			<div class="cleared"></div>
		</div>
	</div>
</div>

</div>
<?php get_footer('landing')?>
    

