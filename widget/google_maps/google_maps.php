<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package 		ExpressionEngine 2: Widgets
 * @subpackage 		Google Maps Widget
 * @author			Gregory Athons 
 * @modified		-
 * 
 * Show a Google Map in your site
 */

class Widget_Google_maps extends Widgets
{
    public $title = 'Google Maps';
    public $description = 'Display Google Maps on your site by adding an address and optionally height, width, etc.';
    public $author = 'Gregory Athons';
    public $website = 'http://www.gregathons.com';
    public $version = '1.0';
    
    public $fields = array(
        array(
            'field' => 'address',
            'label' => 'Address',
            'rules' => 'required'
        ),
        array(
            'field' => 'width',
            'label' => 'Width',
            'rules' => 'required'
        ),
        array(
            'field' => 'height',
            'label' => 'Height',
            'rules' => 'required'
        ),
        array(
            'field' => 'zoom',
            'label' => 'Zoom Level',
            'rules' => 'numeric'
        ),
        array(
            'field' => 'description',
            'label' => 'Description'
        )
    );
}
