<?php
/* Smarty version 4.3.4, created on 2024-11-30 15:45:34
  from '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/single_post.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_674b796e186243_21065731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8dc040ef72acb78868bc43c1f640729a7eec5bf1' => 
    array (
      0 => '/home/lijpwpfm/domains/desabor.pl/public_html/modules/ets_blog/views/templates/hook/single_post.tpl',
      1 => 1711728068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_674b796e186243_21065731 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    ets_blog_report_url = '<?php echo $_smarty_tpl->tpl_vars['report_url']->value;?>
';
    ets_blog_report_warning ="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Do you want to report this comment?','mod'=>'ets_blog'),$_smarty_tpl ) );?>
";
    ets_blog_error = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There was a problem while submitting your report. Try again later','mod'=>'ets_blog'),$_smarty_tpl ) );?>
";
<?php echo '</script'; ?>
>
<div class="ets_blog_layout_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_layout']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 ets-blog-wrapper-detail" itemscope itemType="http://schema.org/newsarticle">
    <div itemprop="publisher" itemtype="http://schema.org/Organization" itemscope="">
        <meta itemprop="name" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('PS_SHOP_NAME'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
        <?php if (Configuration::get('PS_LOGO')) {?>
            <div itemprop="logo" itemscope itemtype="http://schema.org/ImageObject">
                <meta itemprop="url" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_config']->value['ETS_BLOG_SHOP_URI'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
img/<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('PS_LOGO'),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                <meta itemprop="width" content="200px" />
                <meta itemprop="height" content="100px" />
            </div>
        <?php }?>
    </div> 
    <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['image']) {?>
        <div class="ets_blog_img_wrapper" itemprop="image" itemscope itemtype="http://schema.org/ImageObject">
            <div class="ets_image-single">                            
                <img title="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" itemprop="url"/>
            </div>
            <meta itemprop="width" content="600px" />
            <meta itemprop="height" content="300px" />
        </div>                        
     <?php }?>
     <div class="ets-blog-wrapper-content">
    <?php if ($_smarty_tpl->tpl_vars['blog_post']->value) {?>
        <h1 class="page-heading product-listing" itemprop="mainEntityOfPage"><span  class="title_cat" itemprop="headline"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span></h1>
        <div class="post-details">
            <div class="blog-extra">
                <div class="ets-blog-latest-toolbar">
                    <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && $_smarty_tpl->tpl_vars['everage_rating']->value) {?>                      
                        <div class="blog_rating_wrapper">                            
                            <?php if ($_smarty_tpl->tpl_vars['total_review']->value) {?>
                                <span title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" class="blog_rating_reviews">
                                     <span class="total_views"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['total_review']->value )), ENT_QUOTES, 'UTF-8');?>
</span>
                                     <span>
                                        <?php if ($_smarty_tpl->tpl_vars['total_review']->value != 1) {?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                        <?php } else { ?>
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                        <?php }?>
                                    </span>
                                </span>
                            <?php }?>
                            <div title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Average rating','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" class="ets_blog_review">
                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['everage_rating']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['everage_rating']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                    <?php if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['everage_rating']->value) {?>
                                        <div class="star star_on"></div>
                                    <?php } else { ?>
                                        <div class="star star_on_<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['i']->value-$_smarty_tpl->tpl_vars['everage_rating']->value)*call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( 10 )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                    <?php }?>
                                <?php }
}
?>
                                <?php if (Ceil($_smarty_tpl->tpl_vars['everage_rating']->value) < 5) {?>
                                    <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1) : ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = ceil($_smarty_tpl->tpl_vars['everage_rating']->value)+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                        <div class="star"></div>
                                    <?php }
}
?>
                                <?php }?>
                                <span class="ets-blog-rating-value">(<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['everage_rating']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
)</span>                                               
                            </div>
                        </div>
                    <?php }?>  
                    <?php if ($_smarty_tpl->tpl_vars['show_date']->value) {?>
                        <?php if (!$_smarty_tpl->tpl_vars['date_format']->value) {
$_smarty_tpl->_assignInScope('date_format', 'F jS Y');
}?>
                        <span class="post-date">
                            <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted on','mod'=>'ets_blog'),$_smarty_tpl ) );?>
: </span>
                            <span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['blog_post']->value['date_add'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                            <meta itemprop="datePublished" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['blog_post']->value['date_add'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                            <meta itemprop="dateModified" content="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['blog_post']->value['date_upd'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                        </span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['show_author']->value && (isset($_smarty_tpl->tpl_vars['blog_post']->value['employee'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']) {?>
                        <div class="author-block" itemprop="author" itemscope itemtype="http://schema.org/Person">
                            <span class="post-author-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</span>
                            <a itemprop="url" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <span class="post-author-name" itemprop="name">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['name'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['name']) {?>
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php } else { ?>
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['firstname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['blog_post']->value['employee']['lastname']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php }?>
                                </span>
                            </a>
                        </div>
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['link_edit'])) && $_smarty_tpl->tpl_vars['blog_post']->value['link_edit']) {?>
                        <a class="ets-block-post-edit" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['link_edit'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_blog'),$_smarty_tpl ) );?>
"><i class="fa fa-pencil" aria-hidden="true"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</a>
                    <?php }?>
                </div>        
            </div>                           
            <div class="blog_description">
                <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['description']) {?>
                    <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['description'];?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['short_description'];?>

                <?php }?>
            </div>
            <?php if (($_smarty_tpl->tpl_vars['show_tags']->value && $_smarty_tpl->tpl_vars['blog_post']->value['tags']) || ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['blog_post']->value['categories'])) {?>
            <div class="extra_tag_cat">
                <?php if ($_smarty_tpl->tpl_vars['show_tags']->value && $_smarty_tpl->tpl_vars['blog_post']->value['tags']) {?>
                    <div class="ets-blog-tags">
                        <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                        <?php $_smarty_tpl->_assignInScope('totalTag', count($_smarty_tpl->tpl_vars['blog_post']->value['tags']));?>
                        <span class="be-label">
                            <?php if ($_smarty_tpl->tpl_vars['totalTag']->value > 1) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tags','mod'=>'ets_blog'),$_smarty_tpl ) );?>

                            <?php } else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Tag','mod'=>'ets_blog'),$_smarty_tpl ) );
}?>: 
                        </span>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['tags'], 'tag');
$_smarty_tpl->tpl_vars['tag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->do_else = false;
?>
                            <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['tag']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['tag']->value['tag']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalTag']->value) {?>, <?php }?>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['show_categories']->value && $_smarty_tpl->tpl_vars['blog_post']->value['categories']) {?>
                    <div class="ets-blog-categories">
                        <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                        <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['blog_post']->value['categories']));?>                        
                        <div class="be-categories">
                            <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'ets_blog'),$_smarty_tpl ) );?>
: </span>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['cat']->value['title']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalCat']->value) {?>, <?php }?>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>
                <?php }?> 
            </div>
            <?php }?>
            <?php if ((isset($_smarty_tpl->tpl_vars['ets_blog_config']->value['ETS_BLOG_AUTHOR_INFORMATION'])) && $_smarty_tpl->tpl_vars['ets_blog_config']->value['ETS_BLOG_AUTHOR_INFORMATION'] && (isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description']) {?>
                <div class="ets-block-author ets-block-author-avata <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata']) {?> ets-block-author-avata<?php }?>">
                    <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata']) {?>
                        <div class="avata_img">
                            <img class="avata" src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['link']->value->getMediaLink(((string)(defined('_PS_ETS_BLOG_IMG_') ? constant('_PS_ETS_BLOG_IMG_') : null))."avata/".((string)(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['employee']['avata'],'htmlall','UTF-8' ))))), ENT_QUOTES, 'UTF-8');?>
"/>
                        </div>
                        
                    <?php }?>
                    <div class="ets-des-and-author">
                        <div class="ets-author-name">
                            <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['author_link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Author','mod'=>'ets_blog'),$_smarty_tpl ) );?>
: <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_post']->value['employee']['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </div>
                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'])) && $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description']) {?>
                            <div class="ets-author-description">
                                <?php echo $_smarty_tpl->tpl_vars['blog_post']->value['employee']['description'];?>

                            </div>
                        <?php }?>
                    </div>
                </div>
            <?php }?>
            <div class="ets-blog-wrapper-comment"> 
                <?php if ($_smarty_tpl->tpl_vars['allowComments']->value) {?>
                    <div class="ets_comment_form_blog">
                        <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Leave a comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h4>
                        <div class="ets-blog-form-comment" id="ets-blog-form-comment">                   
                            <?php if ($_smarty_tpl->tpl_vars['hasLoggedIn']->value || $_smarty_tpl->tpl_vars['allowGuestsComments']->value) {?>
                                <form action="#ets-blog-form-comment" method="post">
                                    <?php if ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->id)) && $_smarty_tpl->tpl_vars['comment_edit']->value->id && !$_smarty_tpl->tpl_vars['justAdded']->value) {?>
                                        <input type="hidden" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->id )), ENT_QUOTES, 'UTF-8');?>
" name="id_comment" />
                                    <?php }?>
                                    <?php if (!$_smarty_tpl->tpl_vars['hasLoggedIn']->value) {?> 
                                        <div class="blog-comment-row blog-name">
                                            <label for="bc-name"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Name','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</label>
                                            <input class="form-control" name="name_customer" id="bc-name" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['name_customer']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['name_customer']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->name)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->name,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                        </div>
                                        <div class="blog-comment-row blog-email">
                                            <label for="bc-email"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Email','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</label>
                                            <input class="form-control" name="email_customer" id="bc-email" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['email_customer']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['email_customer']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->email)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->email,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                        </div>
                                    <?php }?>
                                    <div class="blog-comment-row blog-title">
                                        <label for="bc-subject"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subject ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</label>
                                        <input class="form-control" name="subject" id="bc-subject" type="text" value="<?php if ((isset($_smarty_tpl->tpl_vars['subject']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['subject']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->subject)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->subject,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>" />
                                    </div>                                
                                    <div class="blog-comment-row blog-content-comment">
                                        <label for="bc-comment"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comment ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</label>
                                        <textarea   class="form-control" name="comment" id="bc-comment"><?php if ((isset($_smarty_tpl->tpl_vars['comment']->value))) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} elseif ((isset($_smarty_tpl->tpl_vars['comment_edit']->value->comment)) && !$_smarty_tpl->tpl_vars['justAdded']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment_edit']->value->comment,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></textarea>
                                    </div>
                                    <div class="blog-comment-row flex_space_between flex-bottom">
                                        <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value) {?>
                                            <div class="blog-rate-capcha">
                                                <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value) {?>                            
                                                    <div class="blog-rate-post">
                                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating: ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</label>
                                                        <div class="blog_rating_box">
                                                            <?php if ($_smarty_tpl->tpl_vars['default_rating']->value > 0 && $_smarty_tpl->tpl_vars['default_rating']->value < 5) {?>
                                                                <input id="blog_rating" type="hidden" name="rating" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['default_rating']->value )), ENT_QUOTES, 'UTF-8');?>
" />
                                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['default_rating']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['default_rating']->value)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                    <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star star_on blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                <?php }
}
?>
                                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['default_rating']->value+1) : $_smarty_tpl->tpl_vars['default_rating']->value+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['default_rating']->value+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                    <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                <?php }
}
?>
                                                            <?php } else { ?>
                                                                <input id="blog_rating" type="hidden" name="rating" value="5" />
                                                                <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - (1) : 1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                    <div rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
" class="star star_on blog_rating_star blog_rating_star_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['i']->value )), ENT_QUOTES, 'UTF-8');?>
"></div>
                                                                <?php }
}
?>
                                                            <?php }?>
                                                        </div>
                                                    </div>
                                                <?php }?>
                                            </div>
                                        <?php }?>   
                                        <div class="blog-submit-form">                                                    
                                            <?php if (!Configuration::get('ETS_BLOG_DISPLAY_GDPR_NOTIFICATION')) {?>
                                                <div class="blog-submit">
                                                    <input class="button" type="submit" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit Comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" name="bcsubmit" />
                                                </div>
                                            <?php }?>   
                                        </div>            
                                        <?php if ((isset($_smarty_tpl->tpl_vars['blog_errors']->value)) && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && $_smarty_tpl->tpl_vars['blog_errors']->value && !(isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                            <div class="alert alert-danger ets_alert-danger">
                                                <button class="close" type="button" data-dismiss="alert">×</button>
                                                <ul>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                        <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </ul>
                                            </div>
                                        <?php }?>                                            
                                    </div> 
                                    <div class="blog-comment-row">                                            
                                        <div class="blog-submit-form">
                                            <?php if (Configuration::get('ETS_BLOG_DISPLAY_GDPR_NOTIFICATION')) {?>
                                                <label for="check_gpdr">
                                                    <input id="check_gpdr" type="checkbox" type="check_gpdr" value="1"/>&nbsp;<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['text_gdpr']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                    <a href="<?php if (Configuration::get('ETS_BLOG_TEXT_GDPR_NOTIFICATION_URL_MORE',$_smarty_tpl->tpl_vars['id_lang']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('ETS_BLOG_TEXT_GDPR_NOTIFICATION_URL_MORE',$_smarty_tpl->tpl_vars['id_lang']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>#<?php }?>"><?php if (Configuration::get('ETS_BLOG_TEXT_GDPR_NOTIFICATION_TEXT_MORE',$_smarty_tpl->tpl_vars['id_lang']->value)) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Configuration::get('ETS_BLOG_TEXT_GDPR_NOTIFICATION_TEXT_MORE',$_smarty_tpl->tpl_vars['id_lang']->value),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View more details here','mod'=>'ets_blog'),$_smarty_tpl ) );
}?></a>
                                                </label>
                                                <div class="blog-submit">
                                                    <input class="button" type="submit" disabled="disabled" value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Submit Comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
" name="bcsubmit" />
                                                </div>
                                            <?php }?>   
                                        </div>  
                                    </div>                                            
                                    <?php if ((isset($_smarty_tpl->tpl_vars['blog_success']->value)) && $_smarty_tpl->tpl_vars['blog_success']->value) {?>
                                        <p class="alert alert-success ets_alert-success">
                                        <button class="close" type="button" data-dismiss="alert">×</button>    
                                        <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_success']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        </p>
                                    <?php }?>
                                </form>
                            <?php } else { ?>
                                <p class="alert alert-warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to post comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</p>
                            <?php }?>
                        </div> 
                    </div>
                    <?php if (count($_smarty_tpl->tpl_vars['comments']->value)) {?>
                        <div class="ets_blog-comments-list">
                        <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h4>
                            <ul id="blog-comments-list" class="blog-comments-list">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comments']->value, 'comment');
$_smarty_tpl->tpl_vars['comment']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
$_smarty_tpl->tpl_vars['comment']->do_else = false;
?>
                                        <li id="blog_comment_line_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" class="blog-comment-line"  >
                                                                                                        
                                        <div class="ets-blog-detail-comment">
                                            <h5 class="comment-subject"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['subject'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</h5>
                                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['name']) {?><span class="comment-by"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'By: ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
<b><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['comment']->value['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</b></span><?php }?>
                                            <span class="comment-time"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ets_blog'),$_smarty_tpl ) );?>
 </span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['comment']->value['date_add'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                            <?php if ($_smarty_tpl->tpl_vars['allow_rating']->value && $_smarty_tpl->tpl_vars['comment']->value['rating'] > 0) {?>
                                                <div class="comment-rating" >
                                                    <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Rating: ','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</span>
                                                    <div class="ets_blog_review">
                                                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? $_smarty_tpl->tpl_vars['comment']->value['rating']+1 - (1) : 1-($_smarty_tpl->tpl_vars['comment']->value['rating'])+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                            <div class="star star_on"></div>
                                                        <?php }
}
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['comment']->value['rating'] < 5) {?>
                                                            <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 5+1 - ($_smarty_tpl->tpl_vars['comment']->value['rating']+1) : $_smarty_tpl->tpl_vars['comment']->value['rating']+1-(5)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['comment']->value['rating']+1, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration === 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration === $_smarty_tpl->tpl_vars['i']->total;?>
                                                                <div class="star"></div>
                                                            <?php }
}
?>
                                                        <?php }?> 
                                                        <span class="ets-blog-everage-rating"> <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( number_format((float)$_smarty_tpl->tpl_vars['comment']->value['rating'],1,'.',''),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>                                     
                                                    </div>
                                                </div>
                                            <?php }?> 
                                            <div class="ets-block-report-reply-edit-delete">
                                                <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['reply'])) && $_smarty_tpl->tpl_vars['comment']->value['reply']) {?>
                                                    <span class="ets-block-comment-reply comment-reply-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" rel="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-reply" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reply','mod'=>'ets_blog'),$_smarty_tpl ) );?>
"></i></span>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['url_edit']))) {?>
                                                    <a class="ets-block-comment-edit comment-edit-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['url_edit'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-pencil" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit this comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
"></i></a>
                                                <?php }?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['url_delete']))) {?>
                                                    <a class="ets-block-comment-delete delete-edit-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['url_delete'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><i class="fa fa-trash" aria-hidden="true" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete this comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
"></i></a>
                                                <?php }?>
                                            </div>
                                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['comment']) {?><p class="comment-content"><?php echo $_smarty_tpl->tpl_vars['comment']->value['comment'];?>
</p><?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['comment']->value['replies']) {?>
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['comment']->value['replies'], 'reply');
$_smarty_tpl->tpl_vars['reply']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['reply']->value) {
$_smarty_tpl->tpl_vars['reply']->do_else = false;
?>
                                                    <p class="comment-reply">
                                                        <span class="ets-blog-replied-by">
                                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Replied by: ','mod'=>'ets_blog'),$_smarty_tpl ) );?>

                                                            <span class="ets-blog-replied-by-name">
                                                                <?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['reply']->value['name']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                            </span>              
                                                        </span>
                                                        <span class="comment-time"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'On','mod'=>'ets_blog'),$_smarty_tpl ) );?>
 </span><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['reply']->value['date_add'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                                        <span class="ets-blog-reply-content">
                                                            <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'nl2br' ][ 0 ], array( $_smarty_tpl->tpl_vars['reply']->value['reply'] ));?>

                                                        </span>
                                                    </p>
                                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                            <?php }?>
                                            <?php if ((isset($_smarty_tpl->tpl_vars['replyCommentsave']->value)) && $_smarty_tpl->tpl_vars['replyCommentsave']->value == $_smarty_tpl->tpl_vars['comment']->value['id_comment']) {?>
                                                <?php if ((isset($_smarty_tpl->tpl_vars['replyCommentsaveok']->value)) && $_smarty_tpl->tpl_vars['blog_success']->value) {?>
                                                    <p class="alert alert-success ets_alert-success">
                                                    <button class="close" type="button" data-dismiss="alert">×</button><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_success']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                                    </p>
                                                <?php } else { ?>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['comment']->value['reply'])) && $_smarty_tpl->tpl_vars['comment']->value['reply']) {?>
                                                        <form class="form_reply_comment" action="#blog_comment_line_<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" method="post">
                                                            <?php if ($_smarty_tpl->tpl_vars['blog_errors']->value && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && (isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                                                <div class="alert alert-danger ets_alert-danger">
                                                                    <button class="close" type="button" data-dismiss="alert">×</button>
                                                                    <ul >
                                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                                            <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                    </ul>
                                                                </div>
                                                            <?php }?>
                                                            <input type="hidden" name="replyCommentsave" value="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['comment']->value['id_comment'] )), ENT_QUOTES, 'UTF-8');?>
" />
                                                            <textarea name="reply_comwent_text" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Enter your message...','mod'=>'ets_blog'),$_smarty_tpl ) );?>
"><?php echo $_smarty_tpl->tpl_vars['reply_comwent_text']->value;?>
</textarea>
                                                            <input type="submit" value="Send" /> 
                                                        </form>
                                                    <?php } else { ?>
                                                        <?php if ($_smarty_tpl->tpl_vars['blog_errors']->value && is_array($_smarty_tpl->tpl_vars['blog_errors']->value) && (isset($_smarty_tpl->tpl_vars['replyCommentsave']->value))) {?>
                                                            <div class="alert alert-danger ets_alert-danger">
                                                                <button class="close" type="button" data-dismiss="alert">×</button>
                                                                <ul >
                                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_errors']->value, 'error');
$_smarty_tpl->tpl_vars['error']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->do_else = false;
?>
                                                                        <li><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['error']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</li>
                                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                                </ul>
                                                            </div>
                                                        <?php }?>
                                                    <?php }?>
                                                <?php }?>
                                            <?php }?>
                                        </div>
                                        </li>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </ul> 
                            <?php if ((isset($_smarty_tpl->tpl_vars['link_view_all_comment']->value))) {?>
                                <div class="blog_view_all_button">
                                    <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link_view_all_comment']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="view_all_link"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'View all comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</a>
                                </div>
                            <?php }?>
                        </div>               
                    <?php }?>
                <?php }?>
            </div>            
        </div>
        <?php } else { ?>
            <p class="warning"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No posts found','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</p>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['blog_post']->value['related_posts']) {?>
            <div class="ets-blog-related-posts ets_blog_related_posts_type_<?php if ($_smarty_tpl->tpl_vars['blog_related_posts_type']->value) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['blog_related_posts_type']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else { ?>default<?php }?>">
                <h4 class="title_blog"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Related posts','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</h4>
                <div class="ets-blog-related-posts-wrapper">
                    <?php $_smarty_tpl->_assignInScope('post_row', 3);?>
                    <ul class="ets-blog-related-posts-list dt-<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_row']->value )), ENT_QUOTES, 'UTF-8');?>
">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['blog_post']->value['related_posts'], 'rpost');
$_smarty_tpl->tpl_vars['rpost']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['rpost']->value) {
$_smarty_tpl->tpl_vars['rpost']->do_else = false;
?>                                            
                            <li class="ets-blog-related-posts-list-li col-xs-12 col-sm-4 col-lg-<?php echo htmlspecialchars((string) 12/call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['post_row']->value )), ENT_QUOTES, 'UTF-8');?>
 thumbnail-container">
                                <?php if ($_smarty_tpl->tpl_vars['rpost']->value['thumb']) {?>
                                    <a class="ets_item_img" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                                        <img src="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['thumb'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" />
                                    </a>                                                
                                <?php }?>
                                <a class="ets_title_block" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['title'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a>
                                <div class="ets-blog-sidear-post-meta">
                                    <?php if ($_smarty_tpl->tpl_vars['rpost']->value['categories']) {?>
                                        <?php $_smarty_tpl->_assignInScope('ik', 0);?>
                                        <?php $_smarty_tpl->_assignInScope('totalCat', count($_smarty_tpl->tpl_vars['rpost']->value['categories']));?>                        
                                        <div class="ets-blog-categories">
                                            <span class="be-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posted in','mod'=>'ets_blog'),$_smarty_tpl ) );?>
: </span>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rpost']->value['categories'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
                                                <?php $_smarty_tpl->_assignInScope('ik', $_smarty_tpl->tpl_vars['ik']->value+1);?>                                        
                                                <a href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cat']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( ucfirst($_smarty_tpl->tpl_vars['cat']->value['title']),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</a><?php if ($_smarty_tpl->tpl_vars['ik']->value < $_smarty_tpl->tpl_vars['totalCat']->value) {?>, <?php }?>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </div>
                                    <?php }?>
                                    <span class="post-date"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( date($_smarty_tpl->tpl_vars['date_format']->value,strtotime($_smarty_tpl->tpl_vars['rpost']->value['date_add'])),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['allowComments']->value || $_smarty_tpl->tpl_vars['show_views']->value || $_smarty_tpl->tpl_vars['allow_like']->value) {?>
                                    <div class="ets-blog-latest-toolbar">                                         
                                        <?php if ($_smarty_tpl->tpl_vars['allowComments']->value) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['rpost']->value['comments_num'] > 0) {?>                                                                
                                                <span class="ets-blog-latest-toolbar-comments"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['comments_num'] )), ENT_QUOTES, 'UTF-8');?>

                                                    <?php if ($_smarty_tpl->tpl_vars['rpost']->value['comments_num'] != 1) {?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comments','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</span>
                                                    <?php } else { ?>
                                                        <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'comment','mod'=>'ets_blog'),$_smarty_tpl ) );?>
</span>
                                                    <?php }?>
                                                </span> 
                                            <?php }?>                                                                    
                                        <?php }?>
                                    </div>
                                <?php }?> 
                                <?php if ($_smarty_tpl->tpl_vars['display_desc']->value) {?>
                                    <?php if ($_smarty_tpl->tpl_vars['rpost']->value['short_description']) {?>
                                        <div class="blog_description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['rpost']->value['short_description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['rpost']->value['description']) {?>
                                        <div class="blog_description"><?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( strip_tags((string) $_smarty_tpl->tpl_vars['rpost']->value['description']),120,'...' )),'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                                    <?php }?>
                                <?php }?>
                                 <a class="read_more" href="<?php echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['rpost']->value['link'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['ets_blog_config']->value['ETS_BLOG_TEXT_READMORE']) {
echo htmlspecialchars((string) call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['ets_blog_config']->value['ETS_BLOG_TEXT_READMORE'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Read More','mod'=>'ets_blog'),$_smarty_tpl ) );
}?></a>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>                        
                    </ul>
                </div>
            </div>
        <?php }?>
    </div>
</div><?php }
}
