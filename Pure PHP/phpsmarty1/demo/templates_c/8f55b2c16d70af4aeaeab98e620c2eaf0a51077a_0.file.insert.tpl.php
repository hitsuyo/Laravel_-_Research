<?php
/* Smarty version 3.1.33, created on 2019-01-23 09:16:25
  from 'C:\xampp\htdocs\phpsmarty1\demo\templates\insert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c4822d9327e08_06832575',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f55b2c16d70af4aeaeab98e620c2eaf0a51077a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpsmarty1\\demo\\templates\\insert.tpl',
      1 => 1548060139,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c4822d9327e08_06832575 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="post" action="insert.php">
    <table width="550" border="1">
        <tr>
            <td colspan="2" align="center"><strong>Insert Record</strong></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" /></td>
        </tr>
        <tr>
            <td>City</td>
            <td><input type="text" name="city" /></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td><input type="submit" name="submit" value="Add Record" /></td>
        </tr>
    </table>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
