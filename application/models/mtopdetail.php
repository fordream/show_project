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

        $sql = "SELECT `id`,`title`,`vote`,`imgpath`,`pdfpath`,`author`,`uploadtime`,`tag`,`reward`,`lastupdate`
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
}