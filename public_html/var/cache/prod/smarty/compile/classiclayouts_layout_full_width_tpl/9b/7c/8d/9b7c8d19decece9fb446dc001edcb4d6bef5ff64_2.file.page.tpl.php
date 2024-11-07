<?php
/* Smarty version 4.3.4, created on 2024-10-30 18:30:37
  from '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6722b38d3ab353_72238543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b7c8d19decece9fb446dc001edcb4d6bef5ff64' => 
    array (
      0 => '/home/lijpwpfm/domains/dev.desabor.pl/public_html/themes/classic/templates/page.tpl',
      1 => 1727430256,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6722b38d3ab353_72238543 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16712915466722b38d3a64f1_74453294', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3012490816722b38d3a7338_33223544 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_10844047356722b38d3a6a85_92074141 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3012490816722b38d3a7338_33223544', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_1447729016722b38d3a9049_68630424 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_20180954086722b38d3a96e8_09059416 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_17076445336722b38d3a8bc7_81929581 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1447729016722b38d3a9049_68630424', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20180954086722b38d3a96e8_09059416', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_13866386706722b38d3aa553_40382829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_16719417036722b38d3aa118_90622844 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13866386706722b38d3aa553_40382829', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_16712915466722b38d3a64f1_74453294 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_16712915466722b38d3a64f1_74453294',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10844047356722b38d3a6a85_92074141',
  ),
  'page_title' => 
  array (
    0 => 'Block_3012490816722b38d3a7338_33223544',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_17076445336722b38d3a8bc7_81929581',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_1447729016722b38d3a9049_68630424',
  ),
  'page_content' => 
  array (
    0 => 'Block_20180954086722b38d3a96e8_09059416',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_16719417036722b38d3aa118_90622844',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13866386706722b38d3aa553_40382829',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10844047356722b38d3a6a85_92074141', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17076445336722b38d3a8bc7_81929581', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16719417036722b38d3aa118_90622844', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
