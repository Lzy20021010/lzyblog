<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<footer class="blog-footer">
    <div class="am-g am-g-fixed blog-fixed am-u-sm-centered blog-footer-padding">
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>本站简介</h3>
            <p class="am-text-sm">本站是一个简单的个人博客。<br>本站既是个人原创独立博客，也为各位访客分享一些资源<br>嗯嗯嗯，不知道说啥了。外面的世界真精彩<br><br>
                本站有自营IDC提供商————酷网互联，主要提供虚拟主机服务(www.lzy-website.win)，欢迎各站长前来选购！</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h3>友情链接</h3>
            <li><a href="http://daohang.lusongsong.com/" target="_blank">博客大全</a></li>
            <li></li>
            <li></li>
            <li></li>
            <li>...</li>
            <h3>Credits</h3>
            <p>本站持续修改完善中，如遇不便还请谅解^_^</p>
        </div>
        <div class="am-u-sm-12 am-u-md-4- am-u-lg-4">
            <h1>我们站在巨人的肩膀上</h1>
            <h3>Heroes</h3>
            <p>
            <ul>
                <li>PHP</li>
                <li>ASP.NET</li>
                <li>HTML5</li>
                <li>Linux</li>
                <li>...</li>
            </ul>
            </p>
        </div>
    </div>
    <p class="text-muted list-inline text-center" style="margin-top:1px;">
	</p>
    <p class="text-muted list-inline text-center" style="margin-top:10px;">
	© <?php echo date('Y'); ?> 
	<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a> 
	| 由 <a href="http://www.typecho.org" target="_blank">Typecho</a> / <a href="http://www.lzy-website.win" target="_blank">酷网互联</a> 强力驱动
	| <img src="<?php $this->options->themeUrl('public/images/icp.ico'); ?>" alt="工信部ICP备案号"><a href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" target="_blank">闽ICP备       号</a>
	| <img src="<?php $this->options->themeUrl('public/images/ga.png'); ?>" alt="公安机关备案号"><a href="#" target="_blank"> 闽公网安备               号</a>
	</p>
</footer>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="<?php $this->options->themeUrl('js/jquery.min.js'); ?>"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="<?php $this->options->themeUrl('js/amazeui.ie8polyfill.min.js'); ?>"></script>
<![endif]-->
<script src="<?php $this->options->themeUrl('js/amazeui.min.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
