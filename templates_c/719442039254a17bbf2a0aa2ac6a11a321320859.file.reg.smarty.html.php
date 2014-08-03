<?php /* Smarty version Smarty-3.1.19, created on 2014-08-03 17:21:44
         compiled from "/home/Alex/public_html/123/rezina/templates/reg.smarty.html" */ ?>
<?php /*%%SmartyHeaderCode:133424373053de45788561d6-25800291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '719442039254a17bbf2a0aa2ac6a11a321320859' => 
    array (
      0 => '/home/Alex/public_html/123/rezina/templates/reg.smarty.html',
      1 => 1406885873,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '133424373053de45788561d6-25800291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'selfPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53de4578c33d78_12721741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de4578c33d78_12721741')) {function content_53de4578c33d78_12721741($_smarty_tpl) {?><html>
<head>
<title></title>
<link rel="stylesheet" href="template/style.css" type="text/css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['selfPath']->value;?>
/js/jquery.min.js"></script>
</head>
<body>

<script type="text/javascript"></script>
<form method="post"	onSubmit="return Reg(this)">
<table align="center" id="reg_table" cellspacing="10" border="0">
	<tr>
		<td>Логин:</td>
		<td>
			<input id="login" type="text" name="login" />
		</td>
	</tr>
	<tr>
		<td>Пароль:</td>
		<td>
			<input id="pass" type="password" name="password" /><br />
		</td>
	</tr>
	<tr>
		<td>Повтор пароля:</td>
		<td>
			<input id="re_pass" type="password" name="password2" /><br />
		</td>
	</tr>
	<tr>
		<td>Email:</td>
		<td><input id="mail" type="text" name="mail" /><br />
		</td>
	</tr>
	<tr>
		<td colspan="2" align="center">
			<label><input id="no_xyz" type="checkbox" name="lic" value="ok" />
			Правила регистрации</label><br />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<input class="button" type="submit" name="GO" value="Зарегистрироваться">
		</td>
	</tr>
</table>
</form>S

<script>
function Reg (f) 
{
    var url = '<?php echo $_smarty_tpl->tpl_vars['selfPath']->value;?>
/registration';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1&'+$(f).serialize(),
        success: function(txt){
        		alert(txt)
        },
        error: function(){
            alert('Ошибка сети, попробуйте позже')
        }
    });
    return false;
}
</script>
</body>
</html><?php }} ?>
