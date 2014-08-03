<?php /* Smarty version Smarty-3.1.19, created on 2014-08-03 17:39:35
         compiled from "/home/Alex/public_html/123/rezina/templates/login.smarty.html" */ ?>
<?php /*%%SmartyHeaderCode:41323483653de302f446a82-73308216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2c6bccbad5dea179cfc8056a557dd32f6867557' => 
    array (
      0 => '/home/Alex/public_html/123/rezina/templates/login.smarty.html',
      1 => 1407076440,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41323483653de302f446a82-73308216',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53de302f51daf8_99615652',
  'variables' => 
  array (
    'selfPath' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53de302f51daf8_99615652')) {function content_53de302f51daf8_99615652($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include '/home/Alex/public_html/123/rezina/lib/Smarty-3.1.19/libs/plugins/function.cycle.php';
?><script src="<?php echo $_smarty_tpl->tpl_vars['selfPath']->value;?>
/js/jquery.min.js"></script>
<script type="text/javascript"></script>

<form id="login-form" name="login-form" method="post" action="login.php" onSubmit="return Log(this)">

<table class="data">
<tr class="<?php echo smarty_function_cycle(array('values'=>'A,B'),$_smarty_tpl);?>
">
    <td class="field" width="60">Username:</td>
    <td class="values"><input type="text" name="login" value="" class="input" /></td>
</tr>
<tr class="<?php echo smarty_function_cycle(array('values'=>'A,B'),$_smarty_tpl);?>
">
    <td class="field">Password:</td>
    <td class="values"><input type="password" name="password" value="" class="input" /></td>
</tr>   
<tr class="<?php echo smarty_function_cycle(array('values'=>'A,B'),$_smarty_tpl);?>
">
    <td class="field">&nbsp;</td>
    <td class="values">
        <input type="submit" name="login-action" value="Login" class="submit" />
    </td>
</tr>
</table>
</form>
<script>
function Log (f) 
{
    var url = '<?php echo $_smarty_tpl->tpl_vars['selfPath']->value;?>
/authorization';
    $.ajax({
        type: "POST",
        url: url,
        data: 'ajax=1&'+$(f).serialize(),
        success: function(txt){
            if ( txt == 'OK' )
                alert('succ')
            else
                alert(txt)
        },
        error: function(){
            alert('Ошибка сети, попробуйте позже')
        }
    });
    return false;
}
</script>
<?php }} ?>
