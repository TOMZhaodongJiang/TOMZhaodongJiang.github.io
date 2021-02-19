作者：<em>PHP</em>进阶架构师
链接：https://zhuanlan.zhihu.com/p/101394604
来源：知乎
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。

<?php 
    $HOST = "localhost";        //数据库IP地址
    $USER = "root";                //连接数据库的用户名
    $PASSWD = "root";            //数据库用户密码
    $DB = "test";                //数据库名称
    $conn = new mysqli( $HOST,$USER,$PASSWD,$DB );        //连接数据库的sql语句
    if (!$conn) {            //判断数据库是否连接成功
        # code...
        die("连接数据库失败");        
    }
        
    $sql = ("SET NAMES UTF8");            //设置数据库传输字符编码
    $res = $conn->query($sql);                    //执行sql语句
    if ($res == false) {            //sql语句是否执行成功
        # code...
        die("数据库语句执行失败");        
    }
 ?>