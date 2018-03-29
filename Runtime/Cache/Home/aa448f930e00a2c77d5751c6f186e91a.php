<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title><?php echo ($tpte["title"]); ?></title>
<meta name="keywords" content="<?php echo ($tpte["keywords"]); ?>"/>
<meta name="description" content="<?php echo ($tpte["description"]); ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="/blog/Templet/default/Public/css/global.css">
<link rel="stylesheet" href="/blog/Templet/default/Public/css/style.css">
<link rel="stylesheet" href="/blog/Templet/default/Public/css/demo.css">
<!--<script src="/blog/Templet/default/Public/js/jquery-1.9.1.min.js"></script>-->
<script src="/blog/Templet/default/Public/js/jquery.cbFlyout.js"></script>
</head>
<body>
<div class="tpt-header cl">
	<div class="tpt-wp cl">
		<div class="tpt-ml-7">
			<div class="tpt-mds">
				<div class="logo">
					<a href="/blog/" title="<?php echo ($tptc["title"]); ?>"><img src="/blog/Uploads<?php echo ($tpte["logo"]); ?>" style="height:65px;" alt="<?php echo ($tpte["title"]); ?>"></a>
				</div>
				<div id="left-flyout-nav" class="layout-left-flyout visible-sm">
				</div>
				<div class="layout-right-content">
					<header class="the-header">
					<div class="navbar container tpt-right-1024">
						<!-- Trigger -->
						<a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="javascript:;"><i style="color: #fff;font-size: 28px;" class="iconfont">&#xe607;</i></a>
						<!-- Structure -->
						<nav class="the-nav nav-collapse clearfix">
						<ul id="menu" class="nav nav-pill pull-left">
							<li class="dropdown">
								<a href="/blog/">首页</a>
							</li>
							<?php if(is_array($tpta)): foreach($tpta as $k=>$vo): ?><li class="dropdown">
								<a href="<?php echo U('Home/index/part',array('id'=>$vo['id']));?>"><?php echo ($vo["name"]); ?></a>
							<ul class="subnav">

								<?php if(is_array($tptas)): foreach($tptas as $k=>$vs): if($vo["id"] == $vs['tid']): ?><li><a href="<?php echo U('Home/index/part',array('id'=>$vs['id']));?>"><?php echo ($vs["name"]); ?></a></li><?php endif; endforeach; endif; ?>

							</ul>
							</li><?php endforeach; endif; ?>
						</ul>
						</nav>
					</div>
					</header>
				</div>
			</div>
		</div>
		<div class="tpt-mr-3">
			<div class="tpt-mds">
				<?php if($tpte['open'] == 1): ?><div class="status">
					<a target="_blank" href="<?php echo U('index/tougao');?>">欢迎投稿</a>
				</div><?php endif; ?>
				<div class="search">
					<form action="/blog/index.php/search.html" method="get">
						<input placeholder="输入关键字" name="kw" value="<?php echo I('kw');?>" type="text">
						<button value="查询" type="submit"></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="tpt-wp tpt-pat-75 cl">
	<div class="tpt-ml-7">
		<div class="tpt-banner cl">
			<div class="tpt-ml-6">
				<div class="tpt-a">
					<a href="<?php echo ($tptf["alink"]); ?>" title="<?php echo ($tptf["atitle"]); ?>"><img src="/blog/Uploads<?php echo ($tptf["apic"]); ?>" alt="<?php echo ($tptf["atitle"]); ?>"></a>
					<!--<h2><a href="<?php echo ($tptf["alink"]); ?>" title="<?php echo ($tptf["atitle"]); ?>"><?php echo ($tptf["atitle"]); ?></a></h2>-->
				</div>
			</div>
			<div class="tpt-mr-4">
				<ul class="tpt-b">
					<li><a href="<?php echo ($tptf["blink"]); ?>" title="<?php echo ($tptf["btitle"]); ?>"><img src="/blog/Uploads<?php echo ($tptf["bpic"]); ?>" alt="<?php echo ($tptf["btitle"]); ?>"></a>
				<!--	<h2><a href="<?php echo ($tptf["blink"]); ?>" title="<?php echo ($tptf["btitle"]); ?>"><?php echo ($tptf["btitle"]); ?></a></h2>-->
					</li>
					<li><a href="<?php echo ($tptf["clink"]); ?>" title="<?php echo ($tptf["ctitle"]); ?>"><img src="/blog/Uploads<?php echo ($tptf["cpic"]); ?>" alt="<?php echo ($tptf["ctitle"]); ?>"></a>
				<!--	<h2><a href="<?php echo ($tptf["clink"]); ?>" title="<?php echo ($tptf["ctitle"]); ?>"><?php echo ($tptf["ctitle"]); ?></a></h2>-->
					</li>
					<ul>
					</ul>
				</ul>
			</div>
		</div>
		<ul class="main">
			<?php if(is_array($tptg)): $i = 0; $__LIST__ = $tptg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cl">
			<div class="tpt-ml-3 cl">
				<div class="main_left">
					<?php if($vo[commend] == 1): ?><div class="mod-angle tpt-none-768">
								热
							</div><?php endif; ?>
							<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/blog/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
					        <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; ?>
					        <?php if($vo[pic] != ''): ?><img src="/blog/Uploads<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
		                    <?php else: ?> 
                            <img src="/blog/Templet/default/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
					        </a>
				</div>
			</div>
			<div class="tpt-mr-7">
				<div class="main_right cl">
					<h2><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/blog/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
					<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a></h2>
					<p>
						<span><i class="iconfont">&#xe6a3;</i><?php echo ($vo["author"]); ?></span><span class="pipe"></span><span><i class="iconfont">&#xe7e5;</i><?php echo ($vo["name"]); ?></span><span class="pipe"></span><span><i class="iconfont">&#xe6c0;</i><?php echo ($vo["view"]); ?></span><span class="pipe"></span><span class="tpt-none-768"><i class="iconfont">&#xe64d;</i><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></span>
					</p>
					<p class="tpt-none-768">
						<?php echo ($vo["description"]); ?>...
					</p>
				</div>
			</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="pages"><?php echo ($page); ?></div>
	</div>
	<div class="tpt-mr-3">
		<div class="tpt-sidebar cl">
	<h3>热门标签</h3>
	<ul class="tpt-g cl">
		<?php if(is_array($tagss)): $k = 0; $__LIST__ = array_slice($tagss,0,30,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($k % 2 );++$k;?><li><a class="tpt-g-<?php echo ($k); ?>" href='/blog/index.php/tags.html?ks=<?php echo ($tag); ?>'><?php echo ($tag); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="tpt-sidebar cl">
	<h3>热门推荐</h3>
	<ul class="tpt-c cl">
		<?php if(is_array($tptb)): $i = 0; $__LIST__ = $tptb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/blog/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
		<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a>
		<p>
			<?php echo (date("Y-m-d H:i:s",$vo["time"])); ?>
		</p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="tpt-sidebar cl">
	<h3>精选内容</h3>
	<ul class="tpt-d cl">
		<?php if(is_array($tptc)): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
		<div>
		<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/blog/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
		<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; ?>
		<?php if($vo[pic] != ''): ?><img src="/blog/Uploads<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
		<?php else: ?> 
        <img src="/blog/Templet/default/Public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
		</a>
		</div>
		<p>
			<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/blog/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
			<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a>
		</p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="tpt-sidebar cl">
	<h3>友情连接</h3>
	<ul class="tpt-e cl">
		<?php if(is_array($tptd)): $i = 0; $__LIST__ = $tptd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
	</div>
</div>
<div class="tpt-footer footer tpt-mat-30">
	<div class="tpt-wp cl">
		<div class="tpt-md-1">
			<div class="tpt-mds">
				<p class="bq">
					Copyright© 2017-2018
					<span class="pipe">|</span>
					<span class="tpt-none-768 tpt-none-1024">
					<a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo ($tpte["beian"]); ?></a>
					<span class="pipe">|</span>
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($tpte["qqs"]); ?>&site=qq&menu=yes" target="_blank" >QQ:<?php echo ($tpte["qqs"]); ?></a>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>

<script>
			$(document).ready(function(){
				$('.the-nav').cbFlyout();
			});
</script>
<script type="text/javascript">
  var urlstr = location.href;

  //alert((urlstr + '/').indexOf($(this).attr('href')));

  var urlstatus=false;
  $("#menu a").each(function () {
    if ((urlstr + '/').indexOf($(this).attr('href')) > -1&&$(this).attr('href')!='') {
      $(this).addClass('curs');urlstatus = true;
    } else {
      $(this).removeClass('curs');
    }
  });
  if (!urlstatus) {$("#menu a").eq(0).addClass('curs'); }
</script>

</head>
</html>