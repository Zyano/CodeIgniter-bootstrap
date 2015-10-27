<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    /**
     * MY_Controller constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * The data variable should contain: title as minimum. If renderMenu is true(default) then the data array should
     * also contain the variable username that holds the currently logged in user.
     *
     * @param $viewName
     * @param $data
     * @param bool|false $asString
     * @param bool|true $renderMenu
     */
    public function View($viewName, $data = null, $asString = false, $renderMenu = true) {
        $this->load->view('Layout/header',$data,$asString);
        if($renderMenu) {
            $this->load->view('Layout/navbar',$data,$asString);
        }
        $this->load->view($viewName,$data,$asString);
        $this->load->view('Layout/footer',$data,$asString);
    }
}