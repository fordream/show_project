<?php
/**
 * Created by IntelliJ IDEA.
 * User: zeroleaf
 * Date: 2015/4/7
 * Time: 10:15
 */

class Img extends CI_Controller {

    public function __construct() {

        parent::__construct();
        $this->load->library('saiku');
        $this->load->model('mhaw');
        $this->load->model('mgraph');
    }
}