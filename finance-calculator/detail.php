<?php require ('../inc/base.php')?>
<?php require ($_SERVER['LEXUS'].'inc/meta.php')?>
<?php require ($_SERVER['LEXUS'].'inc/sample.php')?>
<?php require ($_SERVER['LEXUS'].'inc/header.php')?>
<div class="rancak-container">



  <?php $breadcrumb_label='summary'; $breadcrumb_link='finance-calculator';
  require ($_SERVER['LEXUS'].'module/breadcrumb.php')?>



  <section class="section-container">
	<div class="content-container">
	
	  <div class="detail-finance-calculator-head">
        <div class="dfch-left">
		  <div class="dfhc-name"><?php echo $random_name[array_rand($random_name)]; ?></div>
		  <div class="dfhc-location">Individual, DKI Jakarta</div>
		</div>
		<div class="dfch-right">
          <button title="Generate to PDF" class="btn dfhc-button content_center">
            <?php require ($_SERVER['LEXUS'].'img/icon/pdf.svg')?>
			<span class="dfhc-button-label">Generate to PDF</span>
          </button>
		</div>
	  </div>
	  
	  
	  
	  <div class="default-tab">
        <?php $tab_curr='1'; require ($_SERVER['LEXUS'].'finance-calculator/detail-tab.php')?>
	  </div>
	  
	  
	  
	  <div class="detail-finance-calculator-content">
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">NX 250 Luxury Black / Dark Rose</div>
			<div class="dfcc-price">Rp.33.170.000.000,-</div>
		  </div>
		</div>
		
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">Takumi Package</div>
		  </div>
		  <ul class="dfcc-sub">
		    <li class="dfcc-row">
			  <div class="dfcc-label">ngrebrand</div>
			  <div class="dfcc-price">Rp.16.000.000,-</div>
              <div class="dfcc-action">
                <button title="Delete" class="dfcc-button dfcc-delete content_center">
                  <?php require ($_SERVER['LEXUS'].'img/icon/close.svg')?>
                </button>
              </div>
			</li>
		  </ul>
		</div>
		
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">Lexus Collection</div>
		  </div>
		  <ul class="dfcc-sub">
		    <li class="dfcc-row">
			  <div class="dfcc-label">gaga</div>
			  <div class="dfcc-price">Rp.50.000.000,-</div>
              <div class="dfcc-action">
                <button title="Delete" class="dfcc-button dfcc-delete content_center">
                  <?php require ($_SERVER['LEXUS'].'img/icon/close.svg')?>
                </button>
              </div>
			</li>
		    <li class="dfcc-row">
			  <div class="dfcc-label">grilbara</div>
			  <div class="dfcc-price">Rp.50.000.000,-</div>
              <div class="dfcc-action">
                <button title="Delete" class="dfcc-button dfcc-delete content_center">
                  <?php require ($_SERVER['LEXUS'].'img/icon/close.svg')?>
                </button>
              </div>
			</li>
		  </ul>
		</div>
		
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">Insurance</div>
			<div class="dfcc-price">Rp.33.170.000.000,-</div>
		  </div>
		</div>
	  </div>
	  
	  
	  
	  <div class="detail-finance-calculator-content dfcc-bottom">
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">Payment in</div>
			<div class="dfcc-price">Credit</div>
		  </div>
		</div>
		
	    <div class="dfcc-box">
		  <div class="dfcc-row">
		    <div class="dfcc-label">TDP</div>
			<div class="dfcc-price">Rp.100.000.000,-</div>
		  </div>
		</div>
	  </div>
	  
	  
	  
	  <div class="bottom-action">
		<button title="Edit" class="btn bottom-action-button bab-edit content_center">
		  Edit
		</button>
		<button title="Delete" class="btn bottom-action-button bab-delete content_center">
		  Delete
		</button>
	  </div>
	  
	</div>
  </section>



  <section class="section-container float-total">
	<div class="content-container">
	  <div class="float-total-box">
	    <div class="float-total-label">Total</div>
	    <div class="float-total-price">Rp.3.186.500.000,-</div>
	  </div>
	</div>
  </section>
	



</div>
<?php require ($_SERVER['LEXUS'].'inc/footer.php')?>
<?php require ($_SERVER['LEXUS'].'inc/base-bottom.php')?>