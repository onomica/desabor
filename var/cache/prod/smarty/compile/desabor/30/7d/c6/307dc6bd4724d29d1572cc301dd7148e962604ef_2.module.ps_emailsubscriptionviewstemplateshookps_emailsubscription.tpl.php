<?php
/* Smarty version 4.3.4, created on 2024-11-30 08:41:03
  from 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674b15efb46915_78191885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307dc6bd4724d29d1572cc301dd7148e962604ef' => 
    array (
      0 => 'module:ps_emailsubscriptionviewstemplateshookps_emailsubscription.tpl',
      1 => 1732660983,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b15efb46915_78191885 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="block_newsletter col-lg-8 col-md-12 col-sm-12" id="blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
">
  <div class="block-newsletter-wrapper">
    <div id="block-newsletter-label" class="col-md-5 col-xs-12">
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Get our latest news and special sales','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>

      <p>
        <?php if ($_smarty_tpl->tpl_vars['conditions']->value) {?>
          <p><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['conditions']->value, ENT_QUOTES, 'UTF-8');?>
</p>
        <?php }?>
      </p>
    </div>
    <div class="col-md-7 col-xs-12 newsletter-block">
      <div class="inst-mini-images">
        <a href="https://www.instagram.com/desabor_golf/profilecard/?igsh=eTNucjFvcm01bjk5">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/inst_1.JPEG" alt="Your Image">
        </a>
        <a href="https://coravinpolska.pl">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/inst_2.JPEG" alt="Your Image">
        </a>
        <a href="https://www.instagram.com/desabor_warsaw/profilecard/?igsh=MWg0cWNmNDU2ZjZ4YQ==">
          <img src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/inst_3.JPEG" alt="Your Image">
        </a>
      </div>
      <form action="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
#blockEmailSubscription_<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" method="post">
        <div class="row">
          <div class="col-xs-12">
            <div class="input-wrapper">
              <input
                name="email"
                type="email"
                value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
"
                placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                aria-labelledby="block-newsletter-label"
                required
              >
            </div>
            <input
                    class="btn btn-primary float-xs-right hidden-xs-down"
                    name="submitNewsletter"
                    type="submit"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input
                    class="btn btn-primary float-xs-right hidden-sm-up"
                    name="submitNewsletter"
                    type="submit"
                    value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
            >
            <input type="hidden" name="blockHookName" value="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['hookName']->value, ENT_QUOTES, 'UTF-8');?>
" />
            <input type="hidden" name="action" value="0">
            <div class="clearfix"></div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }
}
