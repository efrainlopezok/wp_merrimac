<?php global $additional_body_classes; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="google-site-verification" content="Yi1kix_K-Z9zK3_AsuCs7KxgxSz_S-T5WOa6JEXL0Nk" />
<meta name="google-site-verification" content="ymQjGTsxkqBCWl9HJxC2pkbb4ZYy4WWL5A4DkTFybMg" />

<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo('name'); ?><?php if ( is_front_page() ) { ?><?php if ( get_bloginfo('description') ) { ?> - <?php bloginfo('description'); } } ?></title>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M2MZKHS');</script>
<!-- End Google Tag Manager -->

<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if ( is_singular() && pings_open( get_queried_object() ) ) { ?><link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"><?php } ?>

<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-15589405-1', 'auto');
 ga('send', 'pageview');

</script>
<script type="text/javascript">
var DID=253324;
</script>
<script async src="//stats.sa-as.com/live.js"></script>
<script src="//faa041e7532d4fc091101f56866b5662.js.ubembed.com" async></script>
<!--wp_head()-->
<?php wp_head(); ?>
<!--end wp_head()-->
</head>
<body <?php body_class($additional_body_classes); ?>>
  <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M2MZKHS"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<nav id="responsive_menu">
<?php if ( has_nav_menu('header') ) { ?>
	<?php wp_nav_menu( array('theme_location' => 'header', 'container' => false) ); ?>
<?php } else { ?>
	<ul class="menu">
		<?php wp_list_pages( array('title_li' => false) ); ?>
	</ul>
<?php } ?>

<?php if ( has_nav_menu('upper') ) { ?>
	<?php wp_nav_menu( array('theme_location' => 'upper', 'container' => false) ); ?>
<?php }  ?>
</nav>

<div class="layer_2"><div class="wrap outer">

<div id="upper">
	<div class="wrap">
		<a href="#" id="responsive_menu_button"><?php _e('Menu', SPM_TEXT_DOMAIN); ?></a>

		<div class="right">
			<ul class="social_media">
				<li class="facebook" title="Facebook"><a rel="nofollow" href="https://www.facebook.com/MerrimackBuildingSupply/?fref=ts">Facebook</a></li>
				<li class="linkedin" title="LinkedIn"><a rel="nofollow" href="https://www.linkedin.com/company/1204961?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1204961%2Cidx%3A2-1-2%2CtarId%3A1466982454601%2Ctas%3AMerrimack%20Building">LinkedIn</a></li>
				<!--<li class="twitter" title="Twitter"><a href="">Twitter</a></li>-->
			</ul>

<?php if ( has_nav_menu('upper') ) { ?>
		<?php wp_nav_menu( array('theme_location' => 'upper', 'container' => false, 'menu_class' => 'menu touchscreen_compatible') ); ?>
<?php } ?>

			<div class="phone">
				<a href="<?php echo home_url(); ?>/sample-request/">Sample Request / </a> <a href="<?php echo home_url(); ?>/submittals/">Submittals / </a> <a href="<?php echo home_url(); ?>/blog/">Blog / </a> <span class="call">Call Toll Free:</span> <a href="tel:8007157001"><span class="phone_number">800.715.7001</span></a>
			</div>

			<div class="cleared"></div>
		</div>

		<div class="cleared"></div>
	</div>
</div>

<header id="header">
	<div class="wrap">
		<div class="logo"><a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a></div>

<?php if ( has_nav_menu('header') ) { ?>
		<nav id="nav">
			<?php wp_nav_menu( array('theme_location' => 'header', 'container' => false, 'menu_class' => 'menu touchscreen_compatible') ); ?>
		</nav>
<?php } ?>

		<div class="cleared"></div>
	</div>
  <div id="about-mega" class="custom-megamenu twoblocks">
  	<div class="wrap">
  		<div class="menucontent">
  			<h3></h3>
  		</div>
  		<div class="htmlcontent">
  			<?php dynamic_sidebar('About Megamenu'); ?>
  		</div>
  	</div>
  </div>
  <div id="rockfon-mega" class="custom-megamenu oneblock">
  	<div class="wrap">
  		<div class="menucontent">
  			<h3></h3>
  		</div>
  		<div class="htmlcontent">
  			<?php dynamic_sidebar('Rockfon Megamenu'); ?>
  		</div>
  	</div>
  </div>
  <div id="workwith-mega" class="custom-megamenu oneblock">
  	<div class="wrap">
  		<div class="menucontent">
  			<h3></h3>
  		</div>
  		<div class="htmlcontent">
  			<?php dynamic_sidebar('We Work With Megamenu'); ?>
  		</div>
  	</div>
  </div>
  <div id="products-mega" class="custom-megamenu twoblocks">
  	<div class="wrap">
  		<div class="menucontent">
  			<h3></h3>
  		</div>
  		<div class="htmlcontent">
  			<?php dynamic_sidebar('Products Megamenu'); ?>
  		</div>
  	</div>
  </div>
  <div id="services-mega" class="custom-megamenu twoblocks">
  	<div class="wrap">
  		<div class="menucontent">
  			<h3></h3>
        <ul class="sub-menu">
          <li><a href="#">Lorem Suscipit  Ipsum Dolor</a></li>
          <li><a href="#">Laoreet Dolore Magna</a></li>
          <li><a href="#">Damcorper Ipsum Dolor Suscipit</a></li>
          <li><a href="#">Thendrerit In Vulputate</a></li>
          <li><a href="#">Dolor Dolore Magna Lorem Ipsum</a></li>
          <li><a href="#">Lamcorper Suscipit Lobor</a></li>
        </ul>
  		</div>
  		<div class="htmlcontent" class="custom-megamenu">
  			<?php dynamic_sidebar('Services Megamenu'); ?>
  		</div>
  	</div>
  </div>
</header>
<div class="menuoverlay"></div>
