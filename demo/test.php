作者：<em>PHP</em>进阶架构师
链接：https://zhuanlan.zhihu.com/p/101394604
来源：知乎
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。

<?php 
    include("conn.php");            //调用数据库连接php
    $sql = "select * from lyb order by id desc";        //sql查询语句
    $result = $conn->query($sql);            //执行sql查询语句
    if($result == false ){                //判断sql语句是否执行成功
?>
    <script language="javascript">
            alert('<?php echo "sql语句错误"; ?>');        //执行错误后弹框提示语句错误
    </script>
<?php
    }
    $rows = [];                //设置数组（存放数据库查询出的内容）
    while ($row = $result->fetch_assoc() ) {        //循环sql查询到的内容
        # code...
        $rows[] = $row;                //将循环的sql内容输入到数组
    }
    
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>留言板</title>
    <meta charset="utf-8">            // 设置html字符编码
    <style type="text/css" media="screen">        // 设置css
        .over{
            margin: 0 35%;
        }
        .user{
            color: #aed;
        }
        .time{
            float: right;
        }
        .times{
            color: red;
        }
        .content{
            display: block;
            width: 585px;
            border: 1px solid #abc;
            margin-top: 5px;
            margin-bottom: 20px;
            word-wrap:break-word; 
            word-break:break-all; 
        }
        .mess{
            width: 585px;
            height: 500px;
            overflow-x: hidden;
        }
    </style>
</head>
<body>
    <div class="over">        // 设置留言板整体DIV
        <div>        //设置用户输入的DIV
            <form action="save.php " method="POST" accept-charset="utf-8">    //设置表单的提交方式，字符编码，提交后的PHP处理文件
                <textarea cols="80" rows="10" name="lynr" >留言内容</textarea>        //设置用户输入留言的表单
                <br>
                <input type="text" name="lyr" value="留言人">        //设置输入用户名的表单
                <input type="submit"  value="提交">            //设置提交按钮
                </form>
        <div class="mess">
        <?php foreach ($rows as $rowe){ ?>        //循环数组，循环整个DIV
        <div>         //设置留言板的输出
            留言人：<font class="user"><?php echo "$rowe[user]"; ?></font>        //将循环数组中的用户输出
            <div class="time">留言时间:<a class="times">
                <?php echo date("Y-m-d H:i:s",$rowe['time']); ?>    //将循环数组中的用户留言时间输出
                </a></div>
            <div>留言内容：<a class="content">
                <?php echo "$rowe[connect]"; ?>        //将循环数组中的留言内容输出
            </a></div>
        </div>
        <?php } ?>        
        </div>
    </div>
</div>
</body>
</html>