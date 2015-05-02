<?php

class Graph extends CI_Controller
{
    private $sk_map;
    private $sk_fields;

    // 构造函数
    function __construct()
    {
        parent::__construct();
//        $this->load->library('saiku');
//        $this->load->model('mgraph');
      // $this->_init_sk_map();
    }

    /*
     *  index : 商业智能定制界面函数
     *  @$page='index' : 默认调用视图页面
     */
    public function index($page = 'index')
    {
        if (!file_exists('application/views/process/' . $page . '.php')) {
            show_404();
        }

        $username = $this->session->userdata('username');
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "商业智能定制",
            'username' =>$username,
            'email' => $email
        );

        $this->load->view('templates/task_header', $data);
        $this->load->view('templates/task_sidebar');
        $this->load->view('templates/task_banner');
        $this->load->view('graph/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('templates/task_footer_final');
    }
}



