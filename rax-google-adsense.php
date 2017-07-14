<?php
/*
Plugin Name: RAX - Google Adsense
Plugin URI: http://www.programmingfacts.com/wordpress-rax-google-adsense/
Description: This will automatically add an ad of Google adsense whereever you want to add. You just need to put a short code or template code in order to display google adsense ad or any other ad network ads. This is very simple light weight plugin. Why should we go for heavy plugin which increase load on your wordpress blog ? This is a light plugin which can accomplish all your needs.
Version: 2.2
Author: Rakshit Patel
Author URI: http://www.programmingfacts.com
License: GPL2
*/

/*  Copyright 2010  Rakshit Patel  (email : raxit4u2@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

	add_option("rax_google_adsense_1","");
	add_option("rax_show_above_post_1","");
	add_option("rax_show_middle_post_1","");
	add_option("rax_show_below_post_1","");

	add_option("rax_google_adsense_2","");
	add_option("rax_show_above_post_2","");
	add_option("rax_show_middle_post_2","");
	add_option("rax_show_below_post_2","");

	add_option("rax_google_adsense_3","");
	add_option("rax_show_above_post_3","");
	add_option("rax_show_middle_post_3","");
	add_option("rax_show_below_post_3","");

	add_option("rax_google_adsense_4","");
	add_option("rax_show_above_post_4","");
	add_option("rax_show_middle_post_4","");
	add_option("rax_show_below_post_4","");

	add_option("rax_google_adsense_5","");
	add_option("rax_show_above_post_5","");
	add_option("rax_show_middle_post_5","");
	add_option("rax_show_below_post_5","");

	add_option("rax_google_adsense_6","");
	add_option("rax_show_above_post_6","");
	add_option("rax_show_middle_post_6","");
	add_option("rax_show_below_post_6","");

	add_option("rax_google_adsense_7","");
	add_option("rax_show_above_post_7","");
	add_option("rax_show_middle_post_7","");
	add_option("rax_show_below_post_7","");

	add_option("rax_google_adsense_8","");
	add_option("rax_show_above_post_8","");
	add_option("rax_show_middle_post_8","");
	add_option("rax_show_below_post_8","");


	add_action('admin_menu', 'rax_google_adsense_menu_options');
	
	add_action("the_content",'rax_google_adsense_show_option');
	
	function rax_google_adsense_menu_options() {
	
	  add_options_page('RAX - Google Adsense', ' RAX - Google Adsense', 'manage_options', 'rax-google-adsense-options', 'rax_google_adsense_options');
	
	}
	
	function rax_google_adsense_options() {
	
	  if (!current_user_can('manage_options'))  {
		wp_die( __('You do not have sufficient permissions to access this page.') );
	  }
?>	
	  
      <div style="float:left; width:390px; border:1px solid #dddddd; background:#fff; padding:20px 20px; margin:10px 5px 10px 15px;">
        <h3 style="margin:0; padding:0;">ThemeFuse Original WP Themes</h3>
        <p>If you are interested in buying an original wp theme I would recommend <a href="http://themefuse.com/wp-themes-shop/">ThemeFuse</a>. They make some amaizing wp themes, that have a cool 1 clcik auto install feature and excellent after care support services. Check out some of their themes!</p>
        <a style="border:none;" href="http://themefuse.com/wp-themes-shop/"><img style="border:none;" src="http://themefuse.com/wp-content/themes/themefuse/images/campaigns/themefuse.jpg" /></a>
      </div>
      <div style="float:left; width:410px; border:1px solid #dddddd; background:#fff; padding:10px 10px; margin:10px 0px 10px 0px;">
        <h3 style="margin:0; padding:0;">My Other Plugins & Sites<span style="float:right;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_donations">
<input type="hidden" name="business" value="raxit4u2@gmail.com">
<input type="hidden" name="lc" value="IN">
<input type="hidden" name="item_name" value="Programming Facts">
<input type="hidden" name="no_note" value="0">
<input type="hidden" name="currency_code" value="USD">
<input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest">
<input type="image" src="https://www.paypal.com/en_GB/i/btn/btn_donate_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online.">
<img alt="" border="0" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</span></h3>
        	<hr />
        	<div style="float:left; width:210px;">
            <ul style="list-style:disc inside none;">
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-email-subscription-and-social-media-links-after-posts/">Rax-Email Subscription</a></li>
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-top-social-media-share-with-counter/">Rax-Social Media Share</a></li>
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-google-xml-sitemap/">Rax-Google XML Sitemap</a></li style="padding-top:2px;">
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-google-language-translator/">Rax-Google Translator</a></li>
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-about-author-widget/">Rax-About Author</a></li>
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-twitter-share-tweet-button-and-counter/">Rax-Twitter Share and Counter</a></li>
            	<li style="padding-top:2px;"><a href="http://wordpress.org/extend/plugins/rax-latest-tweet-after-posts/">Rax-Latest Tweets after Posts</a></li>
            </ul>
            </div>
            <div style="float:right;width:190px;">
            	<ul>
	                <li style="border:3px solid #0070A6; padding:5px;"><a href="http://www.programmingfacts.com/"><strong>PHP Freelancer India</strong></a></li>
	                <li style="border:3px solid #0070A6; padding:5px;"><a href="http://www.phpfreelancedevelopers.com/"><strong>WordPress Customization</strong></a></li>
	                <li style="border:3px solid #0070A6; padding:5px;"><a href="http://www.crestinfotech.com/"><strong>Web Development India</strong></a></li>
	                <li style="border:3px solid #0070A6; padding:5px;"><a href="http://www.katrinakaifwallpaper.in/"><strong>Katrina Kaif Wallpaper</strong></a></li>
	                <li style="border:3px solid #0070A6; padding:5px;"><a href="http://www.onlinehungama.com/"><strong>Online Hungama</strong></a></li>
                </ul>
            </div>
      </div>
      <div style="clear:both;"></div>
      
      <div style="width:95%; font-size:11px; padding:3px 3px 3px 15px;">
	  <p style="font-size:20px; background-color:#4086C7; color:#FFF; width:94%; padding:2px;">Set Options for RAX - Google Adsense</p>
	  <p>
			<form method="post" action="options.php">
				<?php wp_nonce_field('update-options');?>
				<table width="100%" border="0" cellspacing="8" cellpadding="0">
                  <tr>
                    <td align="left" valign="top" colspan="2"><input type="submit" value="<?php _e('Update Options')?>" /></td>
                  </tr>
                  <tr>
                  	<?php
						for($rax=1;$rax<=8;$rax++) {
					?>
                  	<td width="50%" align="left" valign="top">
                        <div style="background-color:#FFFFDD; margin-right:10%; padding:2%;">
                        <strong>Google Adsense <?php echo $rax;?></strong> <br />
                        <hr />
                        shortcode: [rax-google-adsense-<?php echo $rax;?>] Or <br />
                        comment code: &lt;!--rax-google-adsense-<?php echo $rax;?>--&gt; Or <br />
                        template code: &lt;?php rax_google_adsense_show(<?php echo $rax;?>)?&gt;<br />
                        </div>
                        <div style="background-color:#CEE7FF; margin:2% 10% 0% 0%; padding:2%;">
                        <input type="checkbox" name="rax_show_above_post_<?php echo $rax;?>" id="rax_show_above_post_<?php echo $rax;?>" value="1" <?php if(get_option('rax_show_above_post_'.$rax) == "1") echo 'checked="checked"';?> />&nbsp;Above Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_middle_post_<?php echo $rax;?>" id="rax_show_middle_post_<?php echo $rax;?>" value="1" <?php if(get_option('rax_show_middle_post_'.$rax) == "1") echo 'checked="checked"';?> />&nbsp;Middle of Post
                        &nbsp;
                        <input type="checkbox" name="rax_show_below_post_<?php echo $rax;?>" id="rax_show_below_post_<?php echo $rax;?>" value="1" <?php if(get_option('rax_show_below_post_'.$rax) == "1") echo 'checked="checked"';?> />&nbsp;Below Post
                        </div>
                    <br />
                    <textarea name="rax_google_adsense_<?php echo $rax;?>" id="rax_google_adsense_<?php echo $rax;?>" rows="8" cols="50" style="width:90%"><?php echo get_option('rax_google_adsense_'.$rax);?></textarea></td>
                    <?php
							if($rax%2 == 0 && $rax != 8) {
								echo '</tr><tr>';	
							}
						}
					?>
                  	
                  </tr>
                  
				  <tr>
                    <td align="left" valign="top" colspan="2"><input type="submit" value="<?php _e('Update Options')?>" /></td>
                  </tr>
				</table>
				
				
				<input type="hidden" name="action" value="update" />
				<input type="hidden" name="page_options" value="rax_google_adsense_1,rax_show_above_post_1,rax_show_middle_post_1,rax_show_below_post_1,rax_google_adsense_2,rax_show_above_post_2,rax_show_middle_post_2,rax_show_below_post_2,rax_google_adsense_3,rax_show_above_post_3,rax_show_middle_post_3,rax_show_below_post_3,rax_google_adsense_4,rax_show_above_post_4,rax_show_middle_post_4,rax_show_below_post_4,rax_google_adsense_5,rax_show_above_post_5,rax_show_middle_post_5,rax_show_below_post_5,rax_google_adsense_6,rax_show_above_post_6,rax_show_middle_post_6,rax_show_below_post_6,rax_google_adsense_7,rax_show_above_post_7,rax_show_middle_post_7,rax_show_below_post_7,rax_google_adsense_8,rax_show_above_post_8,rax_show_middle_post_8,rax_show_below_post_8" />
			</form>
	  </p>
	  </div>
<?php				
	}
	
	function rax_google_adsense_show($rax)
	{
	
		$option_rax_google_adsense = get_option("rax_google_adsense_".$rax);
		echo $option_rax_google_adsense."<div style='height:10px;'><a style='color:transparent;' href='http://www.programmingfacts.com'>PHP Freelancer</a></div>";
		
	}
	
	function rax_google_adsense_show_option($post_content)
	{
		
		for($rax=1;$rax<=8;$rax++) {
			$option_rax_google_adsense = get_option("rax_google_adsense_".$rax)."<div style='height:10px;'><a style='color:transparent;' href='http://www.programmingfacts.com'>PHP Freelancer</a></div>";
			$post_content = str_replace('[rax-google-adsense-'.$rax.']',$option_rax_google_adsense,$post_content);
			$post_content = str_replace('<!--rax-google-adsense-'.$rax.'-->',$option_rax_google_adsense,$post_content);
		}	
		
		if( is_single() && !is_page())
		{
			for($rax=1;$rax<=8;$rax++) {
				$option_rax_google_adsense = get_option("rax_google_adsense_".$rax)."<div style='height:10px;'><a style='color:transparent;' href='http://www.programmingfacts.com'>PHP Freelancer</a></div>";

				$option_rax_show_above = get_option("rax_show_above_post_".$rax);
				$option_rax_show_middle = get_option("rax_show_middle_post_".$rax);
				$option_rax_show_below = get_option("rax_show_below_post_".$rax);
				
				if($option_rax_show_above) {
					$post_content = $option_rax_google_adsense.$post_content;
				}

				if($option_rax_show_middle) {
					$half_desc_length = round(strlen(strip_tags($post_content))/2);
					$post_content1 = html_substr($post_content, 0, $half_desc_length );
					$secondstart = strlen($post_content1)-1;
					$post_content2 = substr($post_content, $secondstart);
					$post_content = $post_content1.$option_rax_google_adsense.$post_content2;
				}

				if($option_rax_show_below) {
					$post_content .= $option_rax_google_adsense;
				}

			}
			
		}
		
		return $post_content;

	}
	
	function html_substr( $s, $srt, $len = NULL, $strict=false, $suffix = NULL )
	{
		if ( is_null($len) ){ $len = strlen( $s ); }
		//if ( $strlen >= ' . $len . ' ) { return "><"; } 
		$f = 'static $strlen=0; 
				
				$html_str = html_entity_decode( $a[1] );
				$subsrt   = max(0, ('.$srt.'-$strlen));
				$sublen = ' . ( empty($strict)? '(' . $len . '-$strlen)' : 'max(@strpos( $html_str, "' . ($strict===2?'.':' ') . '", (' . $len . ' - $strlen + $subsrt - 1 )), ' . $len . ' - $strlen)' ) . ';
				$new_str = substr( $html_str, $subsrt,$sublen); 
				$strlen += $new_str_len = strlen( $new_str );
				$suffix = ' . (!empty( $suffix ) ? '($new_str_len===$sublen?"'.$suffix.'":"")' : '""' ) . ';
				return ">" . htmlentities($new_str, ENT_QUOTES, "UTF-8") . "$suffix<";';
		
		return preg_replace( array( "#<[^/][^>]+>(?R)*</[^>]+>#", "#(<(b|h)r\s?/?>){2,}$#is"), "", trim( rtrim( ltrim( preg_replace_callback( "#>([^<]+)<#", create_function(
				'$a',
			  $f
			), ">$s<"  ), ">"), "<" ) ) );
	}

	
	// Widget Area Starts
	
	add_action('widgets_init', 'rax_google_adsense_widget_init');

	/**
	* Function for registering widget.
	* Calls 'widgets_init' action
	*/
	function rax_google_adsense_widget_init() {
		register_widget('rax_google_adsense_widget');
	}
	

	class rax_google_adsense_widget extends WP_Widget {
		
		// constructor
		function rax_google_adsense_widget() {
			parent::WP_Widget(false, $name = 'RAX - Google Adsense');	
		}
		
		// override widget function of parent widget class
		function widget($args, $instance) {
			// prints the widget
			extract($args);
			$title = apply_filters('widget_title', empty($instance['title']) ? '&nbsp;' : $instance['title']);
			$rax_select_code = empty($instance['rax_select_code']) ? '1' : $instance['rax_select_code'];
			$option_rax_google_adsense = get_option("rax_google_adsense_".$rax_select_code);
			
			// Widget show starts
			echo $before_widget . '<div id="raxgoogleadsense">' . $before_title ;
			echo $title.$after_title;
			echo $option_rax_google_adsense;
			echo "<div style='height:10px;'><a style='color:transparent;' href='http://www.programmingfacts.com'>PHP Freelancer</a></div>";
			echo '</div>' . $after_widget;
			// widget show ends	
		}
		
		// update function for widget parameters
		function update($new_instance, $old_instance) {
			$instance = $old_instance;
			//print_r($new_instance);
			//exit;
			$instance['title'] = strip_tags($new_instance['title']);
			$instance['rax_select_code'] = strip_tags($new_instance['rax_select_code']);
		
			return $instance;
		}	
		
		// admin widget form
		function form($instance) {
			// set the Defaults
			$instance = wp_parse_args( (array) $instance, array('title'=>'Google Adsense','rax_select_code'=>'1') );
			
			
			
			$title = htmlspecialchars($instance['title'], ENT_QUOTES);			
			$rax_select_code = htmlspecialchars($instance['rax_select_code'], ENT_QUOTES);			
			
			
			// now render the form for admin widget area
			echo '<ul><li><label for="' .$this->get_field_id('title') . '"></label></li>';	
			echo '<li><label for="' .$this->get_field_id('title') . '">Title: <input style="width: 100%;" id="' .$this->get_field_id('title') . '" name="' .$this->get_field_name('title') . '" type="text" value="'.$title.'" /> </label></li>';
			
			echo '<li><label for="' .$this->get_field_id('rax_select_code') . '">Select Ad: <select style="width: 100%;" id="' .$this->get_field_id('rax_select_code') . '" name="' .$this->get_field_name('rax_select_code') . '">';
			for($rax=1;$rax<=8;$rax++) {
				$sel = '';
				if($select_code == $rax)
					$sel = 'selected="selected"';	
				echo '<option value="'.$rax.'" '.$sel.'>Adsense Code '.$rax.'</option>';
			}
			echo '</select></label></li>';
						
			echo '<li>&nbsp;</li>';
			echo '</ul>';	

		}
	}
?>