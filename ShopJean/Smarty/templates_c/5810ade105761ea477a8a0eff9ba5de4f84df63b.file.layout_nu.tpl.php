<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:57
         compiled from "views\shop\layout_nu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8358d645b5ee2598-12395527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5810ade105761ea477a8a0eff9ba5de4f84df63b' => 
    array (
      0 => 'views\\shop\\layout_nu.tpl',
      1 => 1490242494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8358d645b5ee2598-12395527',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b600ebd6_68046569',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b600ebd6_68046569')) {function content_58d645b600ebd6_68046569($_smarty_tpl) {?><div class="page-banner-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="page-banner-menu">
          <h2 class="page-banner-title">Shop Nữ</h2>
          <ul>
            <li><a href="index.php">Trang chủ</a></li>
            <li>Shop Nữ</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="shop-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12"> <span class="shop-border"></span> </div>
      <?php echo $_smarty_tpl->getSubTemplate ("views/shop/danh_muc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"> 
        <!-- Shop-Content start --> 
        <?php echo $_smarty_tpl->getSubTemplate ("views/shop/shop_content_nu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
 
        <!-- Shop-Content end --> 
      </div>
    </div>
  </div>
</div><?php }} ?>
