<div id="footer">
	<div class="wrap">
		<div class="columns five">
<?php if ( has_nav_menu('footer') ) { ?>
			<div class="column first">
				<?php wp_nav_menu( array('theme_location' => 'footer', 'container' => false) ); ?>
			</div>
<?php } ?>

			<div class="column second">
				<h3>Connect</h3>

				<ul class="social_media">
				<li class="facebook" title="Facebook"><a rel="nofollow" href="https://www.facebook.com/MerrimackBuildingSupply/?fref=ts" target="_blank">Facebook</a></li>
				<li class="linkedin" title="LinkedIn"><a rel="nofollow" href="https://www.linkedin.com/company/1204961?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A1204961%2Cidx%3A2-1-2%2CtarId%3A1466982454601%2Ctas%3AMerrimack%20Building" target="_blank">LinkedIn</a></li>
				<!--<li class="twitter" title="Twitter"><a href="" target="_blank">Twitter</a></li>-->

				</ul>
			</div>

			<div class="column third">
				<h3>Corporate Headquarters</h3>

				<p>260 Daniel Webster Hwy<br />
				Merrimack, NH 03054-0865<br />
				Toll Free: <a href="tel:8007157001">800.715.7001</a><br />
				Phone: <a href="6034247001">603.424.7001</a></p>
			</div>

			<div class="column fourth">
				<h3>Medway Office</h3>

				<p>20 Trotter Drive<br />
				Medway, MA 02053<br />
				Toll Free: <a href="tel:8668979800">866.897.9800</a><br />
				Phone: <a href="tel:5085336905">508.533.6905</a></p>
			</div>

			<div class="column fifth">
				<h3>Stratford Office</h3>

				<p>85 Lupes Drive<br />
				Stratford, CT 06615<br />
				Phone: <a href="tel:8608285144">860.828.5144</a><br />
				Fax: <a href="tel:8608285199">860.828.5199</a></p>
			</div>

			<div class="cleared"></div>
		</div>
	</div>
</div>

<div id="sub_footer">
	<div class="wrap">

	</div>
</div>

<!-- wp_footer() -->
<?php wp_footer(); ?>
<!-- end wp_footer() -->
<?php/*<script type="application/ld+json">
{
	"@context": "https://www.schema.org",
	"@type": "LocalBusiness",
	"image": "<?php echo get_template_directory_uri(); ?>/images/header-logo-bkg.png",
	"name": "Merrimack Building Supply",
	"url": "<?php echo home_url(); ?>",
	"telephone": "603-424-7001",
	"address": {
		"@type": "PostalAddress",
		"streetAddress": "20 Trotter Dr",
		"addressLocality": "Merrimack",
		"addressRegion": "New Hampshire",
		"postalCode": "03054",
		"addressCountry": "USA"
	},
	"geo": {
		"@type": "GeoCoordinates",
		"latitude": "42.8337787",
		"longitude": "-71.5624069"
	},
	"hasMap": "https://www.google.com/maps/place/Merrimack+Building+Supply/@42.8337787,-71.5624069",
	"openingHours": "Mo-Fr 07:00-17:00",
	"priceRange": "Varies",
	"sameAs": [
		"https://www.facebook.com/MerrimackBuildingSupply/",
		"https://www.linkedin.com/company/1204961/"
	],
	"aggregateRating": {
		"@type": "AggregateRating",
		"ratingValue": "5",
		"reviewCount": "3"
	}
}
</script>
*/?>
</div></div>

<!-- Custom Code for Rockfon Megamenu -->

<script>
jQuery(document).ready(function($){

	$('#nav .menu > li.menu-item-has-children').hover(function(){
		$(this).closest('#header').addClass('headerActive');
	}, function(){
		$(this).closest('#header').removeClass('headerActive');
	})

function getTopPosition(){
	var t = $('#header').offset().top;
	var j = $('#header').height();
	var m = (t+j)-$(window).scrollTop();
	$('.custom-megamenu').css('top', m);
}

function createMegaMenu($menuID, $contentID){
	getTopPosition();
	var t = $('li.menu-item-' + $menuID + ' > a').html();
	var y = $('li.menu-item-' + $menuID + ' .sub-menu').prop('outerHTML');
	$('#'+$contentID+'-mega .menucontent').append(y);
	$('#'+$contentID+'-mega .menucontent h3').html(t);
	$('li.menu-item-' + $menuID + ' .sub-menu').remove();

	var i = $('#'+$contentID+'-mega').prop('outerHTML');
	$('#'+$contentID+'-mega').remove();
	$('li.menu-item-' + $menuID + '').append(i);

	$('li.menu-item-' + $menuID + '').hover(function(){
		$(this).addClass('active');
		$('.menuoverlay').addClass('active');
		$('header #'+$contentID+'-mega').addClass('open');
	}, function(){
		$(this).removeClass('active');
		$('.menuoverlay').removeClass('active');
		$('header #'+$contentID+'-mega').removeClass('open');
	});
	$(window).scroll(function(){
		$('header #'+$contentID+'-mega').removeClass('open');
		$('li.menu-item-' + $menuID).removeClass('active');
	});
}

$(window).scroll(function(){
	getTopPosition();
});
createMegaMenu(741, 'rockfon');
createMegaMenu(497, 'workwith');
createMegaMenu(352, 'products');



})

</script>



</body>
</html>

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->
