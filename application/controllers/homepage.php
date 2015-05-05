<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/3
 * Time: 10:35
 */

class Homepage extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    /*
     *  index : 用户登录界面函数
     *  @$page='index' : 默认调用视图页面
     */
    public function index($page = 'index')
    {
        if (!file_exists('application/views/homepage/' . $page . '.php')) {
            show_404();
        }
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $username = '游客';
        } else {
            $username = $this->session->userdata('username');
        }

        $this->load->model("mhomepage");
        $hotwork = $this->mhomepage->get_hot_works();
        $newwork = $this->mhomepage->get_new_works();
        $pushwork = $this->mhomepage->get_push_works();
        $newnote = $this->mhomepage->get_new_note();
        $hotnote = $this->mhomepage->get_hot_note();
//        $username = $this->session->userdata('username');
//        $email = $this->session->userdata('email');
        $data = array(
            'title' => "首页",
            'username' => $username,
            'hotwork' => $hotwork,
            'newwork' => $newwork,
            'pushwork' => $pushwork,
            'newnote' => $newnote,
            'hotnote' => $hotnote
//            'email' => $email
        );

//        var_dump($hotwork);
        $this->load->view('templates/header',$data);
        $this->load->view('homepage/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('homepage/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }

    public function logout($page = 'logout') {
        if (!file_exists('application/views/homepage/'.$page.'.php')) {
            show_404();
        }

        $data['title'] = "注销登录";

        $this->load->model("mhomepage");
        //插入日志文件
        $this->mhomepage->insert_log_message($this->session->userdata('username'), "logout", $this->input->ip_address());

        $this->session->sess_destroy();

        $this->load->view("homepage/".$page, $data);
    }
}
