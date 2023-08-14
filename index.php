<?php require ('inc/base.php')?>
<?php require ($_SERVER['LEXUS'].'inc/meta.php')?>
<?php require ($_SERVER['LEXUS'].'inc/sample.php')?>
<?php require ($_SERVER['LEXUS'].'inc/header.php')?>
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
	<style><?php require ($_SERVER['LEXUS'].'css/home.css')?></style>
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



</div>
<?php require ($_SERVER['LEXUS'].'inc/footer.php')?>
<?php require ($_SERVER['LEXUS'].'inc/base-bottom.php')?>