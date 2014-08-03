<?php /* Smarty version Smarty-3.1.19, created on 2014-08-03 17:39:33
         compiled from "/home/Alex/public_html/123/rezina/templates/page.smarty.html" */ ?>
<?php /*%%SmartyHeaderCode:76293479153de25b03b1147-89435768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '25216256316b0b353e9e427ad547f472545a5c6f' => 
    array (
      0 => '/home/Alex/public_html/123/rezina/templates/page.smarty.html',
      1 => 1407076359,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76293479153de25b03b1147-89435768',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53de25b044c8a7_88996774',
  'variables' => 
  array (
    'user' => 0,
    'data' => 0,
    'pages' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de25b044c8a7_88996774')) {function content_53de25b044c8a7_88996774($_smarty_tpl) {?><div class="b-acc-form">
	<div class="b-gf-row">
    	<a href="exit">Выход</a>
    	<p> Добро пожаловать <?php echo $_smarty_tpl->tpl_vars['user']->value['login'];?>
 </p>	                            
		<form method="get"> 
		 	<table>
<?php  $_smarty_tpl->tpl_vars['pages'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pages']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['pageQnt']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pages']->key => $_smarty_tpl->tpl_vars['pages']->value) {
$_smarty_tpl->tpl_vars['pages']->_loop = true;
?>
		    	<a href="page?page=<?php echo $_smarty_tpl->tpl_vars['pages']->value;?>
&name=<?php echo $_smarty_tpl->tpl_vars['data']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value+1;?>
 </a>
<?php } ?>
		        <td>
		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductID">ID</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductID'];?>
</p>
<?php } ?>
				<td>       	

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductBrand">Brand</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductBrand'];?>
</p>
<?php } ?>
				</td>
				<td>

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductModel">Model</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductModel'];?>
</p>
<?php } ?>
				</td>
				<td> 

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductProf">Prof</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductProf'];?>
</p>
<?php } ?>
				</td>
				<td> 

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductWidth">Width</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductWidth'];?>
</p>
<?php } ?>
				</td>
				<td>

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductRad">Rad</a>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductRad'];?>
</p>
<?php } ?>
				</td>
				<td>

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductSpeed">Speed</a>       	
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductSpeed'];?>
</p>
<?php } ?>
				</td>
				<td>

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductEnc">Enc</a>	       	
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductEnc'];?>
</p>
<?php } ?>
				</td>
				<td> 
		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductPrice">Price</a>      	
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductPrice'];?>
</p>
<?php } ?>
				</td>
				<td>

		        <a href="page?page=<?php echo $_smarty_tpl->tpl_vars['data']->value['page'];?>
&name=ProductAvail">Avail</a>       	
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
				   <p><?php echo $_smarty_tpl->tpl_vars['item']->value['ProductAvail'];?>
</p>
<?php } ?>
				</td>
			</table>
		</form>
	</div>
</div><?php }} ?>
