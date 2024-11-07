<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:30:37
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b38d39c592_82477357',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '943ca15c33759e32aa1bd866d1ea52a88f1c5bff' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/index.tpl',
      1 => 1727430256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b38d39c592_82477357 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15495287266722b38d3997f6_74276543', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2390309526722b38d399e29_82688887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_9786158636722b38d39ad65_95306953 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_15004502326722b38d39a7c6_36328440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9786158636722b38d39ad65_95306953', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_15495287266722b38d3997f6_74276543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_15495287266722b38d3997f6_74276543',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2390309526722b38d399e29_82688887',
  ),
  'page_content' => 
  array (
    0 => 'Block_15004502326722b38d39a7c6_36328440',
  ),
  'hook_home' => 
  array (
    0 => 'Block_9786158636722b38d39ad65_95306953',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2390309526722b38d399e29_82688887', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15004502326722b38d39a7c6_36328440', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
