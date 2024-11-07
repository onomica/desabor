<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:30:37
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b38d5284b6_08918228',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c836e4cccd8ce8e2903524479d52b9892001315' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl',
      1 => 1727430256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b38d5284b6_08918228 (Smarty_Internal_Template $_smarty_tpl) {
?>
<li>
  <a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'ps_emailalerts','controller'=>'account'),$_smarty_tpl ) );?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'My alerts','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

  </a>
</li>
<?php }
}
