<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
	global $pagenow;
	$url = PlaywirePublisher::pub_id_playlists();
?>

<?php if(is_admin()): if ( $pagenow == "edit.php" || $pagenow == "post.php" || 'post-new.php' == $pagenow ) : 

	$has_playlists = PlaywirePublisher::get_playlists();

	if ( $has_playlists ) : ?>

		<div class="playwire-warning">
			<p><?php esc_html_e( 'Preview unavailable until you select a playlist in the dropdown above', 'playwire' ); ?></p>
		</div>

	<?php else: ?>

		<div class="playwire-error">
			<h3 class="error-styles"><span class="dashicons dashicons-flag redski"></span><?php esc_html_e( 'You must create playlists on Playwire.com account before you can create Video Galleries', 'playwire' ); ?></br></br>&roarr;
			<a href="<?php echo $url ?>" target="_blank">Click here to Create Playlists on Playwire</a></h3>
		</div>

	<?php endif; ?>

	<hr>
	<h3 class="playlist-heading">Follow these steps to <span class="underline">embed</span> Video Galleries into your posts and pages:</h3>
	<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep1.jpg";?>" alt="Creating Video Galleries - Step One" />

	<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep2.jpg";?>" alt="Creating Video Galleries - Step Two" />

	<img class="metabox-image" src="<?php echo PLAYWIRE_URL . "assets/img/videoGalleryStep3.jpg";?>" alt="Creating Video Galleries - Step Three" />

<?php endif; ?>
<?php endif; ?>