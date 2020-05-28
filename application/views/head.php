<!DOCTYPE html>
<html lang="zh-CN">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
      <title>用户登录</title>

      <!-- Bootstrap -->
   <link  href="<?=base_url();?>static/css/bootstrap.css" rel="stylesheet"　type="text/css">
   <link  href="<?=base_url();?>static/css/custom.min.css" rel="stylesheet" type="text/css">
   <style>
  /* Make the image fully responsive */
   .carousel-inner img {
      width: 100%;
      height: 200px;
  }
  </style>




<!---->
  </head>
    <!-- HTML5 shim 和 Respond.js 是为了让 IE8 支持 HTML5 元素和媒体查询（media queries）功能 -->
    <!-- 警告：通过 file:// 协议（就是直接将 html 页面拖拽到浏览器中）访问页面时 Rspond.js 不起作用 -->
    <!--[if lt IE 9]>
      <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
   
     <script src="static/js/juque-3.5.1.min.js"></script>
    <!--加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
<body padding-top:109px;>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">导航</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">主页<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">内容</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link" href="#">关于</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="搜索">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">搜索</button>
    </form>
  </div>
</nav>
