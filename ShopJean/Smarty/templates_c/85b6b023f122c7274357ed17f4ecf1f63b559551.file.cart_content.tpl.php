<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:53
         compiled from "views\cart\cart_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2069958d645b19de113-78681889%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85b6b023f122c7274357ed17f4ecf1f63b559551' => 
    array (
      0 => 'views\\cart\\cart_content.tpl',
      1 => 1490372968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2069958d645b19de113-78681889',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ds_san_pham' => 0,
    'san_pham' => 0,
    'tien_san_pham' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b1ad6b37_91531141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b1ad6b37_91531141')) {function content_58d645b1ad6b37_91531141($_smarty_tpl) {?><div class="shopping-cart-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12" id="th_giohang"> <?php $_smarty_tpl->tpl_vars['tien_san_pham'] = new Smarty_variable(0, null, 0);?>
        <?php if (isset($_smarty_tpl->tpl_vars['ds_san_pham']->value)) {?>
        <form action="gio_hang.php" method="post">
          <div class="table-content table-responsive">
            <table>
              <thead>
                <tr>
                  <th class="product-thumbnail">Hình</th>
                  <th class="product-name">Tên sản phẩm</th>
                  <th class="product-price">Giá</th>
                  <th class="product-quantity">Số lượng</th>
                  <th class="product-remove">Hành động</th>
                </tr>
              </thead>
              <?php  $_smarty_tpl->tpl_vars['san_pham'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['san_pham']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ds_san_pham']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['san_pham']->key => $_smarty_tpl->tpl_vars['san_pham']->value) {
$_smarty_tpl->tpl_vars['san_pham']->_loop = true;
?>
              <tbody>
                <tr>
                  <td class="product-thumbnail"><a href="#"><img src="images/<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->hinh;?>
" alt="" /></a></td>
                  <td class="product-name"><a href="#"><?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ten_san_pham;?>
</a></td>
                  <td class="product-price"><span class="amount">Giá: <?php echo number_format($_smarty_tpl->tpl_vars['san_pham']->value->don_gia);?>
</span></td>
                  <td class="product-quantity"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->so_luong;?>
" id="soluonggiohang<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" name="soluonggiohang<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"/></td>
                  <input type="hidden" id="dongiagiohang<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
" value="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->don_gia;?>
" name="dongiagiohang<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"/>
                  <input type="hidden" value="<?php $_smarty_tpl->tpl_vars['tien_san_pham'] = new Smarty_variable($_smarty_tpl->tpl_vars['tien_san_pham']->value+$_smarty_tpl->tpl_vars['san_pham']->value->so_luong*$_smarty_tpl->tpl_vars['san_pham']->value->don_gia, null, 0);?>" />
                  <td class="product-remove"><i><a class="pe-7s-close btnxoa" href="javascript:void(0)" id="<?php echo $_smarty_tpl->tpl_vars['san_pham']->value->ma_san_pham;?>
"></a></i></td>
                </tr>
              </tbody>
              <?php } ?>
            </table>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="coupon">
                <input type="submit" name="btnCapnhat" value="Cập nhật giỏ hàng" />
                <input type="submit" name="btnxoagiohang" value="Xóa giỏ hàng" />
                <!-- <span>do you have coupon code</span>
                <input type="text" /> --> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5 col-md-offset-7">
              <div class="cart-totals">
                <h2>Thành tiền</h2>
                <div class="table-cart table-responsive">
                  <table>
                    <tbody class="cart-totals-list">
                      <tr class="cart-total">
                        <td align="center">Phí vận chuyển</td>
                        <td align="center"> FREE </td>
                      </tr>
                    </tbody>
                    <tbody class="cart-totals-list">
                      <tr class="cart-total">
                        <td align="center">Tổng tiền</td>
                        <td align="center"> <?php echo number_format($_smarty_tpl->tpl_vars['tien_san_pham']->value);?>
 đ</td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="we-proceed-to-checkout"> <a href="checkout.php">Thanh toán</a> </div>
                </div>
              </div>
            </div>
          </div>
        </form>
        <?php }?>
        <?php if (!isset($_smarty_tpl->tpl_vars['ds_san_pham']->value)) {?>
        <h3 align="center">Bạn chưa chọn món ăn nào chọn giỏ</h3>
        <?php }?> </div>
    </div>
  </div>
</div>
<?php }} ?>
