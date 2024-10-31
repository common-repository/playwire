<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
	global $pagenow;
	$publisher_id = PlaywirePublisher::get_pub_id();
?>

<div id="<?php echo esc_attr( $id ); ?>" style="text-align:center;margin:0 auto;">
	<script data-config="<?php echo esc_url( '//config.playwire.com/' . rtrim($publisher_id, '/' ) . '/playlists/v2/' . rtrim( $current_playlist, '/' ) . '/zeus.json' ); ?>" data-css="http://cdn.playwire.com/bolt/js/zeus/skins/default.css" data-width="100%" data-height="100%" src="//cdn.playwire.com/bolt/js/zeus/embed.js" type="text/javascript"></script>
</div>

<?php if(is_admin()): if ( $pagenow == "edit.php" || $pagenow == "post.php" || 'post-new.php' == $pagenow ) : ?>
<hr>
<h3 class="playlist-heading">Follow these steps to <span class="underline">embed</span> Video Galleries into your posts and pages:</h3>
<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep1.jpg";?>" alt="Creating Video Galleries - Step One" />

<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep2.jpg";?>" alt="Creating Video Galleries - Step Two" />

<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep3.jpg";?>" alt="Creating Video Galleries - Step Three" />

<?php endif; ?>
<?php endif; ?>
