<?php
/* Smarty version 3.1.33, created on 2019-01-23 05:46:19
  from 'C:\xampp\htdocs\phpsmarty1\demo\templates\view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c47f19bf3f2a4_06150693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f827c2831d9308ef0e632686e83f37a281c1e682' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpsmarty1\\demo\\templates\\view.tpl',
      1 => 1548121696,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5c47f19bf3f2a4_06150693 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="insert.php">Add Record</a>
<table width="550" border="1">
    <tr>
        <td>Sno</td>
        <td>Name</td>
        <td>City</td>
        <td>Action</td>
    </tr>
    <?php
$__section_i_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['user']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_i_0_total = $__section_i_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if ($__section_i_0_total !== 0) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= $__section_i_0_total; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['user']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['city'];?>
</td>
        <td><a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['user']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Update</a> | <a href="view.php?del=<?php echo $_smarty_tpl->tpl_vars['user']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)]['id'];?>
">Delete</a></td>
    </tr>
    <?php
}
}
?>
</table>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
