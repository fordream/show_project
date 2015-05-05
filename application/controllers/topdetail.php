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
    public function index($id, $page = 'index')
    {
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $show_edit = false;
            $username = '游客';
        } else {
            $show_edit = true;
            $username = $this->session->userdata('username');
        }

        $this->load->model("mtopdetail");
        $workinfo = $this->mtopdetail->get_hot_works_info($id);
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "作品详情",
            'username' => $username,
            'show_edit' => $show_edit,
            'email' => $email,
            'workinfo' => $workinfo
//            'id' => $id
        );
//        var_dump($workinfo);

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('homepage/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }
}
