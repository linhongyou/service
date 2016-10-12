<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/11
 * Time: 13:55
 */
error_reporting(E_ALL);
set_time_limit(0);
include_once('simple_html_dom.php');
//for($i=0;$i<2080;$i+=20) {
    $html = file_get_html("http://www.bjrbj.gov.cn/LDJAPP/search/ddyy/ddyy_01_outline_new.jsp?sno=0");
    $table = $html->find("table[align=center]", 0);
    $table = str_get_html($table);
    for($i=1;$i<=20;$i++){
        $v = $table->find("tr",$i);
        echo $v->find("td",0)->text();
    }
//}