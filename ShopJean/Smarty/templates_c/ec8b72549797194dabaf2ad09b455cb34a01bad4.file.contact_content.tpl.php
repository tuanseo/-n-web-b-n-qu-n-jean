<?php /* Smarty version Smarty-3.1.18, created on 2017-03-25 11:25:55
         compiled from "views\contact\contact_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:991058d645b32b2929-99030039%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec8b72549797194dabaf2ad09b455cb34a01bad4' => 
    array (
      0 => 'views\\contact\\contact_content.tpl',
      1 => 1490242520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '991058d645b32b2929-99030039',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_58d645b32b59f2_68260551',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d645b32b59f2_68260551')) {function content_58d645b32b59f2_68260551($_smarty_tpl) {?><div class="contact-area margin-bottom-80">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12"> 
        <!-- widget-brand start -->
        <!-- widget-brand end --> 
        <!-- widget-top-brand start --> 
        <!-- widget-top-brand end --> 
        <!-- widget sidebar-banner start --> 
        <!-- widget sidebar-banner start --> 
      </div>
      <div class="col-md-9 col-sm-8 col-xs-12"> 
        <!-- Start Map area -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.5181013957294!2d106.78493111477367!3d10.848142660832297!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752772b245dff1%3A0xb838977f3d419d!2zSOG7jWMgVmnhu4duIEPDtG5nIE5naOG7hyBCxrB1IENow61uaCBWaeG7hW4gVGjDtG5nIEPGoSBT4bufIDI!5e0!3m2!1svi!2s!4v1489416512351" width="800" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
        <!-- End Map area -->
        <div class="row"> 
          <!-- contact-info start -->
          <!-- contact-info end -->
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="contact-form">
              <h3><i class="fa fa-envelope-o"></i>Gửi tin nhắn</h3>
              <div class="row">
                <form action="gui_mail.php" method="POST">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input name="name" type="text" placeholder="Tên (required)" />
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <input name="email" type="email" placeholder="Email (required)" />
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <input name="subject" type="text" placeholder="Tiêu đề" />
                  </div>
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Nội dung"></textarea>
                    <input type="submit" value="Gửi" name="th_gui"/>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
