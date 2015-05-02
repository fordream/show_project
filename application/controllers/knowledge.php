<?php
/**
 * Created by PhpStorm.
 * User: liuya
 * Date: 2015/3/17
 * Time: 21:08
 */

class Knowledge extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('mknowledge');
    }

    public function index($page = 'knowledge') {
        if (!file_exists('application/views/knowledge/' . $page . '.php')) {
            show_404();
        }

        $username = $this->session->userdata('username');
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "规则模块",
            'username' =>$username,
            'email' => $email
        );

        $this->load->view('templates/task_header', $data);
        $this->load->view('templates/task_sidebar');
        $this->load->view('templates/task_banner');
        $this->load->view('knowledge/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('templates/task_footer_final');
    }
}