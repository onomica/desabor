<?php
/* Smarty version 4.3.4, created on 2024-11-27 15:53:49
  from 'module:ps_facetedsearchps_facetedsearch.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674786ddaba5b4_63385515',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a1040ed0eeab6f58198f9907167c7fced628c5' => 
    array (
      0 => 'module:ps_facetedsearchps_facetedsearch.tpl',
      1 => 1708963242,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674786ddaba5b4_63385515 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- begin /home/lijpwpfm/domains/desabor.pl/public_html/themes/desabor/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php if ((isset($_smarty_tpl->tpl_vars['listing']->value['rendered_facets']))) {?>
<div id="search_filters_wrapper" class="hidden-sm-down">
  <div id="search_filter_controls" class="hidden-md-up">
      <span id="_mobile_search_filters_clear_all"></span>
      <button class="btn btn-secondary ok">
        <i class="material-icons rtl-no-flip">&#xE876;</i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

      </button>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['listing']->value['rendered_facets'];?>

</div>
<?php }?>
<!-- end /home/lijpwpfm/domains/desabor.pl/public_html/themes/desabor/modules/ps_facetedsearch/ps_facetedsearch.tpl --><?php }
}
