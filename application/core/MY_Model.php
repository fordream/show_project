<?php

class MY_Model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }

    public function select_DB($databaseName)
    {
        $db_config['hostname'] = 'www.t-uvw.xyz';
        $db_config['username'] = 'root';
        $db_config['password'] = 'root';
//        $db_config['hostname'] = '127.0.0.1';
//        $db_config['username'] = 'data';
//        $db_config['password'] = 'data2123';
        $db_config['database'] = $databaseName;
        $db_config['dbdriver'] = 'mysqli';
        $db_config['dbprefix'] = '';
        $db_config['pconnect'] = TRUE;
        $db_config['db_debug'] = TRUE;
        $db_config['cache_on'] = FALSE;
        $db_config['cachedir'] = '';
        $db_config['char_set'] = 'utf8';
        $db_config['dbcollat'] = 'utf8_bin';
        $db_config['swap_pre'] = '';
        $db_config['autoinit'] = TRUE;
        $db_config['stricton'] = FALSE;

        return $db_config;
    }

    /* get_result_array: 根据数据库和 SQL 语句获取到结果数组
     * @param : $db -- 选择的数据库
     *          $sql -- 要查询的语句
     *          $valArr[可选] -- 可以带入的参数
     *          $retArr[可选] -- 返回的数组中的字段
     * @return : SQL 查询结果数组
     * */
    public function get_result_array($db, $sql, $valArr = null) {
        $config= $this->select_DB($db);
        $this->load->database($config);

        $query = $this->db->query($sql, $valArr);

        return $query->result_array();
    }

    public function set_record($db, $sql, $valArr) {
        $config= $this->select_DB($db);
        $this->load->database($config);

        $this->db->query($sql, $valArr);

        if (mysql_errno() == 1062) {
            return -1;
        }

        return 0;
    }

    /*
     * my_query: 根据数据库和 SQL 语句获取到结果
     * @param: $db -- 选择的数据库
     *         $sql -- SQL 语句
     *         $valArr[可选] -- SQL 语句中的参数
     * return: object -- 查询的返回对象
     * */
    public function my_query($db, $sql, $valArr = null) {
        $config= $this->select_DB($db);
        $this->load->database($config);

        return $this->db->query($sql, $valArr);
    }

    /*
     * batch_insert: 批量插入数据库（也可用于更新，使用 on duplicate key update）
     * @param: $db -- 选择的数据库
     *         $sql -- SQL 语句（只带一个问号）
     *         $valArr -- 包含要更新的值的二维数组，可以是关联数组
     *         $n[可选] -- 一次批量操作的数量， 默认是500条
     * return: true/false
     * */
    public function batch_insert($db, $sql, $valArr, $n = 500) {
        $i = 0;
        $sqlStr = '';
        $res = true; // 最后返回的结果
        foreach($valArr as $row) {
            foreach($row as $k => $v) {
                $row[$k] = str_replace("'", "\'", $v);
            }
            $rowStr = implode("', '", array_values($row));
            $sqlStr = $sqlStr."('$rowStr'),";
            $sqlStr = str_replace("''", 'NULL', $sqlStr);
            $i++;

            if ($i === $n) {
                $res = $res && $this->_exec_batch_insert($db, $sql, $sqlStr);
                $sqlStr = '';
                $i = 0;
            }
        }

        // 最后剩余不足500条的，一起插入
        if ($i != 0) {
            $res = $res && $this->_exec_batch_insert($db, $sql, $sqlStr);
        }

        return $res;
    }

    /*
     * _exec_batch_insert: 执行批量插入数据库
     * @param: $db -- 选择的数据库
     *         $sql -- SQL 语句（只带一个问号）
     *         $sqlStr -- 拼凑好的 sql 中的值语句，带结尾的“,”的
     * return: true/false
     * */
    private function _exec_batch_insert($db, $sql, $sqlStr) {
        $sqlStr = rtrim($sqlStr, ',');
        $sql = str_replace('?', $sqlStr, $sql);

        return $this->my_query($db, $sql);
    }

    // 基于 ActiveRecord 的辅助方法, 更方便操作数据库.

    protected function _load_db($db) {
        $this->load->database($this->select_DB($db));
    }

    /**
     * 选择数据库中某个表中的所有数据, 可以根据 $select 参数来限定返回的字段.
     *
     * @param $db string 数据库
     * @param $table string 数据表
     * @param array $select 字符数组, 限定返回的字段.
     * @return mixed 数组, 每个数组元素对应数据库中的一行记录.
     */
    public function all($db, $table, array $select = null) {
        $this->_load_db($db);
        if (!is_null($select)) {
            $this->db->select(join(',', $select));
        }

        $query = $this->db->get($table);
        return $query->result();
    }

    public function get_where($db, $table, $where = null, $limit = null, $offset = null) {
        $this->_load_db($db);
        $query = $this->db->get_where($table, $where, $limit, $offset);
        return $query->result();
    }

    public function insert($db, $table, array $data) {
        $this->_load_db($db);
        $this->db->insert($table, $data);
    }

    public function delete($db, $table, $where = '') {
        $this->_load_db($db);
        $this->db->delete($table, $where);
    }
}
