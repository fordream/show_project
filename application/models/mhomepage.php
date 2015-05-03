<?php

class Mhomepage extends MY_model
{
    function __construct()
    {
        parent::__construct();
    }


    /*
     * insert_log_message : 插入登录信息到登录日志表中
     * param : $username -- 用户名 $logMessage -- 登录/注销信息 $ipAdddresss -- ip地址
     * return : true/false -- 操作是否成功
     */
    function insert_log_message($username, $logMessage, $ipAddress)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql="INSERT INTO `rep_log` (`createtime`, `username`, `title`, `content`) "
            . "VALUES ('". date("Y-m-d H:i:s") ."', '$username', '$logMessage', '$ipAddress')";
        if(!($query = $this->db->query($sql)))
        {
            $this->db->_error_message();
            return false;
        }
        return true;
    }
}