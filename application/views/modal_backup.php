<!-- Container Modal -->
				<div class="modal fade" id="containerModal">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header plaid">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h1 class="modal-title">Choose your garment</h1>
			        </div>
			        <div class="modal-body middle_banner">
			                  <div class="row">
						          <div class="col-lg-3">
						            <div class="thumbnail">
						              <img data-toggle="modal" href="#myModal" src="/assets/img/tshirt_front.png" alt="t-shirt" class="img-swap" id='tshirt'>
						            </div>
						          </div>
						           <div class="col-lg-3">
						            <div class="thumbnail">
						              <img data-toggle="modal" href="#myModal" src="/assets/img/collared_front.png" alt="collared shirt" class="img-swap" id='collared'>
						            </div>
						          </div>
						          <div class="col-lg-3">
						            <div class="thumbnail">
						              <img data-toggle="modal" href="#myModal" src="/assets/img/sweatshirt_front.png" alt="sweatshirt" class="img-swap" id='sweatshirt'>
						            </div>
						          </div>
						          <div class="col-lg-3">
						            <div id="hat_margin" class="thumbnail">
						              <img data-toggle="modal" href="#myModal" src="/assets/img/hat_front.png" alt="hat" class="img-swap" id='hat'>
						            </div>
						          </div>
						        </div>
			          <div class="clear"></div>
			        </div> 
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal --> 

			  <!-- Shirt Designer Modal -->
			  <div class="modal fade" id="myModal">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header plaid">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h1 class="modal-title">Design Your Garment</h1>
			        </div>
			        <div class="modal-body">
			          <div class="product-preview pull-left"> 
			            <div class="product">
			              <img src="" alt="Shirt Image" id='image'/>
			              <img id="tt-mask" class="mask" src="" alt="Mask Image" />
			            </div>
			            <div class="swatch">
			              <a rel="255,255,255" href="#tt-mask" title="White">White</a>
			              <a rel="32,223,95" href="#tt-mask" title="Green">Green</a>
			              <a rel="255,211,8" href="#tt-mask" title="Yellow">Yellow</a>
			              <a rel="255,101,8" href="#tt-mask" title="Orange">Orange</a>
			              <a rel="16,200,255" href="#tt-mask" title="Blue">Blue</a>
			              <a rel="255,0,0" href="#tt-mask" title="Red">Purple</a>
			              <a rel="0,0,0" href="#tt-mask" title="Black">Red</a>
			            </div> 
			          </div>  
			          <div id="upload_box" class="plaid pull-right">
			            <h2>Upload Logo</h2>
			            <h4>Drag Over Garment</h4>
			             <span>
			                <input  type="file" 
			                        style="visibility:hidden; width: 1px;" 
			                        id='${multipartFilePath}' name='${multipartFilePath}'  
			                        onchange="$(this).parent().find('span').html($(this).val().replace('C:\\fakepath\\', ''))"  /> <!-- Chrome security returns 'C:\fakepath\'  -->
			                <input class="btn btn-primary" type="button" value="Upload File..." onclick="$(this).parent().find('input[type=file]').click();"/> <!-- on button click fire the file click event -->
			                &nbsp;
			                <button type="submit" class="btn">Upload</button>
			                <span  class="badge badge-important" ></span>
			            </span>            
			<!--             <div class="drag">
			              <div class="handle NE"></div>
			              <div class="handle NW"></div>
			              <div class="handle SW"></div>
			              <div class="handle SE"></div>
			            </div> -->
			            <select name id="ink" class="form-control"> 
			              <option class="dropdown-header" value="">Number of Ink Colors</option>
			              <option value="1">1</option>
			              <option value="2">2</option>
			              <option value="3">3</option>
			            </select>
			          </div>
			          <div class="clear"></div>
			        </div> 
			        <div class="modal-footer plaid">
			          <div class="pull-right">
			            <a type="button" data-dismiss="modal" >Close</a>
			            <a href="#" class="btn btn-primary">Save changes</a>
			          </div>
			        </div> 
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal --> 