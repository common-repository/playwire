<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly  
	global $pagenow;
	$publisher_id = PlaywirePublisher::get_pub_id();
?>

<div id="<?php echo esc_attr( $id ); ?>_container" style="max-width:<?php echo absint( $current_ratio_width ); ?>px;">

	<div id="<?php echo esc_attr( $id ); ?>" class="flexslider">

		<ul class="slides">

			<?php foreach ( $playlist['videos'] as $key => $value ) : ?>

				<li>

					<script data-config="<?php echo esc_url( '//config.playwire.com/' . rtrim($publisher_id, '/' ) . '/videos/v2/' . rtrim( $value['id'], '/' ) . '/zeus.json' ); ?>" data-css="http://cdn.playwire.com/bolt/js/zeus/skins/default.css" src="//cdn.playwire.com/bolt/js/zeus/embed.js" type="text/javascript"></script>

				</li>

			<?php endforeach; ?>

		</ul>

	</div>

	<div id="<?php echo esc_attr( $id ); ?>_control" class="flexslider flexslider-control">

		<ul class="slides">
			<?php $slide_max = 0; ?>
			<?php foreach ( $playlist['videos'] as $key => $value ) : ?>

				<li>

					<?php include PLAYWIRE_PATH . 'templates/play.svg'; ?>

					<img src="<?php echo esc_url( $value['thumbnail']['320x240'] ); ?>" width="320" height="240" onError="this.onerror=null;this.src='<?php echo esc_url( '//placehold.it/320x240/' . strtoupper( dechex( rand( 0, 10000000 ) ) ) . '/ffffff&amp;text=No&nbsp;Thumb' ); ?>';"/>


				</li>
				<?php $slide_max++; ?>
			<?php endforeach; ?>

		</ul>

	</div>

</div>

<?php if(is_admin()): if ( $pagenow == "edit.php" || $pagenow == "post.php" || 'post-new.php' == $pagenow ) : ?>

<hr>
<h3 class="playlist-heading">Follow these steps to <span class="underline">embed</span> Video Galleries into your posts and pages:</h3>
<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep1.jpg";?>" alt="Creating Video Galleries - Step One" />

<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep2.jpg";?>" alt="Creating Video Galleries - Step Two" />

<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep3.jpg";?>" alt="Creating Video Galleries - Step Three" />

<?php endif; ?>
<?php endif; ?>

<script type="text/javascript">
jQuery( document ).ready(function( $ ) {

	var ratioWidth = <?php echo esc_js( ( int ) $current_ratio_width / 4.2 ); ?>

	$( "#<?php echo esc_js( $id ); ?>_control" ).flexslider( {
		animation: "slide",
		animationLoop: false,
		slideshow: false,
		itemWidth: ratioWidth,
		itemMargin: 5,
		maxItems: <?php echo esc_js( $slide_max ); ?>,
		asNavFor: '#<?php echo esc_js( $id ); ?>'
	} );

	$( "#<?php echo esc_js( $id ); ?>" ).flexslider( {
		animation: "slide",
		useCSS: false, /*Fixes potential problem with some webkit browsers for video players*/
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#<?php echo esc_js( $id ); ?>_control",
		before: function( slider ) {
			/*Pause the bolt player*/
		}
	} );

	$( '.flexslider-control .slides li, .flexslider-control .slides li img' ).each( function() {
		var ratio       = '<?php echo (string) esc_js( $current_ratio ); ?>';
		var thumbRatio  = ( ratio == "widescreen" ) ? 1.777 : 1.333;
		var slideHeight =  ratioWidth / thumbRatio;
		$( this ).css( 'height', slideHeight );
	} );

} );
</script>
