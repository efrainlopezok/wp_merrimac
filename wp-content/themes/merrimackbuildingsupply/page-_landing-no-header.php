<!-- <?php /* Template Name: Landing / Sample */ ?>
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
    <section class="hero-banner" style="background-image='https://d9hhrg4mnvzow.cloudfront.net/www.merrimackbuildingsupply.com/the-benefits-of-rockfon-ceiling-solutions/dd69e74e-merrimack-building-web-logo-final-blue-on-white_0a601x0a601x000000.png'">
        <div class="box-title">
            <h3>WE DELIVER</h3>
            <h2>QUALITY ACOUSTIC CEILING SOLUTIONS</h2>
        </div>
        <div class="column">
            <?php echo do_shortcode('[contact-form-7 id="1700" title="Contact Landing Page"]'); ?>
        </div>
    </section>
    <section class="text-center">
        <h3>WHY CHOOSE ROCKFON</h3>
    </section>

    <div class="landing-container">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        
        <section class="block-text-iamge">
            <div class="wrap">
                <div class="columns three custom-column">
                    <div class="column">
                        <img src="//d9hhrg4mnvzow.cloudfront.net/www.merrimackbuildingsupply.com/the-benefits-of-rockfon-ceiling-solutions/b40f47d0-mbs-feather-icon_050050050050000000.png" alt="images">
                    </div>
                    <div class="column">
                        <img src="//d9hhrg4mnvzow.cloudfront.net/www.merrimackbuildingsupply.com/the-benefits-of-rockfon-ceiling-solutions/b40f47d0-mbs-feather-icon_050050050050000000.png" alt="images">
                    </div>
                    <div class="column">
                        <img src="//d9hhrg4mnvzow.cloudfront.net/www.merrimackbuildingsupply.com/the-benefits-of-rockfon-ceiling-solutions/b40f47d0-mbs-feather-icon_050050050050000000.png" alt="images">
                    </div>
                </div>
            </div>
        </section>
        <section class="location">
            <div class="wrap">
                <div class="columns two custom-column">
                    <div class="column">
                        <img src="//d9hhrg4mnvzow.cloudfront.net/www.merrimackbuildingsupply.com/the-benefits-of-rockfon-ceiling-solutions/2f283e02-allher-icon-pin_01b01x01b01x000000.png" alt="images">
                        <p>260 Daniel Webster Hwy Merrimack, NH 03054</p>
                    </div>
                    <div class="column">
                        <h2><span>CONVENIENT</span>LOCATIONS</h2>
                        <p>Merrimack Building Supply has warehouses in New Hampshire, Massachusetts and Connecticut. With thousands of products in our vast inventory and our extensive fleet of boom trucks, box trucks and flat beds, we are able to deliver to anywhere in New England with ease.</p>
                    </div>
                </div>
            </div>
        </section>
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

                </div>
                <div class="column custom-column">
                    <a href="<?php echo get_field('entries_button_link'); ?>" class="btn"><?php echo get_field('entries_button_text'); ?></a>
                </div>
            </div>
        </div>

        <div id="latest_blogs" class="latest_blogs">
	
</div>

</div>
<?php get_footer('landing')?>
    

