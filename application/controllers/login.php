<?php

class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->helper('captcha');
    }

    /*
     *  index : 用户登录界面函数
     *  @$page='index' : 默认调用视图页面
     */
    public function index($page = 'index')
    {
        if ( ! file_exists('application/views/login/'.$page.'.php'))
        {
            show_404();
        }

        $data['title'] = "用户登录";

        $this->load->view('login/'.$page, $data);
//        $this->load->view('login/login_footer');

    }

    /*
     *  reg_success : 用户注册成功
     *  @$page='reg_success' : 注册成功页面
     */
    public function reg_success($page = 'reg_success') {
        if ( ! file_exists('application/views/login/'.$page.'.php'))
        {
            show_404();
        }
        $username = $this->input->post('username', true);
        $email = $this->input->post('email', true);
        $password = $this->input->post('password', true);

        $company = $this->input->post('company', true);
        $company_site = $this->input->post('company_site', true);
        $position = $this->input->post('position', true);
        $phone = $this->input->post('phone', true);
        $def_proj = '630050316';


        $data['title'] = "注册成功";
        $data['username'] = $username;

        $this->load->model("mlogin");

        // 插入新用户
        $this->mlogin->insert_user($username,$email,md5($password),$company,$company_site,$position,$phone);

        // 新用户uid
        $uid = $this->mlogin->getuid_by_username($username);

        // 给新用户分配默认数据库
        $this->mlogin->proj_for_newuser($uid, $def_proj);

        $this->load->view('login/'.$page,$data);
    }

    /*
     *  register : 用户注册
     *  @$page='register' : 注册页面
     */
    public function register($page = 'register') {
        if ( ! file_exists('application/views/login/'.$page.'.php'))
        {
            show_404();
        }
        $data['title'] = "用户注册";
        $this->load->view('login/'.$page,$data);
    }

    /*
     * get_captcha : 生成验证码函数
     * @param : null
     * @return : $cap['image'] - 生成的验证码图像代码
     */
    public function get_captcha()
    {
        if($this->session->userdata('captcha') != "")
        {
            $this->del_captcha();
        }

        $vals = array(
            'word' => rand(1000, 10000),
            'img_path' => IMG_DIR.'/captcha/',
            'img_url' => IMG_DIR.'/captcha/',
            'img_width' => '100',
            'img_height' => '30',
            'font_path' => PUB_DIR.'/fonts/texb.ttf'
        );

        $cap = create_captcha($vals);
        $this->session->set_userdata('captcha',$cap['word']);
        $this->session->set_userdata('captcha_url',$cap['time']);

        echo $cap['image'];
    }

    /*
     * del_captcha : 删除验证码文件，用于登录成功以后，以便及时清理空间
     * param : null
     * return : null
     */
    public function del_captcha()
    {
        $path = IMG_DIR.'/captcha/'.$this->session->userdata('captcha_url').'.jpg';
        $this->load->helper('file');
        unlink($path);
    }

    /*
     * validate : 登录ajax操作目的函数，验证输入的验证码，用户名和密码，并echo出不同类型的值表示不同的状态。
     *            若登录成功，则还要进行删除验证码和设置session的操作。
     * param : none
     * return : none
     */
    public function validate()
    {
        define("CAPTCHA_ERROR", "2");
        define("PASSWORD_ERROR", "1");
        define("LOGIN_SUCCESS", "0");

//        $captcha = $this->input->post('captcha', true);
        $username = $this->input->post('username', true);
        $password =  $this->input->post('password', true);

        //验证输入的验证码字段
        // 新版暂无验证码字段
        /*if($captcha != $this->session->userdata('captcha') )
        {
            echo CAPTCHA_ERROR;
            return;
        }*/

        $this->load->model("mlogin");

        //验证用户名密码
        $record = $this->mlogin->validate_user($username, md5($password));
        if($record==-1)
        {
//            echo PASSWORD_ERROR;

            redirect('login/index');
        }
        else
        {
            // 如果试用期过 并且 没有购买产品 则权限下降
            if($this->mlogin->expire_time_user($username)) {

                $this->mlogin->set_user_groupid(-1, $username);  // 用户权限降低
            }
//            echo LOGIN_SUCCESS;

            //删除验证码
//            $this->del_captcha();
//            $this->session->unset_userdata('captcha');
//            $this->session->unset_userdata('captcha_url');

            //设置session数据
            $authDB =  $this->mlogin->get_auth_DB($record['userid']);
            $userdata = array(
                'username'  => $username,
                'email' => $record['email'],
                'authDB'    => $authDB,
                'groupID' => $this->mlogin->get_groupid_by_username($username),  // 判断是否已过试用期之后再获取groupid
                'logged_in' => TRUE
            );
            $this->session->set_userdata($userdata);

            //插入日志文件
            $this->mlogin->insert_log_message($username, "login", $this->input->ip_address());
            if($username == 'admin') {
                redirect('home/index');
            } else {
                redirect('homepage/index');
            }


        }
    }
}
