<div class="landing-container">
<?php $footer_text = get_field('footer_text');  ?>
<footer>
    <p> <?php echo $footer_text; ?> </p>
</footer>
</div>

<!-- wp_footer() -->
<?php wp_footer(); ?>
<!-- end wp_footer() -->

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
