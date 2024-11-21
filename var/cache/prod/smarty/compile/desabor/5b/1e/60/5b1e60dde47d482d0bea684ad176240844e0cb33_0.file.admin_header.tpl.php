<?php
/* Smarty version 4.3.4, created on 2024-11-21 16:39:35
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/admin_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_673fa897b95db7_98285111',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b1e60dde47d482d0bea684ad176240844e0cb33' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/admin_header.tpl',
      1 => 1711728068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_673fa897b95db7_98285111 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
var ets_blog_link_ajax_comment='<?php echo $_smarty_tpl->tpl_vars['ets_blog_link_ajax_comment']->value;?>
';
$(document).ready(function(){
    $.ajax({
        url: ets_blog_link_ajax_comment,
        data: 'action=getCountCommentsNoViewed',
        type: 'post',
        dataType: 'json',                
        success: function(json){ 
            if(parseInt(json.count) >0)
            {
                if($('#subtab-AdminEtsBlogComment span').length)
                    $('#subtab-AdminEtsBlogComment span').append('<span class="count_messages ">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminEtsBlogComment a').append('<span class="count_messages ">'+json.count+'</span>');
            }
            else
            {
                if($('#subtab-AdminEtsBlogComment span').length)
                    $('#subtab-AdminEtsBlogComment span').append('<span class="count_messages hide">'+json.count+'</span>'); 
                else
                    $('#subtab-AdminEtsBlogComment a').append('<span class="count_messages hide">'+json.count+'</span>');
            }
                                                              
        },
    });
});
<?php echo '</script'; ?>
><?php }
}
