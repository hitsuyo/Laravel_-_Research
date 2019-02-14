<?php
/* Smarty version 3.1.33, created on 2019-01-22 10:54:56
  from 'C:\xampp\htdocs\phpsmarty\demo\templates\edit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c46e870114792_58704446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75ed6a4f801176062708444eae28fda3bcd1b842' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpsmarty\\demo\\templates\\edit.tpl',
      1 => 1548150893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c46e870114792_58704446 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="post" action="edit.php">
<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['users_edit']->value['id'];?>
" />
    <table width="550" border="1">
        <tr>
            <td colspan="2" align="center"><strong>Edit Record</strong></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['users_edit']->value['name'];?>
"/></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" value="<?php echo $_smarty_tpl->tpl_vars['users_edit']->value['city'];?>
"/></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Edit Record" /></td>
        </tr>
    </table>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
