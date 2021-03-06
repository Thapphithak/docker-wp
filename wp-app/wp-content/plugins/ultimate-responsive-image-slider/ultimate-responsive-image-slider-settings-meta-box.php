<?php
/**
 * Load Saved Ultimate Responsive Image Slider Pro Settings
 */
$PostId = $post->ID;
$WRIS_Gallery_Settings_Key = "WRIS_Gallery_Settings_".$PostId;
$WRIS_Gallery_Settings = unserialize(get_post_meta( $PostId, $WRIS_Gallery_Settings_Key, true)); 

if(isset($WRIS_Gallery_Settings['WRIS_L3_Title_Align'])) 
		$WRIS_L3_Title_Align   		    = $WRIS_Gallery_Settings['WRIS_L3_Title_Align'];
	else
		$WRIS_L3_Title_Align				= "2";	
	
if(isset($WRIS_Gallery_Settings['WRIS_L3_Slider_Scale_Mode'])) 
		$WRIS_L3_Slider_Scale_Mode   		    = $WRIS_Gallery_Settings['WRIS_L3_Slider_Scale_Mode'];
	else
		$WRIS_L3_Slider_Scale_Mode				= "cover";		
		
if(isset($WRIS_Gallery_Settings['WRIS_L3_Slider_Auto_Scale'])) 
		$WRIS_L3_Slider_Auto_Scale   		    = $WRIS_Gallery_Settings['WRIS_L3_Slider_Auto_Scale'];
	else
		$WRIS_L3_Slider_Auto_Scale				= 1;	

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slide_Title'])) 
		$WRIS_L3_Slide_Title   		    	= $WRIS_Gallery_Settings['WRIS_L3_Slide_Title'];
	else
		$WRIS_L3_Slide_Title				= 1;	

if(isset($WRIS_Gallery_Settings['WRIS_L3_Set_slide_Title'])) 
		$WRIS_L3_Set_slide_Title   		    	= $WRIS_Gallery_Settings['WRIS_L3_Set_slide_Title'];
	else
		$WRIS_L3_Set_slide_Title				= 0;		

if(isset($WRIS_Gallery_Settings['WRIS_L3_Auto_Slideshow'])) 
	$WRIS_L3_Auto_Slideshow				= $WRIS_Gallery_Settings['WRIS_L3_Auto_Slideshow'];
else
	$WRIS_L3_Auto_Slideshow				= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Transition']))
	$WRIS_L3_Transition   				= $WRIS_Gallery_Settings['WRIS_L3_Transition'];
else
	$WRIS_L3_Transition   				= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Transition_Speed']))
	$WRIS_L3_Transition_Speed   		= $WRIS_Gallery_Settings['WRIS_L3_Transition_Speed'];
else
	$WRIS_L3_Transition_Speed   		= 5000;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slide_Order']))
	$WRIS_L3_Slide_Order   				= $WRIS_Gallery_Settings['WRIS_L3_Slide_Order'];
else
	$WRIS_L3_Slide_Order   				= "ASC";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slide_Distance']))
	$WRIS_L3_Slide_Distance   			= $WRIS_Gallery_Settings['WRIS_L3_Slide_Distance'];
else
	$WRIS_L3_Slide_Distance   			= 5;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Sliding_Arrow']))
	$WRIS_L3_Sliding_Arrow   			= $WRIS_Gallery_Settings['WRIS_L3_Sliding_Arrow'];
else
	$WRIS_L3_Sliding_Arrow   			= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slider_Navigation']))
	$WRIS_L3_Slider_Navigation   		= $WRIS_Gallery_Settings['WRIS_L3_Slider_Navigation'];
else
	$WRIS_L3_Slider_Navigation   		= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Navigation_Position']))
	$WRIS_L3_Navigation_Position   		= $WRIS_Gallery_Settings['WRIS_L3_Navigation_Position'];
else
	$WRIS_L3_Navigation_Position   		= "bottom";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Style']))
	$WRIS_L3_Thumbnail_Style   			= $WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Style'];
else
	$WRIS_L3_Thumbnail_Style   			= "border";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Width']))
	$WRIS_L3_Thumbnail_Width   			= $WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Width'];
else
	$WRIS_L3_Thumbnail_Width   			= 120;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Height']))
	$WRIS_L3_Thumbnail_Height   		= $WRIS_Gallery_Settings['WRIS_L3_Thumbnail_Height'];
else
	$WRIS_L3_Thumbnail_Height   		= 120;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Navigation_Button']))
	$WRIS_L3_Navigation_Button   		= $WRIS_Gallery_Settings['WRIS_L3_Navigation_Button'];
else
	$WRIS_L3_Navigation_Button   		= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Width']))
	$WRIS_L3_Width   					= $WRIS_Gallery_Settings['WRIS_L3_Width'];
else
	$WRIS_L3_Width   					= "custom";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slider_Width']))
	$WRIS_L3_Slider_Width   			= $WRIS_Gallery_Settings['WRIS_L3_Slider_Width'];
else
	$WRIS_L3_Slider_Width   			= 1000;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Height']))
	$WRIS_L3_Height   					= $WRIS_Gallery_Settings['WRIS_L3_Height'];
else
	$WRIS_L3_Height   					= "custom";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Slider_Height']))
	$WRIS_L3_Slider_Height   			= $WRIS_Gallery_Settings['WRIS_L3_Slider_Height'];
else
	$WRIS_L3_Slider_Height   			= 500;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Font_Style']))
	$WRIS_L3_Font_Style          	= $WRIS_Gallery_Settings['WRIS_L3_Font_Style'];
else
	$WRIS_L3_Font_Style          		= "Arial";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Title_Color']))
	$WRIS_L3_Title_Color   				= $WRIS_Gallery_Settings['WRIS_L3_Title_Color'];
else
	$WRIS_L3_Title_Color   				= "#00000";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Title_BgColor']))
	$WRIS_L3_Title_BgColor   			= $WRIS_Gallery_Settings['WRIS_L3_Title_BgColor'];
else
	$WRIS_L3_Title_BgColor   			= "#FFFFFF";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Desc_Color']))
	$WRIS_L3_Desc_Color   				= $WRIS_Gallery_Settings['WRIS_L3_Desc_Color'];
else
	$WRIS_L3_Desc_Color   				= "#FFFFFF";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Desc_BgColor']))
	$WRIS_L3_Desc_BgColor  				= $WRIS_Gallery_Settings['WRIS_L3_Desc_BgColor'];
else
	$WRIS_L3_Desc_BgColor  				= "#00000";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Navigation_Color']))
	$WRIS_L3_Navigation_Color  			= $WRIS_Gallery_Settings['WRIS_L3_Navigation_Color'];
else
	$WRIS_L3_Navigation_Color  			= "#FFFFFF";

if(isset($WRIS_Gallery_Settings['WRIS_L3_Fullscreeen']))
	$WRIS_L3_Fullscreeen  				= $WRIS_Gallery_Settings['WRIS_L3_Fullscreeen'];
else
	$WRIS_L3_Fullscreeen  				= 1;

if(isset($WRIS_Gallery_Settings['WRIS_L3_Custom_CSS']))
	$WRIS_L3_Custom_CSS   				= $WRIS_Gallery_Settings['WRIS_L3_Custom_CSS'];
else
	$WRIS_L3_Custom_CSS   				= "";
	
if(isset($WRIS_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color']))
	$WRIS_L3_Navigation_Bullets_Color   = $WRIS_Gallery_Settings['WRIS_L3_Navigation_Bullets_Color'];
else
	$WRIS_L3_Navigation_Bullets_Color   = "#000000";
	
if(isset($WRIS_Gallery_Settings['WRIS_L3_Navigation_Pointer_Color']))
	$WRIS_L3_Navigation_Pointer_Color   = $WRIS_Gallery_Settings['WRIS_L3_Navigation_Pointer_Color'];
else
	$WRIS_L3_Navigation_Pointer_Color   = "#000000";
?>
<script type="text/javascript">
jQuery(document).ready(function(){
	var editor = CodeMirror.fromTextArea(document.getElementById("wl-l3-custom-css"), {
	lineWrapping: true,
	lineNumbers: true,
	styleActiveLine: true,
	matchBrackets: true,
	hint:true,
	theme : 'blackboard',
	extraKeys: {"Ctrl-Space": "autocomplete"},
	});
	jQuery(window).scroll(function(){
		if (jQuery(this).scrollTop() < 200) {
			jQuery('#smoothup') .fadeOut();
		} else {
			jQuery('#smoothup') .fadeIn();
		}
	});
	jQuery('#smoothup').on('click', function(){
		jQuery('html, body').animate({scrollTop:0}, 'fast');
		return false;
	});
});
</script>

<style>
.custnote{
    background-color: rgba(23, 31, 22, 0.64);
    color: #fff;
    width: 348px;
    border-radius: 5px;
    padding-right: 5px;
    padding-left: 5px;
    padding-top: 2px;
    padding-bottom: 2px;
}
.thumb-pro th, .thumb-pro label, .thumb-pro h3, .thumb-pro {
	color:#31a3dd !important;
	font-weight:bold;
}
.caro-pro th, .caro-pro label, .caro-pro h3, .caro-pro {
	color:#DA5766 !important;
	font-weight:bold;
}
#smoothup {
	height: 50px;
	width: 50px;
	position:fixed;
	bottom:50px;
	right:250px;
	text-indent:-9999px;
	display:none;
	background: url("<?php echo URIS_PLUGIN_URL.'/img/up.png'; ?>");
	-webkit-transition-duration: 0.4s;
	-moz-transition-duration: 0.4s; transition-duration: 0.4s;
}

#smoothup:hover {
	-webkit-transform: rotate(360deg) }
	background: url('') no-repeat;
}
</style>
<?php require_once("tooltip.php"); ?>	
<input type="hidden" id="wl_action" name="wl_action" value="wl-save-settings">
<table class="form-table">
	<tbody>
		<tr id="L3">
			<th scope="row"><label><?php _e('Set Slide Title As', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Set_slide_Title)) $WRIS_L3_Set_slide_Title = 0; ?>

				<input type="radio" name="wl-l3-set-slide-title" id="wl-l3-set-slide-title" value="0" <?php if($WRIS_L3_Set_slide_Title == 0 ) { echo "checked"; } ?>> Custom Title</i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-set-slide-title" id="wl-l3-set-slide-title" value="1" <?php if($WRIS_L3_Set_slide_Title == 1 ) { echo "checked"; } ?>> File Title (Slide Title as a image file name)</i>
				<p class="description">
					<?php _e('Select Custom/File option to set slide title as above slider', URIS_TD); ?>.
				</p>
			</td>
		</tr>

		<tr id="L3">
			<th scope="row"><label><?php _e('Display Slider Title', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slide_Title)) $WRIS_L3_Slide_Title = 1; ?>
				<input type="radio" name="wl-l3-slide-title" id="wl-l3-slide-title" value="1" <?php if($WRIS_L3_Slide_Title == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-slide-title" id="wl-l3-slide-title" value="0" <?php if($WRIS_L3_Slide_Title == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show/hide slide title above slider', URIS_TD); ?>.
				</p>
			</td>
		</tr>

		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Title Alignment', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Title_Align)) $WRIS_L3_Title_Align = 1; ?>
				<input type="radio" name="wl-l3-title-align" id="wl-l3-title-align" value="1" <?php if($WRIS_L3_Title_Align == 1 ) { echo "checked"; } ?>> Left &nbsp;&nbsp;
				<input type="radio" name="wl-l3-title-align" id="wl-l3-title-align" value="2" <?php if($WRIS_L3_Title_Align == 2 ) { echo "checked"; } ?>> Center &nbsp;&nbsp;
				<input type="radio" name="wl-l3-title-align" id="wl-l3-title-align" value="3" <?php if($WRIS_L3_Title_Align == 3 ) { echo "checked"; } ?>> Right
			</td>
		</tr>

		<tr id="L3">
			<th scope="row"><label><?php _e('Auto Play Slide Show', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Auto_Slideshow)) $WRIS_L3_Auto_Slideshow = 1; ?>
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="1" <?php if($WRIS_L3_Auto_Slideshow == 1 ) { echo "checked"; } ?>> <?php _e('Yes', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="2" <?php if($WRIS_L3_Auto_Slideshow == 2 ) { echo "checked"; } ?>> <?php _e('Yes with Stop on Mouse Hover', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-auto-slide" id="wl-l3-auto-slide" value="3" <?php if($WRIS_L3_Auto_Slideshow == 3 ) { echo "checked"; } ?>> <?php _e('No', URIS_TD); ?>
				<p class="description">
					<?php _e('Select Yes/No option to auto slide enable or disable into slider', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Transition', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Transition)) $WRIS_L3_Transition = 1; ?>
				<input type="radio" name="wl-l3-transition" id="wl-l3-transition" value="1" <?php if($WRIS_L3_Transition == 1 ) { echo "checked"; } ?>> Fade &nbsp;&nbsp;
				<input type="radio" name="wl-l3-transition" id="wl-l3-transition" value="0" <?php if($WRIS_L3_Transition == 0 ) { echo "checked"; } ?>> Slide
				<p class="description">
					<?php _e('Select a transition effect you want to apply on slides', URIS_TD); ?>.
				</p>
			</td>
		</tr>		
		<tr id="L3">
			<th scope="row"><label><?php _e('Autoplay Slider Speed', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Transition_Speed)) $WRIS_L3_Transition_Speed = 5000; ?>
				<input class="uris-slider" name="wl-l3-transition-speed" id="wl-l3-transition-speed" type="range" min="1000" max="60000" step="1000" value="<?php echo $WRIS_L3_Transition_Speed; ?>" data-rangeSlider>
				<span id="uris-range-val"></span>
				<p class="description">
					<?php _e('Set your desired slider speed of slides. Default speed is 5 Second', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<script>
		var slider = document.getElementById("wl-l3-transition-speed");
		var output = document.getElementById("uris-range-val");
		
		var x = slider.value;
		var y = x/1000;
		output.innerHTML = y;
		
		slider.oninput = function() {
			var x = slider.value;
			var y = x/1000;
			output.innerHTML = y;
		}
		</script>
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Order', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slide_Order)) $WRIS_L3_Slide_Order = "ASC"; ?>
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="ASC" <?php if($WRIS_L3_Slide_Order == "ASC" ) { echo "checked"; } ?>> <?php _e('Ascending', URIS_TD); ?>  &nbsp;&nbsp;
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="DESC" <?php if($WRIS_L3_Slide_Order == "DESC" ) { echo "checked"; } ?>> <?php _e('Descending', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-slide-order" id="wl-l3-slide-order" value="shuffle" <?php if($WRIS_L3_Slide_Order == "shuffle" ) { echo "checked"; } ?>> <?php _e('Random', URIS_TD); ?>
				<p class="description">
					<?php _e('Select a slide order you want to apply on slides', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Distance', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slide_Distance)) $WRIS_L3_Slide_Distance = 5; ?>
				<select name="wl-l3-slide-distance" id="wl-l3-slide-distance">
					<option value="0" <?php if($WRIS_L3_Slide_Distance == 0) echo "selected=selected";?>>0</option>
					<option value="5" <?php if($WRIS_L3_Slide_Distance == 5) echo "selected=selected";?>>5</option>
					<option value="10" <?php if($WRIS_L3_Slide_Distance == 10) echo "selected=selected";?>>10</option>
					<option value="15" <?php if($WRIS_L3_Slide_Distance == 15) echo "selected=selected";?>>15</option>
					<option value="20" <?php if($WRIS_L3_Slide_Distance == 20) echo "selected=selected";?>>20</option>
					<option value="25" <?php if($WRIS_L3_Slide_Distance == 25) echo "selected=selected";?>>25</option>
				</select>
				<p class="description">
					<?php _e('Set a gap between all slides. Range 0 to 25', URIS_TD); ?>&nbsp;
					<a href="#" id="p6" data-tooltip="#s6"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Sliding Arrow', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Sliding_Arrow)) $WRIS_L3_Sliding_Arrow = 1; ?>
				<input type="radio" name="wl-l3-sliding-arrow" id="wl-l3-sliding-arrow" value="1" <?php if($WRIS_L3_Sliding_Arrow == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-sliding-arrow" id="wl-l3-sliding-arrow" value="0" <?php if($WRIS_L3_Sliding_Arrow == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide arrows on mouse hover on slide', URIS_TD); ?>.
					<a href="#" id="p1" data-tooltip="#s1"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Show Thumbnail', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slider_Navigation)) $WRIS_L3_Slider_Navigation = 1; ?>
				<input type="radio" name="wl-l3-navigation" id="wl-l3-navigation" value="1" <?php if($WRIS_L3_Slider_Navigation == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-navigation" id="wl-l3-navigation" value="0" <?php if($WRIS_L3_Slider_Navigation == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide thumbnail based navigation under slides', URIS_TD); ?>.
					<a href="#" id="p2" data-tooltip="#s2"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Thumbnail Position', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Navigation_Position)) $WRIS_L3_Navigation_Position = "bottom"; ?>
				<input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position" value="top" <?php if($WRIS_L3_Navigation_Position == "top" ) { echo "checked"; } ?>> <?php _e('Top', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-navigation-position" id="wl-l3-navigation-position" value="bottom" <?php if($WRIS_L3_Navigation_Position == "bottom" ) { echo "checked"; } ?>> <?php _e('Bottom', URIS_TD); ?>
				<p class="description">
					<?php _e('Select a thumbnail position to show above or below the slider', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Thumbnail Style', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Thumbnail_Style)) $WRIS_L3_Thumbnail_Style = "border"; ?>
				<input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style" value="border" <?php if($WRIS_L3_Thumbnail_Style == "border" ) { echo "checked"; } ?>> <?php _e('Border', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-thumbnail-style" id="wl-l3-thumbnail-style" value="pointer" <?php if($WRIS_L3_Thumbnail_Style == "pointer" ) { echo "checked"; } ?>> <?php _e('Pointer', URIS_TD); ?>
				<p class="description">
					<?php _e('Select a thumbnail style to apply on thumbnails', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Thumbnail Resize', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Thumbnail_Width)) $WRIS_L3_Thumbnail_Width = "120"; ?>
				<?php if(!isset($WRIS_L3_Thumbnail_Height)) $WRIS_L3_Thumbnail_Height = "120"; ?>
				<?php _e('Width', URIS_TD); ?> <input type="text" name="wl-l3-navigation-width" id="wl-l3-navigation-width" value="<?php echo $WRIS_L3_Thumbnail_Width; ?>"> &nbsp;&nbsp;
				<?php _e('Height', URIS_TD); ?> <input type="text" name="wl-l3-navigation-height" id="wl-l3-navigation-height" value="<?php echo $WRIS_L3_Thumbnail_Height; ?>">
				<p class="description">
					<?php _e('Set custom thumbnail height & width according to you', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Show Navigation Bullets', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Navigation_Button)) $WRIS_L3_Navigation_Button = 1; ?>
				<input type="radio" name="wl-l3-navigation-button" id="wl-l3-navigation-button" value="1" <?php if($WRIS_L3_Navigation_Button == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-navigation-button" id="wl-l3-navigation-button" value="0" <?php if($WRIS_L3_Navigation_Button == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option to show or hide slider navigation buttons under image slider', URIS_TD); ?>.
					<a href="#" id="p3" data-tooltip="#s3"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Width', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slider_Width)) $WRIS_L3_Slider_Width = 1000; ?>
				<?php if(!isset($WRIS_L3_Width)) $WRIS_L3_Width = "custom"; ?>
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="100%" <?php if($WRIS_L3_Width == "100%" ) { echo "checked"; } ?>> <?php _e('100% Width', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="fullWidth" <?php if($WRIS_L3_Width == "fullWidth" ) { echo "checked"; } ?>> <?php _e('Full Width', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-width" id="wl-l3-width" value="custom" <?php if($WRIS_L3_Width == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', URIS_TD); ?>
				<input type="text" name="wl-l3-slider-width" id="wl-l3-slider-width" value="<?php echo $WRIS_L3_Slider_Width; ?>">
				<p class="description">
					<?php _e('Enter your desired width for slider. Default width is 1000px', URIS_TD); ?>.
					<a href="#" id="p4" data-tooltip="#s4"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slider Height', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slider_Height)) $WRIS_L3_Slider_Height = 500; ?>
				<?php if(!isset($WRIS_L3_Height)) $WRIS_L3_Height = "custom"; ?>				
				<input type="radio" name="wl-l3-height" id="wl-l3-height" value="auto" <?php if($WRIS_L3_Height == "auto" ) { echo "checked"; } ?>> <?php _e('Auto Height', URIS_TD); ?> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-height" id="wl-l3-height" value="custom" <?php if($WRIS_L3_Height == "custom" ) { echo "checked"; } ?>> <?php _e('Custom', URIS_TD); ?>
				<input type="text" name="wl-l3-slider-height" id="wl-l3-slider-height" value="<?php echo $WRIS_L3_Slider_Height; ?>">
				<p class="description">
					<?php _e('Enter your desired height for slider. Default height is 500px', URIS_TD); ?>.
					<a href="#" id="p5" data-tooltip="#s5"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Scale Mode', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slider_Scale_Mode)) $WRIS_L3_Slider_Scale_Mode = "cover"; ?>
				<select name="wl-l3-slider_scale_mode" id="wl-l3-slider_scale_mode" class="standard-dropdown">
					<optgroup label="Select Slider Scale Mode">
						<option value="none" <?php if($WRIS_L3_Slider_Scale_Mode == "none" ) { echo "selected=selected"; } ?>><?php _e('None', URIS_TD); ?></option>
						<option value="exact" <?php if($WRIS_L3_Slider_Scale_Mode == "exact" ) { echo "selected=selected"; } ?>><?php _e('Exact', URIS_TD); ?></option>
						<option value="contain" <?php if($WRIS_L3_Slider_Scale_Mode == "contain" ) { echo "selected=selected"; } ?>><?php _e('Contain', URIS_TD); ?></option>
						<option value="cover" <?php if($WRIS_L3_Slider_Scale_Mode == "cover" ) { echo "selected=selected"; } ?>><?php _e('Cover', URIS_TD); ?></option>
					</optgroup>
				</select>
				<p class="description">
					<?php _e('Select a slide scale mode for slide frame', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Auto Scale', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Slider_Auto_Scale)) $WRIS_L3_Slider_Auto_Scale = 1; ?>
				<input type="radio" name="wl-l3-slider-auto-scale" id="wl-l3-slider-auto-scale" value="1" <?php if($WRIS_L3_Slider_Auto_Scale == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> 
				<input type="radio" name="wl-l3-slider-auto-scale" id="wl-l3-slider-auto-scale" value="0" <?php if($WRIS_L3_Slider_Auto_Scale == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option for slide auto scale', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr>
			<th scope="row"><label><?php _e("Font Style", URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Font_Style)) $WRIS_L3_Font_Style = "Arial";?>	
				<select name="wl-l3-font-style" id="wl-l3-font-style" class="standard-dropdown" >
					<optgroup label="Default Fonts">
						<option value="Arial" <?php selected($WRIS_L3_Font_Style, 'Arial' ); ?>>Arial</option>
                        <option value="Arial Black" <?php selected($WRIS_L3_Font_Style, 'Arial Black' ); ?>>Arial Black</option>
                        <option value="Courier New" <?php selected($WRIS_L3_Font_Style, 'Courier New' ); ?>>Courier New</option>
                        <option value="cursive" <?php selected($WRIS_L3_Font_Style, 'cursive' ); ?>>Cursive</option>
                        <option value="fantasy" <?php selected($WRIS_L3_Font_Style, 'fantasy' ); ?>>Fantasy</option>
                        <option value="Georgia" <?php selected($WRIS_L3_Font_Style, 'Georgia' ); ?>>Georgia</option>
                        <option value="Grande"<?php selected($WRIS_L3_Font_Style, 'Grande' ); ?>>Grande</option>
                        <option value="Helvetica Neue" <?php selected($WRIS_L3_Font_Style, 'Helvetica Neue' ); ?>>Helvetica Neue</option>
                        <option value="Impact" <?php selected($WRIS_L3_Font_Style, 'Impact' ); ?>>Impact</option>
                        <option value="Lucida" <?php selected($WRIS_L3_Font_Style, 'Lucida' ); ?>>Lucida</option>
                        <option value="Lucida Console"<?php selected($WRIS_L3_Font_Style, 'Lucida Console' ); ?>>Lucida Console</option>
                        <option value="monospace" <?php selected($WRIS_L3_Font_Style, 'monospace' ); ?>>Monospace</option>
                        <option value="Open Sans" <?php selected($WRIS_L3_Font_Style, 'Open Sans' ); ?>>Open Sans</option>
                        <option value="Palatino" <?php selected($WRIS_L3_Font_Style, 'Palatino' ); ?>>Palatino</option>
                        <option value="sans" <?php selected($WRIS_L3_Font_Style, 'sans' ); ?>>Sans</option>
                        <option value="sans-serif" <?php selected($WRIS_L3_Font_Style, 'sans-serif' ); ?>>Sans-Serif</option>
                        <option value="Tahoma" <?php selected($WRIS_L3_Font_Style, 'Tahoma' ); ?>>Tahoma</option>
                        <option value="Times New Roman"<?php selected($WRIS_L3_Font_Style, 'Times New Roman' ); ?>>Times New Roman</option>
                        <option value="Trebuchet MS" <?php selected($WRIS_L3_Font_Style, 'Trebuchet MS' ); ?>>Trebuchet MS</option>
                        <option value="Verdana" <?php selected($WRIS_L3_Font_Style, 'Verdana' ); ?>>Verdana</option>
					</optgroup>
				</select>
				<p class="description"><?php _e("Choose a caption font style", URIS_TD); ?></p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Title Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Title_Color)) $WRIS_L3_Title_Color = "#000000"; ?>
				<input id="wl-l3-title-color" name="wl-l3-title-color" type="text" value="<?php echo $WRIS_L3_Title_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color to set slide title color', URIS_TD); ?>.
					<a href="#" id="p7" data-tooltip="#s7"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Title Background Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Title_BgColor)) $WRIS_L3_Title_BgColor = "#FFFFFF"; ?>
				<input id="wl-l3-title-bgcolor" name="wl-l3-title-bgcolor" type="text" value="<?php echo $WRIS_L3_Title_BgColor; ?>" class="my-color-field" data-default-color="#ffffff" />
				<p class="description">
					<?php _e('Select a color to set slide title background color', URIS_TD); ?>.
					<a href="#" id="p8" data-tooltip="#s8"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Description Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Desc_Color)) $WRIS_L3_Desc_Color = "#FFFFFF"; ?>
				<input id="wl-l3-desc-color" name="wl-l3-desc-color" type="text" value="<?php echo $WRIS_L3_Desc_Color; ?>" class="my-color-field" data-default-color="#ffffff" />
				<p class="description">
					<?php _e('Select a color to set slide description color', URIS_TD); ?>.
					<a href="#" id="p9" data-tooltip="#s9"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Slide Description Background Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Desc_BgColor)) $WRIS_L3_Desc_BgColor = "#000000"; ?>
				<input id="wl-l3-desc-bgcolor" name="wl-l3-desc-bgcolor" type="text" value="<?php echo $WRIS_L3_Desc_BgColor; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color to set slide description background color', URIS_TD); ?>.
					<a href="#" id="p10" data-tooltip="#s10"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Navigation Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Navigation_Color)) $WRIS_L3_Navigation_Color = "#FFFFFF"; ?>
				<input id="wl-l3-navigation-color" name="wl-l3-navigation-color" type="text" value="<?php echo $WRIS_L3_Navigation_Color; ?>" class="my-color-field" data-default-color="#ffffff" />
				<p class="description">
					<?php _e('Select a color to set navigation arrow and fullscreen icon color', URIS_TD); ?>.
					<a href="#" id="p11" data-tooltip="#s11"><?php _e('Preview', URIS_TD); ?></a>
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Navigation Bullets Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Navigation_Bullets_Color)) $WRIS_L3_Navigation_Bullets_Color = "#000000"; ?>
				<input id="wl-l3-navigation-bullets-color" name="wl-l3-navigation-bullets-color" type="text" value="<?php echo $WRIS_L3_Navigation_Bullets_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color to set navigation bullets color', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Navigation Pointer Color', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Navigation_Pointer_Color)) $WRIS_L3_Navigation_Pointer_Color = "#000000"; ?>
				<input id="wl-l3-navigation-pointer-color" name="wl-l3-navigation-pointer-color" type="text" value="<?php echo $WRIS_L3_Navigation_Pointer_Color; ?>" class="my-color-field" data-default-color="#000000" />
				<p class="description">
					<?php _e('Select a color to set navigation pointer color', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Full Screen Slide Show', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Fullscreeen)) $WRIS_L3_Fullscreeen = 1; ?>
				<input type="radio" name="wl-l3-fullscreen" id="wl-l3-fullscreen" value="1" <?php if($WRIS_L3_Fullscreeen == 1 ) { echo "checked"; } ?>> <i class="fa fa-check fa-2x"></i> &nbsp;&nbsp;
				<input type="radio" name="wl-l3-fullscreen" id="wl-l3-fullscreen" value="0" <?php if($WRIS_L3_Fullscreeen == 0 ) { echo "checked"; } ?>> <i class="fa fa-times fa-2x"></i>
				<p class="description">
					<?php _e('Select Yes/No option for full screen slide show', URIS_TD); ?>.
				</p>
			</td>
		</tr>
		
		<tr id="L3">
			<th scope="row"><label><?php _e('Custom CSS', URIS_TD); ?></label></th>
			<td>
				<?php if(!isset($WRIS_L3_Custom_CSS)) $WRIS_L3_Custom_CSS = ""; ?>
				<textarea name="wl-l3-custom-css" id="wl-l3-custom-css" rows="5" cols="75"><?php echo $WRIS_L3_Custom_CSS; ?></textarea>
				<p class="description">
					<?php _e('Enter any custom css you want to apply on this slider into textarea filed', URIS_TD); ?>.<br>
				</p>
				<p class="custnote">Note: Please Do Not Use <b>Style</b> Tag With Custom CSS</p>
			</td>
		</tr>
	</tbody>
</table>
<a href="#top" id="smoothup" title="Back to top"></a>