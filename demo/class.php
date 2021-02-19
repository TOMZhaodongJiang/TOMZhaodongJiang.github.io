作者：<em>PHP</em>进阶架构师
链接：https://zhuanlan.zhihu.com/p/101394604
来源：知乎
著作权归作者所有。商业转载请联系作者获得授权，非商业转载请注明出处。

<?php 
    /**
     * 定义判断用户输入内容是否符合规定
     */
    class pd         //定义类
    {
        
        function input($post)            //设置函数，此函数用来判断输入内容
        {
            # code...
            if ($post == "" ){            //判断是否内容为空
                return false;            //输出结果为false
            }
            $zf = ["张三","李四","王五"];            //我这里就拿这几个字符做特殊字符了
            foreach ($zf as $er ) {                //判断是否存在特殊字符
                # code...
                if ($post == $er) {
                    # code...
                    return false;
                }
            }
            return true;        //输出结果为true
        }
    }
 ?>