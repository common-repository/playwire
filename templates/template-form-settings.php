<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>

<div class="wrap">

	<form method="post" id="settings-form" action="<?php echo esc_url ( admin_url( 'options.php' ) ) ?>" autocomplete="off">
		<?php settings_fields( playwire()->option_group ); ?>
		<?php do_settings_sections( playwire()->settings_page ); ?>
		<p><strong>Please Note:</strong> When syncing your videos, the page may go blank as videos are synced. Please be patient as the process completes.<br>This process may take a while depending on your internet connection and how many videos you have in your Playwire account. Click "Save Changes" to log in</p>
		<?php submit_button(); ?>
	</form>

	<div id="saveResult"></div>

	<hr class='settings-hr'>

	<h3><span class="dashicons dashicons-editor-help icon-lg"></span>Help Section</h3>
	<p>Click the "Open Help Section" button below for step-by-step instructional videos to help you use the Playwire Wordpress Plugin</p>
	<a class="help-click">OPEN HELP SECTION</a>

	<div id="help-section">

		<div class="row-holder">
		<div class='success-instructions'>
		<h3>View and Upload Videos</h3>

		<h4>*PLEASE NOTE - <em>You can upload videos from Playwire.com <strong>and</strong> from this Plugin.</em></h4><h4>If you have already have videos on Playwire, all your videos should be synced here already: <a href='<?php echo admin_url('/edit.php?post_type=playwire_videos'); ?>'>Playwire Video &gt;&nbsp;Videos</a></h4><h4>If you have no videos on Playwire, watch the tutorial video to learn how to upload your videos to Playwire.com from the Playwire Video Wordpress Plugin.</h4>
		</div>

		<div class='success-video'>
		<script data-id="help_1" data-config='//config.playwire.com/1006036/videos/v2/3670323/zeus.json' data-css='//cdn.playwire.com/bolt/js/zeus/skins/default.css' data-height='100%' data-width='100%' src='//cdn.playwire.com/bolt/js/zeus/embed.js' data-autoload="false" type='text/javascript'></script>
		</div>

		</div>

		<hr class='success-hr'>
		
		<div class="row-holder">
		<div class='success-instructions'>
		<h3>Create Video Galleries from Playlists on Playwire</h3>
		<h4>*PLEASE NOTE* - <em>Playwire Playlists are <strong>NOT</strong> the same as Video Galleries you create with this Plugin</em></h4><h4>You can easily create custom Video Galleries to embed in your pages with this plugin. Watch the tutorial video to learn how create Video Galleries from your Playwire Playlists.</h4><h4>After watching the tutorial video, <a href='<?php echo admin_url('/edit.php?post_type=playwire_playlists'); ?>'>click here</a> to create your first Video Gallery.</h4>
		</div>

		<div class='success-video'>
		<script data-id="help_2" data-config='//config.playwire.com/1006036/videos/v2/3670306/zeus.json' data-css='//cdn.playwire.com/bolt/js/zeus/skins/default.css' data-height='100%' data-width='100%' src='//cdn.playwire.com/bolt/js/zeus/embed.js' data-autoload="false" type='text/javascript'></script>
		</div>

		</div>

		<hr class='success-hr'>

		<div class="row-holder">
		<div class='success-instructions'>
		<h3>Embedding Videos and Video Galleries in Your Page or Post</h3>
		<h4>You can easily embed Videos and Video Galleries in your Wordpress Pages and Posts.</h4>
		<h4>After uploading videos to Playwire and creating Video Galleries, you are now able to embed your Videos and Video Gallery. Watch the tutorial video to learn how.</h4>
		</div>

		<div class='success-video'>

		<script data-id="help_3" data-config='//config.playwire.com/1006036/videos/v2/3670274/zeus.json' data-css='//cdn.playwire.com/bolt/js/zeus/skins/default.css' data-height='100%' data-width='100%' src='//cdn.playwire.com/bolt/js/zeus/embed.js' data-autoload="false" type='text/javascript'></script>
		</div>

		</div>

		<hr class='success-hr'>
	</div>

</div>