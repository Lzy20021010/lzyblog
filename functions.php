<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
function themeConfig($form) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $form->addInput($logoUrl);

    $avatarUrl = new Typecho_Widget_Helper_Form_Element_Text('avatarUrl', NULL, NULL, _t('头像图片地址'), _t('在这里输入头像链接,带http:// ,不填则使用主题自带的图片'));
    $form->addInput($avatarUrl);

    $authorInfo = new Typecho_Widget_Helper_Form_Element_Text('authorInfo', NULL, NULL, _t('头像下方简介'), _t('用于头像下方显示的一段文字'));
    $form->addInput($authorInfo);

    $socialQQ = new Typecho_Widget_Helper_Form_Element_Text('socialQQ', NULL, NULL, _t('QQ'), _t('请输入QQ号码'));
    $form->addInput($socialQQ);

    $socialGithub = new Typecho_Widget_Helper_Form_Element_Text('socialGithub', NULL, NULL, _t('Github'), _t('请输入 Github 地址'));
    $form->addInput($socialGithub);

    $socialWeibo = new Typecho_Widget_Helper_Form_Element_Text('socialWeibo', NULL, NULL, _t('Weibo'), _t('请输入 新浪微博 地址'));
    $form->addInput($socialWeibo);
	
    $socialWeixin = new Typecho_Widget_Helper_Form_Element_Text('socialWeixin', NULL, NULL, _t('Weixin'), _t('请输入 微信/微信公众号 地址'));
    $form->addInput($socialWeixin);

}

function img_postthemb($thiz,$default_img){
    $content = $thiz->content;
    $ret = preg_match("/\<img.*?src\=\"(.*?)\"[^>]*>/i", $content, $thumbUrl);
    if($ret === 1 && count($thumbUrl) == 2){
        return $thumbUrl[1];
    }else{
        return $default_img;
    }
}

