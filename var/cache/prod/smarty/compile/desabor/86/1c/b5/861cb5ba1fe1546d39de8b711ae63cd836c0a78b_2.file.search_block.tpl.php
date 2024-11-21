<?php
/* Smarty version 4.3.4, created on 2024-11-21 16:37:28
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/search_block.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673fa818e68380_22694160',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '861cb5ba1fe1546d39de8b711ae63cd836c0a78b' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/search_block.tpl',
      1 => 1711728068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673fa818e68380_22694160 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="block ets_block_search <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_BLOG_RTL_CLASS']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <h4 class="title_blog title_block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search in blog','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h4>
    <div class="content_block block_content">
        <form action="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" method="post">
            <input class="form-control" type="text" name="ets_blog_search" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type in keywords...','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['search']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
            <input class="button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" />
            <span class="icon_search"></span>
        </form>
    </div>
</div>
<?php }
}
