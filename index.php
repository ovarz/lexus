<?php require ('inc/base.php')?>
<?php require ($_SERVER['LEXUS'].'inc/meta.php')?>
<?php require ($_SERVER['LEXUS'].'inc/sample.php')?>
<?php require ($_SERVER['LEXUS'].'inc/header.php')?>
<style><?php require ($_SERVER['LEXUS'].'css/home.css')?></style>
<div class="rancak-container">



  <section class="section-container main-slideshow">
    slideshow
  </section>



  <section class="section-container lexus-product">
    <div class="section-title">
	  <div class="section-title-label">Lexus Product</div>
	  <a aria-label="Link_Title" title="Link_Title" class="section-title-link" href="">
	    See All
	  </a>
	</div>
	<div class="lexus-product-container">
      <?php 
        $product_array = array();
        $product_array[]=array('product_type'=>'electric','product_image'=>'1','product_name'=>'Electrified');
        $product_array[]=array('product_type'=>'default','product_image'=>'2','product_name'=>'SUV');
        $product_array[]=array('product_type'=>'default','product_image'=>'3','product_name'=>'Sedan');
        $product_array[]=array('product_type'=>'default','product_image'=>'4','product_name'=>'Coupe');
        $product_array[]=array('product_type'=>'default','product_image'=>'5','product_name'=>'MPV');
        foreach($product_array as $product_list){
      ?>
        <a aria-label="Link_Title" title="Link_Title" class="lexus-product-box lpb-<?php echo($product_list['product_type'])?>" href="">
          <div class="lpb-name"><?php echo($product_list['product_name'])?></div>
		  <div class="lpb-frame"></div>
          <div class="lpb-car flex_ori thumb-loading">
            <img alt="img_title" class="lazyload" data-original="img/car/car-<?php echo($product_list['product_image'])?>.png" />
          </div>
        </a>
	  <?php } ?>
	</div>
  </section>



  <section class="section-container home-menu">
	<div class="content-container home-menu-container">
      <?php 
        $homemenu_array = array();
        $homemenu_array[]=array('product_title'=>'Finance Calculator','product_icon'=>'1','product_desc'=>'Personalized your own Lexus');
        $homemenu_array[]=array('product_title'=>'Mobile Stockboard','product_icon'=>'2','product_desc'=>'Monitor Unit Availability');
        $homemenu_array[]=array('product_title'=>'Learning Material','product_icon'=>'3','product_desc'=>'To Lexus Inspire');
        $homemenu_array[]=array('product_title'=>'LMS','product_icon'=>'4','product_desc'=>'Manage Your Leads');
        foreach($homemenu_array as $homemenu_list){
      ?>
        <a aria-label="Link_Title" title="Link_Title" class="home-menu-box" href="">
          <div class="hmb-title"><?php echo($homemenu_list['product_title'])?></div>
          <div class="hmb-icon content_center"><?php require ($_SERVER['LEXUS'].'img/icon/homemenu-'.$homemenu_list['product_icon'].'.svg')?></div>
          <div class="hmb-desc"><?php echo($homemenu_list['product_desc'])?></div>
        </a>
	  <?php } ?>
	</div>
  </section>



</div>
<?php require ($_SERVER['LEXUS'].'inc/footer.php')?>
<?php require ($_SERVER['LEXUS'].'inc/base-bottom.php')?>