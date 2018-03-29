<?php if (!defined('THINK_PATH')) exit();?>
<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xyd-Blog博客管理系统</title>

    <link href="/blog/Public/css/bootstrap.min.css" rel="stylesheet">
    <link href="/blog/Public/css/default.css" rel="stylesheet">
    <link rel="stylesheet" href="/blog/Templet/default/Public/css/global.css">
    <link rel="stylesheet" href="/blog/Templet/default/Public/css/style.css">
    <link rel="stylesheet" href="/blog/Templet/default/Public/css/demo.css">
    <style type="text/css">
        ul {
            padding:0 0 0 0;
            margin:0 0 40px 0;
        }
        ul li {
            list-style:none;
            margin-bottom:10px;
        }
        ul li img {
            cursor: pointer;
        }
        .modal-body {
            padding:5px !important;
        }
        .modal-content {
            border-radius:0;
        }
        .modal-dialog img {
            text-align:center;
            margin:0 auto;
        }
        .controls{
            width:50px;
            display:block;
            font-size:11px;
            padding-top:8px;
            font-weight:bold;
        }
        .next {
            float:right;
            text-align:right;
        }
        .text {
            color:#666;
            font-size:12px;
            margin-bottom:10px;
            padding:12px;
            background:#fff;
        }
        /*override modal for demo only*/
        .modal-dialog {
            max-width:500px;
        }
        @media screen and (min-width: 768px){
            .modal-dialog {
                width:500px;
            }
        }

        @media screen and (max-width: 380px){
            .col-xxs-12 {
                width:100%;
            }
            .col-xxs-12 img {
                width:100%;
            }
        }
    </style>
    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>
    <!--[if IE]>

    <script src="http://libs.useso.com/js/html5shiv/3.7/html5shiv.min.js"></script>

   <!-- <script src="/blog/Public/js/html5shiv.js"></script>-->
    <![endif]-->
</head>
<body>
<article class="htmleaf-container">
    <header class="htmleaf-header">

    </header>
    <div class="container">
        <div class="row" style="text-align:center; border-bottom:1px dashed #ccc;  padding:0 0 20px 0; margin-top:20px;margin-bottom:20px;">

            <p>缩放你的浏览器查看网格的响应式效果。点击图片可以查看模态窗口下的大图。</p>
        </div>

        <ul class="row">
            <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="col-lg-2 col-md-2 col-sm-3 col-xs-4 col-xxs-12">
                <img class="img-responsive" src="/blog/Uploads<?php echo ($vo["pic"]); ?>">
                <div class="text"><?php echo ($vo["title"]); ?></div>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>
    </div> <!-- /container -->

</article>

<div class="pages">
    <?php echo ($page); ?>
</div>

<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<script src="/blog/Public/js/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.11.0.min.js"><\/script>')</script>
<script src="/blog/Public/js/bootstrap.min.js"></script>
<script src="/blog/Public/js/photo-gallery.js"></script>
</body>
</html>