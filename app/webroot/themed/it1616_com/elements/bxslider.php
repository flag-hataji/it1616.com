<script type="text/javascript"> 
jQuery(document).ready(function() {
	jQuery('#slider').bxSlider({
		auto: true,
		autoControls: false,
		controls: false,
		pager: false,
		mode: 'horizontal',
		speed: 1000,
		autoHover: true,
		pause:	6000,
		easing: 'swing',
		displaySlideQty: 3,
		moveSlideQty: 2
	});
  	jQuery('.green-button').append('<span class="hover">Back to Article</span>').each(function () {
  		var span = jQuery('span.hover', this).css('opacity', 0);
  		jQuery(this).hover(function () {
    		span.stop().fadeTo(500, 1);
 		}, function () {
   		span.stop().fadeTo(500, 0);
  		});
	});
});
</script>

<div id="main" class="archive">
		
	<div class="clearfix">
		<ul id="slider">
			<li id="slider1">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>aboutus">私の生い立ち</a></h3>
				</div>
			</li>
			<li id="slider2">
				<div class="post drop-shadow lifted one">
				<h3><a href="<?php $bcBaser->root()?>message">宮成からのメッセージ</a></h3>
				</div>
			</li>
		</ul><!-- /slider -->
	</div><!-- /clearfix -->
</div> 