<?php
/* Smarty version 3.1.29, created on 2016-02-21 22:14:01
  from "C:\xampp\htdocs\crescendo2\crescendo\views\post\view.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56ca289956c381_18402897',
  'file_dependency' => 
  array (
    'f30d52f3d32cd9c1426b5c58b070772bd5c36729' => 
    array (
      0 => 'C:\\xampp\\htdocs\\crescendo2\\crescendo\\views\\post\\view.tpl',
      1 => 1456009393,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56ca289956c381_18402897 ($_smarty_tpl) {
?>
<div class="row">
    <div class="container">
        <h1 class="text-center"><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h1>
        <div class="col-md-6">
            <img class="img-responsive" src="assets/img/post/<?php echo $_smarty_tpl->tpl_vars['post']->value->picture;?>
">
        </div>
        <div class="col-md-6">
            <small><?php echo $_smarty_tpl->tpl_vars['post']->value->updated_at;?>
 author <?php echo $_smarty_tpl->tpl_vars['post']->value->user->username;?>
</small>
            <?php echo $_smarty_tpl->tpl_vars['post']->value->description;?>

        </div>
        <?php if ($_SESSION['id'] == $_smarty_tpl->tpl_vars['post']->value->user->id) {?>
            <div class="row">
                <a href="?r=post/update&id=<?php echo $_smarty_tpl->tpl_vars['post']->value->id;?>
" class="btn btn-default" style="margin-left: 15px;">EDIT</a>
            </div>
        <?php }?>
    </div>
</div>
<div class="margin50"></div><?php }
}
