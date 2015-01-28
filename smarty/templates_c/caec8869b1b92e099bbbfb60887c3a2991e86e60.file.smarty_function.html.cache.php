<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-01-26 16:52:45
         compiled from ".\templates\smarty_function.html" */ ?>
<?php /*%%SmartyHeaderCode:3008354c6005d3285f0-02914532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'caec8869b1b92e099bbbfb60887c3a2991e86e60' => 
    array (
      0 => '.\\templates\\smarty_function.html',
      1 => 1422262336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3008354c6005d3285f0-02914532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nokey' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54c6005d34b881_90577873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54c6005d34b881_90577873')) {function content_54c6005d34b881_90577873($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>

smarty内置函数<br>
{foreach}{/foreach}<br>
{literal}{/literal}<br>
{strip}{/strip}<br>

<h4>smarty内置方法foreach</h4><br>
<?php  $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['id']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nokey']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['id']->key => $_smarty_tpl->tpl_vars['id']->value) {
$_smarty_tpl->tpl_vars['id']->_loop = true;
?>
<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
<br>
<?php } ?>


</body>
</html><?php }} ?>
