<?php

class Mtopdetail extends MY_model
{
    function __construct()
    {
        parent::__construct();
    }

    function get_hot_works_info($id)
    {
        $config = parent::select_DB("etc_privileges");
        $this->load->database($config);

        $sql = "SELECT `id`,`title`,`vote`,`imgpath`,`pdfpath`,`author`,`uploadtime`,`tag`,`reward`,`lastupdate`
                FROM works
                WHERE `id` = $id";

        return $this->my_query("etc_privileges", $sql)->result_array();
    }
}