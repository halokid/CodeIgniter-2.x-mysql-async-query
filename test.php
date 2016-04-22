<?php


/**
测试平台 linux 3.2  64位  457751条数据 select操作

同步需耗时 5.4322929859161
异步需耗时 3.2787293134161
**/


class Test extends Ysd
{

    public function __construct()
    {
        parent::__construct();
    }

    //同步查询数据
    public function sync_mysql_select() {
        //sync
        $s = microtime(true);
        $sql = "select id from `test`";
        $query = $this->writedb->query($sql);
        $row = $query->result_array();
        echo count($row);
        $e = microtime(true);
        echo '<br>'.($e-$s); 
    }
    
    //异步查询数据
    public function async_mysql_select() {
        //async
        $s = microtime(true);
        $sql = "select id from `test`";
        $this->writedb->async_link_charset('utf8');
        $rows = $this->writedb->async_fetch($sql);
        echo count($rows);
        $e = microtime(true);
        echo '<br>'.($e-$s); 
    }
    
    
    //异步操作数据
    public function async_mysql() {
        //async
        $s = microtime(true);
        $sql_a = "insert into `test` set value='my async xxxxxxxxx' ";
        $this->writedb->async_link_charset('utf8');
        $insert_id = $this->writedb->async_fetch($sql_a);
        echo $insert_id;
      
        $sql_b = "update `test` set value='hello world xxxx yyyyy kdlaskdla' where id=1";
        $affected_rows = $this->writedb->async_query($sql_b);
        echo $affected_rows;
        
        $e = microtime(true);
        echo '<br>'.($e-$s); 
    }
    
    
}



