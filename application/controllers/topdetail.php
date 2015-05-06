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

    //文件上传
    function fileUp(){
        $url = base_url().IMG_DIR;
        $config['upload_path'] = $url;
        $config['allowed_types'] = 'pdf|jpg|png';//文件类型
        $config['max_size'] = '0';
        $config['encrypt_name'] = true;
        $this->load->library('upload',$config);
        if ($this->upload->do_upload('image')) {
            $upload_data = $this->upload->data();
            return $upload_data['file_name'];
        }
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
        $this->load->view('topdetail/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }

    function notedetail($id, $page = 'notedetail')
    {
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $show_edit = false;
            $username = '游客';
        } else {
            $show_edit = true;
            $username = $this->session->userdata('username');
        }

        $this->load->model("mtopdetail");
//        $workinfo = $this->mtopdetail->get_hot_works_info($id);
        $noteinfo = $this->mtopdetail->get_note_info($id);
        $notecomments = $this->mtopdetail->get_note_comments($id);
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "讨论详情",
            'username' => $username,
            'show_edit' => $show_edit,
            'email' => $email,
            'noteinfo' => $noteinfo,
            'notecomments' => $notecomments
//            'workinfo' => $workinfo
//            'id' => $id
        );

        // 帖子访问记录
        $this->mtopdetail->insert_note_log($username, $id);
//        var_dump($workinfo);

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('templates/task_footer_final');
    }

    function addwork($page = 'addwork')
    {
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $show_edit = false;
            $username = '游客';
        } else {
            $show_edit = true;
            $username = $this->session->userdata('username');
        }

        $this->load->model("mtopdetail");

        $email = $this->session->userdata('email');
        $data = array(
            'title' => "发布作品",
            'username' => $username,
            'show_edit' => $show_edit,
            'email' => $email
        );

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/addwork');
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('topdetail/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }

    function addnote($page = 'addnote')
    {
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $show_edit = false;
            $username = '游客';
        } else {
            $show_edit = true;
            $username = $this->session->userdata('username');
        }

        $this->load->model("mtopdetail");

        $email = $this->session->userdata('email');
        $data = array(
            'title' => "发布帖子",
            'username' => $username,
            'show_edit' => $show_edit,
            'email' => $email
        );

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('topdetail/footer_function_add');
        $this->load->view('templates/task_footer_final');
    }

    function notesucess($page = 'notesucess')
    {
        if ( ! file_exists('application/views/topdetail/'.$page.'.php'))
        {
            show_404();
        }
        $username = $this->session->userdata('username');
        $data['title'] = "发表成功";
        $data['username'] = $username;
        $notetitle = $this->input->post('notetitle', true);
        $notetext = $this->input->post('notetext',true);

        $this->load->model("mtopdetail");
        $note_img = 'a'.rand(1,8).'.jpg';
        $this->mtopdetail->add_note($notetitle, $notetext, $username, $note_img);

        $now_note_id = $this->mtopdetail->get_now_note_id($username);

        $data['now_note_id'] = $now_note_id[0]['id'];   // 记录刚插入的帖子id

        $this->load->view('topdetail/'.$page,$data);
    }

    function commentsucess($page = 'notedetail')
    {
        if(!array_key_exists('logged_in', $this->session->all_userdata())) {
            $show_edit = false;
            $username = '游客';
        } else {
            $show_edit = true;
            $username = $this->session->userdata('username');
        }

        $this->load->model("mtopdetail");

        $idtemp = $this->mtopdetail->get_now_note($username);
        $id = $idtemp[0]['id'];
        $commenttext = $this->input->post('commenttext', true);
        $comment_img = "a".rand(1,8).".jpg";
        $this->mtopdetail->insert_comment($username, $commenttext, $id, $comment_img); // 插入评论

        // 重新加载评论
        $noteinfo = $this->mtopdetail->get_note_info($id);
        $notecomments = $this->mtopdetail->get_note_comments($id);
        $email = $this->session->userdata('email');
        $data = array(
            'title' => "讨论详情",
            'username' => $username,
            'show_edit' => $show_edit,
            'email' => $email,
            'noteinfo' => $noteinfo,
            'notecomments' => $notecomments
//            'workinfo' => $workinfo
//            'id' => $id
        );

        $this->load->view('templates/header',$data);
        $this->load->view('topdetail/'.$page);
        $this->load->view('templates/task_footer');
        $this->load->view('templates/task_footer_script');
        $this->load->view('templates/task_footer_function');
        $this->load->view('templates/task_footer_final');
    }
}
