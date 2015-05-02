<?php

class Advisory extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('madvisory');
    }

    public function index($page = 'advisory') {
        $username = $this->session->userdata('username');
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "全案咨询",
            'username' =>$username,
            'email' => $email
        );

        $this->load->view('templates/task_header', $data);
        $this->load->view('advisory/task_header_add_'.$page);
        $this->load->view('templates/task_sidebar');
        $this->load->view('templates/task_banner');
        $this->load->view('advisory/task_'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('advisory/task_footer_script_add_'.$page);
        $this->load->view('templates/task_footer_function');
        $this->load->view('advisory/task_footer_function_add_'.$page);
        $this->load->view('templates/task_footer_final');
    }
}