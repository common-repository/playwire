<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
	global $pagenow;
	$publisher_id = PlaywirePublisher::get_pub_id();
?>

<div id="<?php echo esc_attr( $id ); ?>" class="playwire-gallery">
	<?php $count = 0; ?>
	<?php foreach ( $playlist['videos'] as $key => $value ) : ?>
			<?php if ( 0 == $count % 3 ) : ?>
				<div class="clear"></div>
			<?php endif; ?>
			<div id="<?php echo esc_attr( $value['id'] ); ?>" style="display:none;background:#000;width:<?php echo esc_attr($current_ratio_width);?>px;height:<?php echo esc_attr($current_ratio_height);?>px;">
			</div>
			<a class="thickbox" data-id="<?php echo esc_attr( $value['id'] ); ?>" data-publisher="<?php echo esc_attr( $publisher_id ); ?>" data-w="<?php echo esc_attr( $current_ratio_width ); ?>" data-h="<?php echo esc_attr( $current_ratio_height ); ?>" title="<?php echo esc_attr( $value['name'] ); ?>" href="#TB_inline?height=<?php echo absint( $current_ratio_height ); ?>&amp;width=<?php echo absint( $current_ratio_width ); ?>&amp;inlineId=<?php echo esc_attr( $value['id'] ); ?>">
				<div class="vertical-video-alignment">
					<?php include PLAYWIRE_PATH . 'templates/play.svg'; ?>
						<?php if ( $current_ratio == 'widescreen' ) : ?>
							<img src="<?php echo esc_url( $value['thumbnail']['320x240'] ); ?>" width="320" height="240" onError="this.onerror=null;this.src='<?php echo esc_url(  '//placehold.it/320x240/' . strtoupper(  dechex(  rand(  0,  10000000  )  )  ) . '/ffffff&amp;text=No&nbsp;Thumb'  ); ?>';"/>
						<?php else: ?>
							<img src="<?php echo esc_url( $value['thumbnail']['96x96'] ); ?>" width="96" height="96" onError="this.onerror=null;this.src='<?php echo esc_url(  '//placehold.it/96x96/' . strtoupper(  dechex(  rand(  0,  10000000  )  )  ) . '/ffffff&amp;text=No&nbsp;Thumb'  ); ?>';"/>
						<?php endif; ?>
				</div>
				<h3><?php echo esc_html( $value['name'] ); ?></h3>
			</a>
			<?php $count++; ?>
	<?php endforeach; ?>
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

jQuery(document).ready(function(){

	jQuery('.thickbox').one('click', function(event){
		var pw_pub_id = jQuery(this).attr('data-publisher');
			pw_vid_id = jQuery(this).attr('data-id');
			w = jQuery(this).attr('data-w');
			h = jQuery(this).attr('data-h');
			makePlayer(pw_pub_id, pw_vid_id, w, h);
	});
	
	var	makePlayer =  function (pw_pub_id, pw_vid_id, w, h) {
		try{
			var script = document.createElement('script');
			script.src = '//cdn.playwire.com/bolt/js/zeus/embed.js';
			script.type = 'text/javascript';
			script.id = 'script';
			script.setAttribute('data-config', '//config.playwire.com/'+ pw_pub_id +'/videos/v2/'+ pw_vid_id +'/zeus.json'); 
			script.setAttribute('data-css', 'http://cdn.playwire.com/bolt/js/zeus/skins/default.css');
			script.setAttribute('data-id', 'player-' + pw_vid_id);
			script.setAttribute('data-width', w); 
			script.setAttribute('data-height', h); 
			var hash= '#';
			div = hash+pw_vid_id;
			console.log(div);

			pw_div = document.getElementById(pw_vid_id);
			pw_div.appendChild(script);
			
		}catch(e){
			console.log(e);
		}
	}

});
</script>












