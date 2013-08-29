<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<?php require_once('application/templates/header.php'); ?>

	<!-- css -->
	<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/prettify.css">
	<link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancyProductDesigner.css" />
	<link rel="stylesheet" type="text/css" href="/assets/css/jquery.fancyProductDesigner-fonts.css" />

	<!-- javascript -->
	<script src="/assets/js/jquery.fancyProductDesigner.min.js" type="text/javascript"></script>
	<script src="/assets/js/prettify.js" type="text/javascript"></script>
	<script src="/assets/js/bootstrap-scripts.js" type="text/javascript"></script>
	<script src="/assets/js/script.js" type="text/javascript"></script>
</head>
<body>
	<!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top plaid">
      <div class="container">
        <h1 class="navbar-brand span 10" href="#">shirt buildr </h1>
        <div class="nav-collapse collapse">
          <h1 class="span 6 offset2">Welcome <?php echo $user['first_name']?>!</h1>
          	<!-- logout button -->
			<form action="/user/logout" class="pull-right">
				<button type="submit" value="Logoff" class="btn btn-primary">Logoff</button>
			</form>
        </div>
      </div>
    </div><!-- End Navbar -->

    <div class="bottom_banner bump-top">
    <div class="container">
      <h1>Visualize Your Design:</h1>
        <div class="row plaid size">
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#shirtbuilder_modal" src="/assets/img/tshirt_front.png" alt="t-shirt" class="img-swap" id='tshirt'>
            </div>
          </div>
           <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#shirtbuilder_modal" src="/assets/img/collared_front.png" alt="collared shirt" class="img-swap" id='collared'>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="thumbnail">
              <img data-toggle="modal" href="#shirtbuilder_modal" src="/assets/img/sweatshirt_front.png" alt="sweatshirt" class="img-swap" id='sweatshirt'>
            </div>
          </div>
          <div class="col-lg-3">
            <div id="hat_margin" class="thumbnail">
              <img data-toggle="modal" href="#shirtbuilder_modal" src="/assets/img/hat_front.png" alt="hat" class="img-swap" id='hat'>
            </div>
          </div>
        </div>
      </div>
  </div>
	
			<div id="shirtbuilder_modal" class="modal fade">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h1 class="modal-title">Create Your Garment</h1>
						</div>
						<div class="modal-body">

							<!-- TSHIRT BUILDER PLUGIN -->

							<h3 id="clothing"></h3>
					          	<div id="clothing-designer">
					          		<div class="fpd-product" title="Shirt Front" data-thumbnail="/assets/images/tshirt/front/tshirt_front.png">
						    			<img src="/assets/images/tshirt/front/tshirt_front.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 20}' />
								  		<img src="/assets/images/tshirt/front/tshirt_mask_front.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
								  		<span title="Any Text" data-parameters='{"x": 210, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000", "zChangeable": true}' >Default Text</span>
								  		<div class="fpd-product" title="Shirt Back" data-thumbnail="/assets/images/tshirt/back/tshirt_back.png">
							    			<img src="/assets/images/tshirt/back/tshirt_back.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 20}' />
									  		<img src="/assets/images/tshirt/back/tshirt_mask_back.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
										</div>
									</div>
									<div class="fpd-product" title="Hoodie" data-thumbnail="/assets/images/hoodie/front/sweatshirt_front.png">
						    			<img src="/assets/images/hoodie/front/sweatshirt_front.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 40}' />
								  		<img src="/assets/images/hoodie/front/sweatshirt_mask_front.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
								  		<span title="Any Text" data-parameters='{"x": 210, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
								  		<div class="fpd-product" title="Hoodie Back" data-thumbnail="/assets/images/hoodie/back/sweatshirt_back.png">
							    			<img src="/assets/images/hoodie/back/sweatshirt_back.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 20}' />
									  		<img src="/assets/images/hoodie/back/sweatshirt_mask_back.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
										</div>
									</div>
									<div class="fpd-product" title="Collared Shirt" data-thumbnail="/assets/images/shirt/front/collared_front.png">
						    			<img src="/assets/images/shirt/front/collared_front.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 10}' />
								  		<img src="/assets/images/shirt/front/collared_mask_front.png" title="Shadow" data-parameters='{"x": 123, "y": 81}' />
								  		<span title="Any Text" data-parameters='{"x": 210, "y": 181, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
								  		<div class="fpd-product" title="Collared Shirt Back" data-thumbnail="/assets/images/shirt/back/collared_back.png">
							    			<img src="/assets/images/shirt/back/collared_back.png" title="Base" data-parameters='{"x": 123, "y": 81, "colors": "#FFFFFF", "price": 20}' />
									  		<img src="/assets/images/shirt/back/collared_mask_back.png" title="Shadow" data-parameters='{"x": 123, "y": 81}'/>
										</div>
									</div>
									<div class="fpd-product" title="Basecap" data-thumbnail="/assets/images/cap/front/cap_front.png">
						    			<img src="/assets/images/cap/front/cap_front.png" title="Base" data-parameters='{"x": 200, "y": 150, "colors": "#ededed", "price": 5}' />
								  		<img src="/assets/images/cap/front/cap_mask_front.png" title="Shadows" data-parameters='{"x": 200, "y": 150}' />
								  		<span title="Any Text" data-parameters='{"x": 215, "y": 190, "removable": true, "draggable": true, "rotatable": true, "resizable": true, "colors": "#000000"}' >Default Text</span>
								  		<div class="fpd-product" title="Basecap Back" data-thumbnail="/assets/images/cap/back/cap_back.png">
							    			<img src="/assets/images/cap/back/cap_back.png" title="Base" data-parameters='{"x": 200, "y": 150, "colors": "#FFFFFF", "price": 20}' />
									  		<img src="/assets/images/cap/back/cap_mask_back.png" title="Shadow" data-parameters='{"x": 200, "y": 150}'/>
										</div>
									</div>
							  	</div>
							  	<div class="api-buttons clearfix" style="text-align: left;">
								  	<a href="#" id="print-button" class="btn btn-info">Print</a>
								  	<a href="#" id="image-button" class="btn btn-info">Create Image</a>
								  	<a href="#" id="upload-button" class="btn btn-warning">Upload own design</a>
								  	<span class="pull-right offset1 price badge badge-inverse"><span id="thsirt-price"></span> $</span>
								  	<label class="checkbox pull-right"><input type="checkbox" id="colorizable" /> Colorizable?</label>
								  	
								  	<input type="file" id="design-upload" style="display: none;" />
									<form action="recreation.php" id="recreation-form" method="post">
										<input type="hidden" name="recreation_product" value="" />
									</form>				  	
							  	</div>
							</div>
							<!-- END OF TSHIRT BUILDER PLUGIN -->

						<!-- </div> -->
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->

  <div class="bottom_banner brown">
    <div class="container">
      <h1>Saved Designs:</h1>
        <div class="row plaid size">
          <div class="col-lg-3">
          </div>
           <div class="col-lg-3">
          </div>
          <div class="col-lg-3">
          </div>
          <div class="col-lg-3">
          </div>
        </div>
    </div>  
  </div>			
		</div>  
	</div>
</body>
</html>