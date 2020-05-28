
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
        
        <br>
        <h1 class="text-center">企业产值预报及监测</h1>
         <br>   
            <div class="container" >
                
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2  bg-primary"> 
                     <br>
                     <br>
                     <br>
                
                    企业名称：
                     <div class="input-group">
                      
                    <input class="form-control"></input>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                    </div>
                    年度：<input type="date" name="" id="input" class="form-control" value="" required="required" pattern="" title="ddd">
                     月份：<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="ddd">
                     产值（当月）:<input type="date" name="" id="input" class="form-control" value="" required="required" pattern="" title="ddf">
                     主营业务收入（当月）：<input type="text" name="" id="input" class="form-control" value="" required="required" pattern="" title="fff">
                    
                     <div class="text-center">
                     <br>
                     <button type="button" class="btn btn-default alg">更新</button>
                     
                     <button type="button" class="btn btn-default">新增</button>
                     </div>
                     <br>
                     <br>
                     <br>
                    
                    </div>
                    
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10 text-center">
                     <br>
                      <hr>                     
                    
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                            企业名称
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                             年度   
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            月份
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            产值（当月）
                        </div>
                        <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
                            主营业务收入（当月）
                        </div>
                        
                    </div>
                    <hr>
                    
                    
                    
                    
                    
                    </div>
                    

               
                   
                </div>
                
            </div>
            




        <!-- jQuery -->
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://cdn.bootcss.com/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
