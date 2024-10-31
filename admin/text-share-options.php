<?php
/**
 * Nuton Text Share Wordpress class
 *
 * @version 1.0.0 
 *
 * @author nasir2015
 * @link  http://devnasir.com
 */
if ( ! class_exists('nnf_text_share_wordpress' ) ):
class nnf_text_share_wordpress {

    private $settings_api;

    function __construct() {
        $this->settings_api = new nnf_text_share_wordpress_Settings_API;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_options_page( __( 'Text Share Options', 't_share' ), __( 'Text Share Options', 't_share' ), 'manage_options', 'text-share-options.php', array($this, 'plugin_page') );
    }

    function get_settings_sections() {
        $sections = array(
			array(
                'id' => 'text_share_general',
                'title' => __( 'General Settings', 't_share' )
            ),
			array(
                'id' => 'text_share_color',
                'title' => __( 'Color Settings', 't_share' )
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
			'text_share_general' => array(
                array(
                    'name'    => 'animation',
                    'label'   => __( 'Text Share Animation', 't_share' ),
                    'desc'    => __( 'You can change text share animation from here like fade, slide, grow. Default text share animation is grow', 't_share' ),
                    'type'    => 'radio',
                    'default' => 'grow',
					'options' => array(
                        'fade' => __( 'Fade', 't_share' ),
                        'slide'=> __( 'Slide', 't_share' ),
                        'grow'=> __( 'grow', 't_share' )
                    )
                ),
                array(
                    'name'    => 'new_tab',
                    'label'   => __( 'Text Share In New Tab', 't_share' ),
                    'desc'    => __( 'You can change text share new tab from here like yes, no. Default Scrollbar speed is yes', 't_share' ),
                    'type'    => 'radio',
                    'default' => 'true',
					'options' => array(
                        'true' => __( 'Yes', 't_share' ),
                        'false'=> __( 'No', 't_share' )
                    )
                ),
				array(
                    'name'    => 'border_style',
                    'label'   => __( 'Text Share Border Style', 't_share' ),
                    'desc'    => __( 'You can change text share border style from here like solid , dotted , dashed , none, double, ridge, groove, inset, outset. Default text share border style is solid', 't_share' ),
                    'type'    => 'radio',
                    'default' => 'solid',
					'options' => array(
                        'none' =>  __( 'None', 't_share' ),
                        'solid' => __( 'Solid', 't_share' ),
                        'dotted' => __( 'Dotted', 't_share' ),
                        'dashed' => __( 'Dashed', 't_share' ),
                        'double' => __( 'Double', 't_share' ),
                        'ridge' => __( 'Ridge', 't_share' ),
                        'groove' => __( 'Groove', 't_share' ),
                        'inset' => __( 'Inset', 't_share' ),
                        'outset' => __( 'Outset', 't_share' )
                    )
                ),
				array(
                    'name'    => 'icon_border_style',
                    'label'   => __( 'Text Share Icon Border Style', 't_share' ),
                    'desc'    => __( 'You can change text share icon border style from here like solid , dotted , dashed , none, double, ridge, groove, inset, outset. Default text share icon border style is solid', 't_share' ),
                    'type'    => 'radio',
                    'default' => 'solid',
					'options' => array(
                        'none' =>  __( 'None', 't_share' ),
                        'solid' => __( 'Solid', 't_share' ),
                        'dotted' => __( 'Dotted', 't_share' ),
                        'dashed' => __( 'Dashed', 't_share' ),
                        'double' => __( 'Double', 't_share' ),
                        'ridge' => __( 'Ridge', 't_share' ),
                        'groove' => __( 'Groove', 't_share' ),
                        'inset' => __( 'Inset', 't_share' ),
                        'outset' => __( 'Outset', 't_share' )
                    )
                ),
				array(
                    'name'    => 'border_width',
                    'label'   => __( 'Text Share Border Width', 't_share' ),
                    'desc'    => __( 'You can change text share border width from here. Text share border width measure in px like 1, 2, 3, 4, 5, 6. Default text share border width is 2', 't_share' ),
                    'type'    => 'number',
                    'default' => '2',
					'sanitize_callback' => 'intval'
                ),
				array(
                    'name'    => 'icon_border_width',
                    'label'   => __( 'Text Share Icon Border Width', 't_share' ),
                    'desc'    => __( 'You can change text share icon border width from here. Text share border width measure in px like 1, 2, 3, 4, 5, 6. Default text share icon border width is 5', 't_share' ),
                    'type'    => 'number',
                    'default' => '5',
					'sanitize_callback' => 'intval'
                ),
                array(
                    'name'    => 'width',
                    'label'   => __( 'Text Share Icon Width', 't_share' ),
                    'desc'    => __( 'You can change text share icon width from here. Text share icon width measure in px like 30, 40, 50, 60. Default text share icon width is 20', 't_share' ),
                    'type'    => 'number',
                    'default' => '30',
					'sanitize_callback' => 'intval'
                ),
                array(
                    'name'    => 'height',
                    'label'   => __( 'Text Share Icon Height', 't_share' ),
                    'desc'    => __( 'You can change text share icon height from here. Text share icon height measure in px like 30, 40, 50, 60. Default text share icon height is 20', 't_share' ),
                    'type'    => 'number',
                    'default' => '20',
					'sanitize_callback' => 'intval'
                ),
                array(
                    'name'    => 'padding',
                    'label'   => __( 'Text Share Icon Padding', 't_share' ),
                    'desc'    => __( 'You can change text share icon padding from here. Text share icon padding measure in px like 10, 20, 30, 40. Default text share icon padding is 5', 't_share' ),
                    'type'    => 'number',
                    'default' => '5',
					'sanitize_callback' => 'intval'
                ),
                array(
                    'name'    => 'transition',
                    'label'   => __( 'Text Share Icon Transition', 't_share' ),
                    'desc'    => __( 'You can change text share icon transition from here. Text share icon transition measure in ms like 10, 20, 50, 70.Highest value of text share icon transition is 90 and lowest value of text share icon is 0. Default text share icon transition is 50', 't_share' ),
                    'type'    => 'number',
                    'default' => '50',
					'sanitize_callback' => 'intval'
                )
            ),
			
			'text_share_color' => array(
                array(
                    'name'    => 'background',
                    'label'   => __( 'Text Share Background Color', 't_share' ),
                    'desc'    => __( 'Select text share background color from here.You can also add HTML HEX color code.Default text share background color is #4C4C4C', 't_share' ),
                    'type'    => 'color',
                    'default' => '#4C4C4C'
                ),
                array(
                    'name'    => 'border_color',
                    'label'   => __( 'Text Share Border Color', 't_share' ),
                    'desc'    => __( 'Select text share border color from here.You can also add HTML HEX color code.Default text share border color is #4C4C4C', 't_share' ),
                    'type'    => 'color',
                    'default' => '#4C4C4C'
                ),
                array(
                    'name'    => 'icon_border_color',
                    'label'   => __( 'Text Share Icon Border Color', 't_share' ),
                    'desc'    => __( 'Select text share icon border color from here.You can also add HTML HEX color code.Default text share icon border color is #4C4C4C', 't_share' ),
                    'type'    => 'color',
                    'default' => '#4C4C4C'
                ),
                array(
                    'name'    => 'mark_background',
                    'label'   => __( 'Text Share Mark Background Color', 't_share' ),
                    'desc'    => __( 'Select text share mark background color from here.You can also add HTML HEX color code.Default text share mark background color is #FFFF00', 't_share' ),
                    'type'    => 'color',
                    'default' => '#FFFF00'
                ),
                array(
                    'name'    => 'mark_color',
                    'label'   => __( 'Text Share Mark Color', 't_share' ),
                    'desc'    => __( 'Select text share mark color from here.You can also add HTML HEX color code.Default text share mark color is #000000', 't_share' ),
                    'type'    => 'color',
                    'default' => '#000000'
                ),
                array(
                    'name'    => 'fb_bg',
                    'label'   => __( 'Facebook Icon Background Color', 't_share' ),
                    'desc'    => __( 'Select facebook icon background from here.You can also add HTML HEX color code.Default facebook icon background is #3B5998', 't_share' ),
                    'type'    => 'color',
                    'default' => '#3B5998'
                ),
                array(
                    'name'    => 'fb_color',
                    'label'   => __( 'Facebook Icon Color', 't_share' ),
                    'desc'    => __( 'Select facebook icon color from here.You can also add HTML HEX color code.Default facebook icon color is #FFFFFF', 't_share' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
                array(
                    'name'    => 'fb_h_bg',
                    'label'   => __( 'Facebook Icon Hover Background Color', 't_share' ),
                    'desc'    => __( 'Select facebook icon hover background color from here.You can also add HTML HEX color code.Default facebook icon hover background color is #FFFFFF', 't_share' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
				array(
                    'name'    => 'fb_h_color',
                    'label'   => __( 'Facebook Icon Hover Color', 't_share' ),
                    'desc'    => __( 'Select facebook icon hover color from here.You can also add HTML HEX color code.Default facebook icon hover color is #3B5998', 't_share' ),
                    'type'    => 'color',
                    'default' => '#3B5998'
                ),
				array(
                    'name'    => 'tw_bg',
                    'label'   => __( 'Twitter Icon Background Color', 't_share' ),
                    'desc'    => __( 'Select twitter icon background color from here.You can also add HTML HEX color code.Default twitter icon background color is #55ACEE', 't_share' ),
                    'type'    => 'color',
                    'default' => '#55ACEE'
                ),
				array(
                    'name'    => 'tw_color',
                    'label'   => __( 'Twitter Icon Color', 't_share' ),
                    'desc'    => __( 'Select twitter icon color from here.You can also add HTML HEX color code.Default twitter icon color is #FFFFFF', 't_share' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
				array(
                    'name'    => 'tw_h_bg',
                    'label'   => __( 'Twitter Icon Hover Background Color', 't_share' ),
                    'desc'    => __( 'Select twitter icon hover background color from here.You can also add HTML HEX color code.Default twitter icon hover background color is #FFFFFF', 't_share' ),
                    'type'    => 'color',
                    'default' => '#FFFFFF'
                ),
				array(
                    'name'    => 'tw_h_color',
                    'label'   => __( 'Twitter Icon Hover Color', 't_share' ),
                    'desc'    => __( 'Select twitter icon hover color from here.You can also add HTML HEX color code.Default twitter icon hover color is #55ACEE', 't_share' ),
                    'type'    => 'color',
                    'default' => '#55ACEE'
                ),
            )
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;
require_once( dirname( __FILE__ ) . '/src/class.settings-api.php' );
new nnf_text_share_wordpress();