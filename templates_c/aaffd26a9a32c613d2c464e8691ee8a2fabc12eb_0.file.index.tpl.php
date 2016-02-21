<?php
/* Smarty version 3.1.29, created on 2016-02-21 21:56:57
  from "C:\xampp\htdocs\crescendo2\crescendo\views\site\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ca2499ed8e05_30183792',
  'file_dependency' => 
  array (
    'aaffd26a9a32c613d2c464e8691ee8a2fabc12eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crescendo2\\crescendo\\views\\site\\index.tpl',
      1 => 1456086013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ca2499ed8e05_30183792 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'C:\\xampp\\htdocs\\crescendo2\\crescendo\\vendor\\smarty\\smarty\\libs\\plugins\\modifier.truncate.php';
?>
    <div class="banner">
    <ul>
        <li style="background-image: url('assets/img/crescendo.jpg');"></li>
        <li style="background-image: url('assets/img/crescendo-banner.jpg');"></li>
    </ul>
</div>
    <div class="container">
    <div class="arrow"></div>
    </div>
    <div class="container carousel">
        <h2>Latest Posts</h2>
      <div class="row">
          <?php
$_from = $_smarty_tpl->tpl_vars['posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_post_0_saved_item = isset($_smarty_tpl->tpl_vars['post']) ? $_smarty_tpl->tpl_vars['post'] : false;
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$__foreach_post_0_saved_local_item = $_smarty_tpl->tpl_vars['post'];
?>
          <a href="?r=post/view&id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
">
        <div class="col-md-3 car-item">
        <div class="ca-hover">
          <div class="carousel-img">
            <img src="assets/img/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->picture;?>
" alt="Carousel Img">
          </div>
          <div class="carousel-avatar">
              <img src="assets/img/user/<?php echo $_smarty_tpl->tpl_vars['post']->value->user->picture;?>
" alt="Carousel Img">
          </div>
          <div class="carousel-content">
            <h3><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h3>
            <p><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['post']->value->description,60,"...");?>
</p>
          </div>
        <div class="overlay"></div>
        </div>
        </div>
          </a>
          <?php
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_local_item;
}
if ($__foreach_post_0_saved_item) {
$_smarty_tpl->tpl_vars['post'] = $__foreach_post_0_saved_item;
}
?>

        
      </div>
    </div>
    <div class="row margin50"></div>
    <div class="text-inter">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>Activerecord Pattern</h3>
          <p>php-activerecord is an open source ORM library based on the ActiveRecord pattern. It aims to massively simplify the interactions with your database and eliminate the chore of hand written SQL for common operations. Unlike other ORMs, you do not need to use any code generators nor maintain mapping files for your tables. This library was inspired by Ruby on Rails' implementation and therefore borrows many of its conventions and ideas.</p>
          <div class="divider"></div>
        
        </div>
        <div class="col-md-6">
          <h3>Smarty Template Engine</h3>
          <p>Smarty is a template engine for PHP, facilitating the separation of presentation (HTML/CSS) from application logic. This implies that PHP code is application logic, and is separated from the presentation.</p>
        </div>  
      </div>
    </div>
    </div>
   
  <?php }
}
