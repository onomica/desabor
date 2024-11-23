<?php
/* Smarty version 4.3.4, created on 2024-11-22 08:43:55
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_cookie_banner/views/templates/hook/cookie_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67408a9b7417d3_83832566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12654a12af8936c29a7f6045918dc4130a463604' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_cookie_banner/views/templates/hook/cookie_banner.tpl',
      1 => 1682081612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67408a9b7417d3_83832566 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['ETS_CB_COOKIE_BANNER_CONTENT']->value) {?>
    <style>
        <?php echo $_smarty_tpl->tpl_vars['banner_css']->value;?>

    </style>
    <div class="ets_cookie_banber_block <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CB_COOKIE_BANNER_POSITION']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
        <span class="close_cookie"></span>
        <div class="ets_cookie_banner_content">
            <?php echo $_smarty_tpl->tpl_vars['ETS_CB_COOKIE_BANNER_CONTENT']->value;?>

        </div>
        <div class="ets_cookie_banner_footer">
            <a class="btn btn-primary full-right ets-cb-btn-ok" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_submit']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" ><?php if ($_smarty_tpl->tpl_vars['ETS_CB_COOKIE_BUTTON_LABEL']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CB_COOKIE_BUTTON_LABEL']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Ok','mod'=>'ets_cookie_banner'),$_smarty_tpl ) );
}?></a>
            <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CB_NOT_ACCEPT_LABEL']->value ))) {?>
                <a class="btn btn-primary full-left ets-cb-btn-not-ok" href="<?php if ($_smarty_tpl->tpl_vars['ETS_CB_NOT_ACCEPT_URL']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CB_NOT_ACCEPT_URL']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>" ><?php if ($_smarty_tpl->tpl_vars['ETS_CB_NOT_ACCEPT_LABEL']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_CB_NOT_ACCEPT_LABEL']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Not accept','mod'=>'ets_cookie_banner'),$_smarty_tpl ) );
}?></a>
            <?php }?>
        </div>
    </div>
<?php }
}
}
