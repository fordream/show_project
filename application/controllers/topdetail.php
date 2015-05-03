<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/5/3
 * Time: 10:35
 */

class Topdetail extends CI_Controller
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
        if (!file_exists('application/views/topdetail/' . $page . '.php')) {
            show_404();
        }
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $username = '游客';
        } else {
            $username = $this->session->userdata('username');
        }
//        $username = $this->session->userdata('username');
//        $email = $this->session->userdata('email');
        $data = array(
            'title' => "作品详情",
            'username' => $username,
//            'email' => $email
        );

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('homepage/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }
}
