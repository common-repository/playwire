<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
	global $pagenow;
	$publisher_id = PlaywirePublisher::get_pub_id();
?>

<div id="<?php echo esc_attr( $id ); ?>" style="margin:10px auto;">
	<script data-config="<?php echo esc_url( '//config.playwire.com/' . rtrim($publisher_id, '/' ) . '/videos/v2/' . rtrim( $current_single_video, '/' ) . '/zeus.json' ); ?>" data-width="100%" data-height="100%" data-css="http://cdn.playwire.com/bolt/js/zeus/skins/default.css" src="//cdn.playwire.com/bolt/js/zeus/embed.js" type="text/javascript"></script>	
</div>
