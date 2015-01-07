<?php /* Smarty version Smarty-3.1.6, created on 2015-01-06 20:57:29
         compiled from "./App/Home/View/Index/index.html" */ ?>
<?php /*%%SmartyHeaderCode:111208471454abdbb9cbc574-02505184%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db147a0169032b3eebdf2a7bf7716c2299c7fad9' => 
    array (
      0 => './App/Home/View/Index/index.html',
      1 => 1420548658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111208471454abdbb9cbc574-02505184',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'email' => 0,
    'name' => 0,
    'tel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_54abdbb9d68f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54abdbb9d68f6')) {function content_54abdbb9d68f6($_smarty_tpl) {?><h1>Hell, View!</h1>
<h1><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
  <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
</h1>
<?php }} ?>