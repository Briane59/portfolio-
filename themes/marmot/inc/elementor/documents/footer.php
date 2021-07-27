<?php

namespace Marmot\Elementor\Documents;

defined('ABSPATH') || exit;

use Elementor\Core\DocumentTypes\Post;
use Elementor\Modules\Library\Documents\Library_Document;

/**
 * 
 * @since 1.0.0
 */
class Footer extends Library_Document {

    /**
     * 
     * @since 1.0.0
     */
    public static function get_properties() {
        $properties = parent::get_properties();

        $properties['location'] = 'footer';
        $properties['support_kit'] = true;

        return $properties;
    }

    /**
     * 
     * @since 1.0.0
     */
    public function get_name() {
        return 'footer';
    }

    /**
     * 
     * @since 1.0.0
     */
    public static function get_title() {
        return __('Footer', 'marmot');
    }

    /**
     * 
     * @since 1.0.0
     */
    public function get_css_wrapper_selector() {
        return '.elementor-footer-' . $this->get_main_id();
    }

    /**
     * 
     * @since 1.0.0
     */
    protected function _register_controls() {
        parent::_register_controls();

        Post::register_style_controls($this);
    }

}
