<?php

class Mtopdetail extends MY_model
{
    function __construct()
    {
        parent::__construct();
    }

    // 获取所有热门作品详细信息
    function get_hot_works_info($id)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`,`title`,`vote`,`imgpath`,`pdfpath`,`author`,`uploadtime`,`tag`,`reward`,`lastupdate`,`text`
                FROM works
                WHERE `id` = $id";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }

    // 获取所有帖子信息
    function get_note_info($id)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`,`title`,`createtime`,`author`,`text`,`comments`,`note_img`,`vote`
                FROM `note`
                WHERE `id` = $id";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }

    // 获取指定id帖子的所有评论详细信息
    function get_note_comments($id)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`,`title`,`createtime`,`text`,`author`,`comment_img`,`vote`
                FROM `comments`
                WHERE `title` = $id
                ORDER BY `createtime`";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }

    function add_note($notetitle, $notetext, $author, $note_img)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql="INSERT INTO `note` (`createtime`, `title`, `author`, `text`,`note_img`) "
            . "VALUES ('". date("Y-m-d H:i:s") ."', '$notetitle', '$author', '$notetext', '$note_img')";
        if(!($query = $this->db->query($sql)))
        {
            $this->db->_error_message();
            return false;
        }
        return true;
    }

    function get_now_note_id($username)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`
                FROM `note`
                WHERE `author` = $username
                ORDER BY `id` DESC
                LIMIT 1";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }

    function insert_note_log($username, $noteid)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql="INSERT INTO `notelog` (`username`, `noteid`, `time_in`) "
            . "VALUES ('$username', '$noteid', '". date("Y-m-d H:i:s") ."')";
        if(!($query = $this->db->query($sql)))
        {
            $this->db->_error_message();
            return false;
        }
        return true;
    }

    // 获取用户正在访问的帖子id
    function get_now_note($username)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`
                FROM `notelog`
                WHERE `username` = '$username'
                ORDER BY `time_in` DESC
                LIMIT 1";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }

    function insert_comment($username, $commenttext, $id, $comment_img)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql="INSERT INTO `comments` (`title`, `createtime`, `text`, `author`, `comment_img`) "
            . "VALUES ('$id',  '". date("Y-m-d H:i:s") ."', '$commenttext', '$username', '$comment_img')";
        if(!($query = $this->db->query($sql)))
        {
            $this->db->_error_message();
            return false;
        }
        return true;
    }

    function insert_work($title, $author, $pdfpath, $imgpath, $reward, $text)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql="INSERT INTO `works` (`title`, `uploadtime`, `author`, `pdfpath`, `imgpath`, `reward`, `lastupdate`, `text`) "
            . "VALUES ('$title',  '". date("Y-m-d H:i:s") ."', '$author', '$pdfpath', '$imgpath', '$reward', '". date("Y-m-d H:i:s") ."', '$text')";
        if(!($query = $this->db->query($sql)))
        {
            $this->db->_error_message();
            return false;
        }
        return true;
    }

    function get_now_workid($username, $worktitle)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`
                FROM `works`
                WHERE `author` = '$username' AND `title` = '$worktitle'";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }
}