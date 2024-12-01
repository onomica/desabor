<?php
/* Smarty version 4.3.4, created on 2024-11-30 08:41:03
  from 'module:ets_ageverificationviewstemplatesfrontageverification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674b15efc14266_83423801',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f8d837e2462b57a1905479707db0112c9f5dbbef' => 
    array (
      0 => 'module:ets_ageverificationviewstemplatesfrontageverification.tpl',
      1 => 1731857044,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b15efc14266_83423801 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="ets_av_overload active">
    <div class="ets_av_table">
        <div class="ets_av_table_cell">
            <div class="ets_av_content_popup">
                <div class="panel ets_av_ageverification<?php if (!empty($_smarty_tpl->tpl_vars['positionAt']->value)) {?> ets_av_position_at_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['positionAt']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>">
                    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_ICON']->value )) !== '') {?>
                        <img class="img-thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['ETS_AV_ICON_URL']->value;?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_TITLE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_TITLE']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" style="max-width: 150px">
                    <?php }?>
                    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_TITLE']->value )) !== '') {?>
                        <h4 class="ets_av_title"><?php echo $_smarty_tpl->tpl_vars['ETS_AV_TITLE']->value;?>
</h4>
                    <?php }?>
                    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_DESCRIPTION']->value )) !== '') {?>
                        <div class="ets_av_desc"><?php echo $_smarty_tpl->tpl_vars['ETS_AV_DESCRIPTION']->value;?>
</div>
                    <?php }?>
                    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_VERIFICATION_TYPE']->value )) == 'birthdate' || (isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value) {?>
                        <div class="ets_av_verification_type birthdate <?php if ((isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_VERIFICATION_TYPE']->value )) == 'birthdate') {?> active<?php }?>">
                            <form id="ets_av_age_verification" class="defaultForm form-horizontal" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" enctype="multipart/form-data" type="POST">
                                <div class="fieldset">
                                    <div class="heading">
                                        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your date of birth','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</h4>
                                    </div>
                                    <div class="wrapper">
                                        <?php if ($_smarty_tpl->tpl_vars['months']->value) {?>
                                            <label for="month">
                                                <span class="title_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Month','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</span>
                                                <select id="month" name="month">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['months']->value, 'month', false, 'id');
$_smarty_tpl->tpl_vars['month']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->do_else = false;
?>
                                                        <option value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['month']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </label>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['days']->value) {?>
                                            <label for="day">
                                                <span class="title_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Day','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</span>
                                                <select id="day" name="day">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['days']->value, 'day');
$_smarty_tpl->tpl_vars['day']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['day']->value) {
$_smarty_tpl->tpl_vars['day']->do_else = false;
?>
                                                        <option value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['day']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['day']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </label>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['years']->value) {?>
                                            <label for="year">
                                                <span class="title_label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Year','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</span>
                                                <select id="year" name="year">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['years']->value, 'year');
$_smarty_tpl->tpl_vars['year']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->do_else = false;
?>
                                                        <option value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['year']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</option>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </select>
                                            </label>
                                        <?php }?>
                                    </div>
                                <div class="error_box"></div>
                                <div class="footer">
                                    <a class="btn btn-default ets_av_cancel"  href="https://www.google.com/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Exit','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</a>
                                    <button class="btn btn-primary ets_av_primary" name="ets_av_submit"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <?php }?>
                    <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_VERIFICATION_TYPE']->value )) == 'their_self' || (isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value) {?>
                        <div class="ets_av_verification_type their_self footer ets_av_footer<?php if ((isset($_smarty_tpl->tpl_vars['admin']->value)) && $_smarty_tpl->tpl_vars['admin']->value && call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'trim' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_VERIFICATION_TYPE']->value )) == 'their_self') {?> active<?php }?>">
                            <a class="btn btn-default ets_av_cancel" href="https://www.google.com/"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No, I\'m under 18','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</a>
                            <a id="ets_av_their_self" class="btn btn-primary ets_av_primary ets_av_submit" href="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes, I am 18+','mod'=>'ets_ageverification'),$_smarty_tpl ) );?>
</a>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<style id="ets_av_background_and_color">
    .ets_av_primary {
        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_LABEL_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_BACKGROUND_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_BACKGROUND_COLOR']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
    .ets_av_primary:hover {
        color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_LABEL_HOVER']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        background-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_BACKGROUND_HOVER']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
        border-color: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ETS_AV_SUBMIT_BACKGROUND_HOVER']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 !important;
    }
</style><?php }
}
