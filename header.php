<?php 
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
?>
<!DOCTYPE html>
<html lang="zh-CN">
  <head>
	<meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="<?php $this->options->themeUrl('images/favicon.png'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta charset="utf-8">
	<meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <meta name="renderer" content="webkit">
    <title><?php $this->options->title(); ?><?php $this->archiveTitle(); ?></title>
    <!-- Bootstrap -->
    <link href="<?php $this->options->themeUrl('public/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<link href="<?php $this->options->themeUrl('public/css/index.css'); ?>" rel="stylesheet">
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php $this->options->themeUrl('public/js/jquery.js'); ?>"</script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php $this->options->themeUrl('public/js/bootstrap.min.js'); ?></script>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/publicpond.js/1.4.2/publicpond.min.js"></script>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/amazeui.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('public/css/app.css'); ?>">
	<?php $this->header(); ?>
  </head>
  <body>
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
					<span class="sr-only">切换导航</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<img class="img-responsive" style="margin-top:5px; alt="<?php $this->options->title() ?>" src="<?php $this->options->logoUrl ? $this->options->logoUrl : $this->options->themeUrl('public/images/logo.png'); ?>">
				</div>
				<div class="collapse navbar-collapse" id="navbar-collapse">
				  <ul class="nav navbar-nav">
					<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
					<?php $this->widget('Widget_Contents_Page_List')
					->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					<li><a href="<?php $this->options->feedUrl(); ?>"><?php _e('RSS'); ?></a></li>
				  </ul>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group">
					<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					<label for="s" class="sr-only"><?php _e('搜索关键字'); ?></label>
					<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
					</div>
				</form>
				</div>
				</div><!--/.nav-collapse -->
		</nav>
</body>
</html>