<?php
/**
 * RoloSliderController Class
 */

class RoloSliderController
{
    public function __construct()
    {
        $this->hooks();
    }

    function hooks()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action('plugins_loaded', array( $this, 'add_options' ) );
        add_filter('rolo_slide_class', array( $this, 'slide_class' ), 10, 3);
        add_filter('rolo_slide_additional_css', array( $this, 'apply_ops' ), 10, 4);
        add_filter('rolo_wrapper_classes', array( $this, 'classes' ), 10, 2);
        add_filter('rolo_slider_anm_ops', array( $this, 'animations' ) );
        add_action('rolo_license_row', array( $this, 'license' ), 10, 2);
    }

    /**
     * Enqueue scripts and styles
     *
     */
    public static function enqueue_scripts()
    {
        wp_dequeue_style( 'rolo' );
        wp_enqueue_style( 'rolo', ROLO_CONTROLLER_ASSETS_URL . 'css/rolo.css', array(), false );
        wp_enqueue_script( 'rolo-controller', ROLO_CONTROLLER_ASSETS_URL . 'js/rolo.js', array(), false, true );

    }

    function add_options()
    {
        add_action('rolo_add_elements', array( $this, 'options' ), 10, 3);
        add_filter('rolo_general_options', array( $this, 'general_ops' ) );
    }

    function general_ops($options)
    {
        # Full Height
        $options[] = array(
            'section' => 'general',
            'name' => '_rl_full_height',
            'title' => esc_html__('Full Height', 'rolo'),
            'desc' => esc_html__('Set slider to take full height.', 'rolo'),
            'type' => 'yes_no',
            'data' => array(
                'ops' => array(
                    0 => array(
                        'val' => 'on',
                        'option' => esc_html__('On', 'rolo')
                    ),
                    1 => array(
                        'val' => 'off',
                        'option' => esc_html__('Off', 'rolo')
                    )
                ),
                'default' => 'off'
            )
        );

        # Fade to image
        $options[] = array(
            'section' => 'general',
            'name' => '_rl_img_fade',
            'title' => esc_html__('Enable Fade To Image', 'rolo'),
            'desc' => esc_html__('Images will fade directly into next image, instead of background color. Note -  Images will appear more quickly than with regular fade, and it will depend on slide speed. ', 'rolo'),
            'type' => 'yes_no',
            'data' => array(
                'ops' => array(
                    0 => array(
                        'val' => 'on',
                        'option' => esc_html__('On', 'rolo')
                    ),
                    1 => array(
                        'val' => 'off',
                        'option' => esc_html__('Off', 'rolo')
                    )
                ),
                'default' => 'off',
            )
        );

        return $options;
    }

    function options($hgh, $hgh_group, $prefix)
    {
        $hgh->add_group_field( $hgh_group, array(
            'name' => __('Controller Addon Options', 'rolo-slider-lc'),
            'desc' => 'Additional options generated from Controller Addon',
            'type' => 'title',
            'id'   => 'ctr_addon_title'
        ) );

        $hgh->add_group_field( $hgh_group, array(
            'name' => '<span class="dashicons dashicons-move"></span> ' . __('Ken Burns Direction', 'rolo-slider-lc'),
            'id'   => $prefix . 'anm_direction',
            'type' => 'select',
            'options' => array(
                'left-top' => __('Left Top', 'rolo-slider-ct'),
                'left-bottom' => __('Left Bottom', 'rolo-slider-ct'),
                'right-top' => __('Right Top', 'rolo-slider-ct'),
                'right-bottom' => __('Right Bottom', 'rolo-slider-ct'),
            ),
            'before_row' => "<div class='rolo-slide-half-row'>"
        ) );

        $hgh->add_group_field( $hgh_group, array(
            'name' => '<span class="dashicons dashicons-editor-expand"></span> ' . __('Animation Scale Factor', 'rolo-slider-lc'),
            'id'   => $prefix . 'img_scale',
            'type' => 'select',
            'options' => array(
                '1.1'  => __('1.1', 'rolo-slider-ct'),
                '1.15' => __('1.15', 'rolo-slider-ct'),
                '1.17' => __('1.17', 'rolo-slider-ct'),
                '1.2'  => __('1.2', 'rolo-slider-ct'),
                '1.21' => __('1.21', 'rolo-slider-ct'),
                '1.25' => __('1.25', 'rolo-slider-ct'),
                '1.27' => __('1.27', 'rolo-slider-ct'),
                '1.3'  => __('1.3', 'rolo-slider-ct'),
                '1.35' => __('1.35', 'rolo-slider-ct'),
                '1.37' => __('1.37', 'rolo-slider-ct'),
                '1.4'  => __('1.4', 'rolo-slider-ct'),
                '1.5'  => __('1.5', 'rolo-slider-ct'),
            ),
            'after_row' => "</div>"
        ) );

        $hgh->add_group_field( $hgh_group, array(
            'name' => '<span class="dashicons dashicons-randomize"></span> ' . __('Image Moving Factor', 'rolo-slider-lc'),
            'id'   => $prefix . 'img_move',
            'type' => 'text',
            'desc' => __('Add value that will be calculate in px, as the amount for which image will translate during the slide transition', 'rolo-slider-ct'),
        ) );
    }

    function slide_class($class, $slide_data, $layout)
    {
        $direction   = $this->value_check( $slide_data,'_rl_anm_direction' );
        $scale       = $this->value_check( $slide_data,'_rl_img_scale' );
        $scale_class = str_replace('.', '-', $scale);

        $class[] = 'rolo-img-scale-' . esc_attr( $scale_class );
        $class[] = 'rolo-img-' . esc_attr( $direction );

        return $class;
    }

    function apply_ops($css, $rolo_id, $value, $layout)
    {
        if( 'default' === $layout[0] ) {
            $id = $this->value_check( $value,'_rl_screen_id' );
        } else {
            $id = $value;
        }

        $scale = $this->value_check( $value,'_rl_img_scale' );
        $move  = $this->value_check( $value,'_rl_img_move' );

        if( ! $move ) {
            $move = '14';
        }

        $class = str_replace('.', '-', $scale);

        $prefixes = array( '-webkit-', '-moz-', '' );
        $transform = '';

        foreach( $prefixes as $prefix ) {
            $transform .= $prefix . 'transform: scale(' . esc_attr( $scale ) . ') translate(' . esc_attr( $move ) . 'px);';
        }

        $css .= '#'.esc_attr( $rolo_id ). ' .owl-item.zoomed .rolo-img-scale-' . esc_attr( $class ). ' .slide-img {' . esc_html( $transform ) . '}';

        return $css;
    }

    function classes($classes, $id)
    {
        $fade = get_post_meta( $id, '_rl_img_fade', true );
        if( 'on' === $fade ) {
            $classes[] = 'rolo-fade-to-img';
        }

        $full_height = get_post_meta( $id, '_rl_full_height', true );
        if( 'on' === $full_height ) {
            $classes[] = 'rolo-full-height';
        }

        return $classes;
    }

    function animations($animations)
    {
        $animations[] = array(
            'val' => 'backSlide',
            'option' => esc_html__('Back Slide', 'rolo')
        );

        $animations[] = array(
            'val' => 'goDown',
            'option' => esc_html__('Go Down', 'rolo')
        );


        return $animations;
    }

    function value_check($data, $value, $is_array = false)
    {
        $output = false;
        if( isset($data[$value]) && '' != $data[$value] ) $output = $data[$value];

        return $output;
    }

    function admin_notice__error()
    {
        $class = 'notice notice-error';
        $message = __( 'You Need to have Rolo Slider plugin active before attempting to activate Rolo Slider Controller addon.', 'rolo-slider-lc' );

        printf( '<div class="%1$s"><p>%2$s</p></div>', $class, $message );
    }

    function license() {
        $license  = get_option( 'rolo_controller_license_key' );
        $status   = get_option( 'rolo_controller_license_status' );
        ?>
        <tr valign="top">
            <th scope="row" valign="top">
                <?php _e('Controller Addon Key'); ?>
            </th>
            <td>
                <input id="rolo_controller_license_key" name="rolo_controller_license_key" type="text" class="regular-text" value="<?php esc_attr_e( $license ); ?>" />
                <label class="description" for="rolo_controller_license_key"><?php _e('Enter your license key'); ?></label>
            </td>
        </tr>
        <?php if( false !== $license ) { ?>
            <tr valign="top">
                <th scope="row" valign="top">
                    <?php _e('License Status'); ?>
                </th>
                <td>
                    <?php if( $status !== false && $status == 'valid' ) { ?>
                        <span style="color:green;line-height: 26px;"><?php _e('Active'); ?></span>
                    <?php } else {
                        if( $status !== false && $status == 'expired' ): ?>
                            <span style="color:crimson;line-height: 26px;"><?php _e('Expired'); ?></span>
                        <?php elseif( $status !== false && $status == 'invalid' ): ?>
                            <span style="color:crimson;line-height: 26px;"><?php _e('Invalid License'); ?></span>
                        <?php endif; ?>
                    <?php } ?>
                </td>
            </tr>
            <tr style="height: 20px"></tr>
        <?php }
    }
}
