<?php 
/*
 * @link              http://codecanyon.net/user/jewel1994
 * @since             1.0.0
 * @package           nuton-text-share-wordpress
 */
 
//Nuton Text Share Style Options
if ( ! function_exists( 'nnf_nuton_text_share_style_options' ) ) :
function nnf_nuton_text_share_style_options(){
$t_share_general = get_option('text_share_general');
$t_share_color = get_option('text_share_color');

//Set Nuton Text Share Icon Width
if(isset($t_share_general['width'])){
	$width = $t_share_general['width'];
}
else{$width = '30';} 

//Set Nuton Text Share Icon Height
if(isset($t_share_general['height'])){
	$height = $t_share_general['height'];
}
else{$height = '20';} 

//Set Nuton Text Share Icon Padding
if(isset($t_share_general['padding'])){
	$padding = $t_share_general['padding'];
}
else{$padding = '5';}

//Set Nuton Text Share Icon Transition
if(isset($t_share_general['transition'])){
	$transition = $t_share_general['transition'];
}
else{$transition = '50';} 

//Set Nuton Text Share Border Style
if(isset($t_share_general['border_style'])){
	$border_style = $t_share_general['border_style'];
}
else{$border_style = 'solid';} 

//Set Nuton Text Share Icon Border Style
if(isset($t_share_general['icon_border_style'])){
	$icon_border_style = $t_share_general['icon_border_style'];
}
else{$icon_border_style = 'solid';} 

//Set Nuton Text Share Border Width
if(isset($t_share_general['border_width'])){
	$border_width = $t_share_general['border_width'];
}
else{$border_width = '2';}  

//Set Nuton Text Share Icon Border Width
if(isset($t_share_general['icon_border_width'])){
	$icon_border_width = $t_share_general['icon_border_width'];
}
else{$icon_border_width = '5';} 

//Set Nuton Text Share Background Color
if(isset($t_share_color['background'])){
	$background = $t_share_color['background'];
}
else{$background = '#4C4C4C';} 

//Set Nuton Text Share Border Color
if(isset($t_share_color['border_color'])){
	$border_color = $t_share_color['border_color'];
}
else{$border_color = '#4C4C4C';} 

//Set Nuton Text Share Icon Border Color
if(isset($t_share_color['icon_border_color'])){
	$icon_border_color = $t_share_color['icon_border_color'];
}
else{$icon_border_color = '#4C4C4C';} 

//Set Nuton Text Share Mark Background Color
if(isset($t_share_color['mark_background'])){
	$mark_background = $t_share_color['mark_background'];
}
else{$mark_background = '#FFFF00';}

//Set Nuton Text Share Mark Color
if(isset($t_share_color['mark_color'])){
	$mark_color = $t_share_color['mark_color'];
}
else{$mark_color = '#000000';} 

//Set Facebook Icon Background Color
if(isset($t_share_color['fb_bg'])){
	$fb_bg = $t_share_color['fb_bg'];
}
else{$fb_bg = '#3B5998';}

//Set Facebook Icon Color
if(isset($t_share_color['fb_color'])){
	$fb_color = $t_share_color['fb_color'];
}
else{$fb_color = '#FFFFFF';}

//Set Facebook Icon Hover Background Color
if(isset($t_share_color['fb_h_bg'])){
	$fb_h_bg = $t_share_color['fb_h_bg'];
}
else{$fb_h_bg = '#FFFFFF';} 

//Set Facebook Icon Hover Color
if(isset($t_share_color['fb_h_color'])){
	$fb_h_color = $t_share_color['fb_h_color'];
}
else{$fb_h_color = '#3B5998';}

//Set Twitter Icon Background Color
if(isset($t_share_color['tw_bg'])){
	$tw_bg = $t_share_color['tw_bg'];
}
else{$tw_bg = '#55ACEE';}

//Set Twitter Icon Color
if(isset($t_share_color['tw_color'])){
	$tw_color = $t_share_color['tw_color'];
}
else{$tw_color = '#FFFFFF';}

//Set Twitter Icon Background Hover Color
if(isset($t_share_color['tw_h_bg'])){
	$tw_h_bg = $t_share_color['tw_h_bg'];
}
else{$tw_h_bg = '#FFFFFF';}

//Set Twitter Icon Hover Color
if(isset($t_share_color['tw_h_color'])){
	$tw_h_color = $t_share_color['tw_h_color'];
}
else{$tw_h_color = '#55ACEE';}
?>
<style type="text/css">
	div.tooltipster-content a,
	div.tooltipster-content a i.facebook {
		background-color:<?php echo esc_attr($fb_bg); ?>;
		color:<?php echo esc_attr($fb_color); ?>;
	} 
	
	div.tooltipster-content a i.facebook{
		border-right:<?php echo esc_attr($icon_border_width); ?>px <?php echo esc_attr($icon_border_style); ?> <?php echo esc_attr($icon_border_color); ?>;
	}
	div.tooltipster-content a:hover,
	div.tooltipster-content a:hover i.facebook {
		background-color:<?php echo esc_attr($fb_h_bg); ?>;
		color:<?php echo esc_attr($fb_h_color); ?>;
	} 
	
	div.tooltipster-content a:last-child, 
	div.tooltipster-content a i.twitter{
		background-color:<?php echo esc_attr($tw_bg); ?>;
		color:<?php echo esc_attr($tw_color); ?>;
	} 
	
	div.tooltipster-content a:last-child:hover, 
	div.tooltipster-content a:hover i.twitter{
		background-color:<?php echo esc_attr($tw_h_bg); ?>;
		color:<?php echo esc_attr($tw_h_color); ?>;
	}
	
	div.tooltipster-default {
		background-color:<?php echo esc_attr($background); ?>;
		border-color:<?php echo esc_attr($border_color); ?> !important;
		border-width:<?php echo esc_attr($border_width); ?>px;
		border-style:<?php echo esc_attr($border_style); ?>;
	}
	i.facebook, i.twitter {
	  width:<?php echo esc_attr($width); ?>px;
	  height:<?php echo esc_attr($height); ?>px;
	  padding:<?php echo esc_attr($padding); ?>px;
	  -webkit-transition-duration:0.<?php echo esc_attr($transition); ?>s;
	  -moz-transition-duration:0.<?php echo esc_attr($transition); ?>s;
	  -o-transition-duration:0.<?php echo esc_attr($transition); ?>s;
	  -ms-transition-duration:0.<?php echo esc_attr($transition); ?>s;
	  transition-duration:0.<?php echo esc_attr($transition); ?>s;
	}
	mark{
		background-color:<?php echo esc_attr($mark_background); ?>;
		color:<?php echo esc_attr($mark_color); ?>;
	}
</style>
<?php
}
add_action('wp_head' , 'nnf_nuton_text_share_style_options');
endif;

//Nuton Text Share Script Options
if ( ! function_exists( 'nnf_nuton_text_share_script_options' ) ) :
function nnf_nuton_text_share_script_options(){
$t_share_general = get_option('text_share_general');

//Set Nuton Text Share Animation
if(isset($t_share_general['animation'])){
	$animation = $t_share_general['animation'];
}
else{$animation = 'grow';}

//Set Nuton Text Share Animation
if(isset($t_share_general['new_tab'])){
	$new_tab = $t_share_general['new_tab'];
}
else{$new_tab = 'true';} 
?>
<script type="text/javascript">
	(function($) {
		"use strict";
		jQuery(document).ready(function(){
			jQuery("p").contentshare({
				shareable  : {},
				shareIcons : ["<i class='facebook fa fa-facebook'></i>","<i class='twitter fa fa-twitter'></i>","<i class='facebook fa fa-google-plus'></i>" ,"<i class='facebook fa fa-pinterest'></i>"],
                
				shareLinks : ["http://www.facebook.com/sharer.php?s=100&p[url]="+document.URL+"&p[title]="+document.title+"&p[summary]=" , "http://twitter.com/intent/tweet?url="+document.URL+"&text=" , "https://plus.google.com/share?url="+document.URL+"&text=", "https://pinterest.com/pin/create/button/?url="+document.URL+"&text="],
				
				
				
				minLength  : 5,
				newTab     : <?php echo $new_tab; ?>,
				className  : "contentshare",
				animation  : "<?php echo esc_attr($animation); ?>"		
			});
			jQuery.fn.contentshare.defaults.shareable.on('mouseup',function(){
				jQuery.fn.contentshare.showTooltip();
			}); 
		});		
	})(jQuery);
</script>
<?php
}
add_action('wp_footer' , 'nnf_nuton_text_share_script_options',99);
endif;
?>
<style type="text/css">
div.tooltipster-content a i{
  height: 30px;
  padding: 5px;
  width: 42px;
  border-right: 5px solid #4c4c4c;
}
body div.tooltipster-content a i.last-child{border-right:0px solid ! important;}
</style>