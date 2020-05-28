<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link href="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.3/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        
        <h1>数据提交</h1>
        <from >
            <input type="text"></input>
            <p></p>
            <input type=text></input>
            <button>提交</button>
      </from>
        <!--jQuery--> 
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
        

<script type="text/javascript">
    	//在页面加载的时候调用JQuery，更改input的值。
 
    	
      $(function(){ 
       // htmlobj=$.ajax({
       //      //发送的处理，是控制器/动作
       //      url:"home",
       //      //发送的数据必须是JSON键值对的形式
       //      data:{"test":"测试值"},
       //      type:"POST",
       //      dataType:"text",
       //      success:function(data){
       //         alert(data);
       //      }
           
           
       //    });
      alert("ajax.test");
      });
       

  </script>

    </body>
</html>
