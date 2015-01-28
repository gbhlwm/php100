<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 15:25:44
         compiled from ".\templates\main.html" */ ?>
<?php /*%%SmartyHeaderCode:2895454c5b1df8bced1-22120880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03fcba8e5b8845a09a3a4344bb076868ec135627' => 
    array (
      0 => '.\\templates\\main.html',
      1 => 1422257143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2895454c5b1df8bced1-22120880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c5b1df907263_50738354',
  'variables' => 
  array (
    'titlename' => 0,
    'nokey' => 0,
    'id' => 0,
    'key' => 0,
    'wordkey' => 0,
    'titlename1' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c5b1df907263_50738354')) {function content_54c5b1df907263_50738354($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\modifier.capitalize.php';
if (!is_callable('smarty_mb_wordwrap')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\shared.mb_wordwrap.php';
if (!is_callable('smarty_modifier_date_format')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\modifier.date_format.php';
if (!is_callable('smarty_modifier_replace')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\modifier.replace.php';
if (!is_callable('smarty_modifier_spacify')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\modifier.spacify.php';
if (!is_callable('smarty_modifier_truncate')) include 'E:\\upupw\\htdocs\\smarty\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title><?php echo $_smarty_tpl->tpl_vars['titlename']->value;?>
</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('smarty_function.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


============================================================<br>
<h4>foreach</h4><br>
<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nokey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br>
<?php } ?>

<h4>foreach 有键值的</h4><br>
<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_smarty_tpl->tpl_vars['wordkey'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['key']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
 $_smarty_tpl->tpl_vars['wordkey']->value = $_smarty_tpl->tpl_vars['id']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['wordkey']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br>
<?php } ?>

============================================================<br>

<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['titlename']->value);?>
<p>首字母大写</p>
============================================================<br>
<?php echo smarty_mb_wordwrap($_smarty_tpl->tpl_vars['titlename']->value,10,'<br>',false);?>
<p>首字母大写</p>
============================================================<br>
<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['titlename']->value, $tmp);?>
<p>计算字符数</p>
============================================================<br>
<?php echo ($_smarty_tpl->tpl_vars['titlename']->value).("++字符串++");?>
<p>链接字符串</p>
============================================================<br>
<?php echo smarty_modifier_date_format(time(),'%y-%m-%d');?>
<p>时间显示</p>
============================================================<br>
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['titlename1']->value)===null||$tmp==='' ? '当变量为定义时的默认字符串' : $tmp);?>
<p>默认</p>
============================================================<br>
<?php echo rawurlencode($_smarty_tpl->tpl_vars['titlename']->value);?>
<p>转码有三个参数html，url，htmlall</p>
============================================================<br>
<?php echo preg_replace('!^!m',str_repeat('.',10),$_smarty_tpl->tpl_vars['titlename']->value);?>
<p>缩进，可以加参数选择缩进内容</p>
============================================================<br>
<?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['titlename']->value,'smarty','**');?>
<p>可替换不想出现的字符</p>
============================================================<br>
<?php echo smarty_modifier_spacify($_smarty_tpl->tpl_vars['titlename']->value,'_');?>
<p>插空，无参数时为空，可插入参数</p>
============================================================<br>
<?php echo sprintf('%s',$_smarty_tpl->tpl_vars['titlename']->value);?>
<p>字符串格式</p>
============================================================<br>
<?php echo preg_replace('!\s+!u', '_',$_smarty_tpl->tpl_vars['titlename']->value);?>
<p>无参数时可将单词间的空格去除，加参数是将空格替换成参数</p>
============================================================<br>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['titlename']->value,5,'..');?>
<p>截取，规定只能显示的内容长度，参数是代替多出来的内容</p>



</body>
</html><?php }} ?>
