<?php require ('../inc/base.php')?>
<?php require ($_SERVER['LEXUS'].'inc/meta.php')?>
<?php require ($_SERVER['LEXUS'].'inc/sample.php')?>
<?php require ($_SERVER['LEXUS'].'inc/header.php')?>
<div class="rancak-container">



  <?php $breadcrumb_label='finance calculator'; $breadcrumb_link='';
  require ($_SERVER['LEXUS'].'module/breadcrumb.php')?>



  <section class="section-container">
	<div class="content-container">
	
	  <div class="search-filter">
        <div class="search-box">
          <input type="text" class="search-field" placeholder="Insert keyword...">
          <div class="search-icon content_center">
            <?php require ($_SERVER['LEXUS'].'img/icon/search.svg')?>
          </div>
        </div>
        <button title="Filter" class="btn filter-button content_center">
          <?php require ($_SERVER['LEXUS'].'img/icon/filter.svg')?>
        </button>
	  </div>
	  
	  <div class="finance-calculator-list">
        <?php for ($i=1; $i <= 5; $i++) { ?>
          <div class="fcl-box">
            <div class="fcl-header">
              <div class="fcl-name content_center"><b><?php echo $random_name[array_rand($random_name)]; ?></b></div>
              <div class="fcl-action">
                <button title="Download" class="fcl-button content_center">
                  <?php require ($_SERVER['LEXUS'].'img/icon/pdf.svg')?>
                </button>
                <button title="Delete" class="fcl-button content_center">
                  <?php require ($_SERVER['LEXUS'].'img/icon/delete.svg')?>
                </button>
              </div>
            </div>
            <div class="fcl-content">
              <?php for ($j=1; $j <= rand(1,5); $j++) { ?>
                <a aria-label="Link_Title" title="Link_Title" class="fcl-content-row" href="finance-calculator/detail.php">
				  <div class="fcl-left">
				    <div class="fcl-label"><?php echo $random_model[array_rand($random_model)]; ?></div>
				    <div class="fcl-type">Luxury Black / Dark Rose</div>
				  </div>
				  <div class="fcl-right">
				    <div class="fcl-payment"><?php echo $random_payment[array_rand($random_payment)]; ?></div>
				  </div>
				</a>
              <?php } ?>
            </div>
          </div>
        <?php } ?>
	  </div>
	  
      <button title="Add New Customer" class="btn fcl-button-full content_center">
        Add New Customer
      </button>
	  
	</div>
  </section>



</div>
<?php require ($_SERVER['LEXUS'].'inc/footer.php')?>
<?php require ($_SERVER['LEXUS'].'inc/base-bottom.php')?>