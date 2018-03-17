<?php include('head.php') ?>

    <body class="address">

	<?php include('nav.php') ?>
	
	    <div class="fluid-bg blue-bg sect-pad-xl">
		    <div class="container max-8 wow fadeIn" data-wow-delay=".2s">
			    <div class="row">
				    <h2>Update Your Address</h2>
		    	</div>
		    </div>
		    <div class="container max-8 paper-bg wow fadeIn">
			    <div class="row">
				    <div class="col-12">
						<form class="needs-validation" novalidate>
							<div class="form-row">
							  <div class="form-group col-sm-6">
							    <label for="adrBillAccountNumber">Account Number From Your Bill</label>
							    <input type="text" class="form-control" id="adrBillAccountNumber" required>
									<?php echo($f_invalid); ?>
							  </div>
							  <div class="form-group col-sm-6">
							    <label for="adrCompanyAdPhone">Phone</label>
							    <input type="tel" class="form-control" id="adrCompanyAdPhone" required>
									<?php echo($f_invalid); ?>
							  </div>
							</div>
							<div class="form-row">
							  <div class="form-group col-sm-6">
							    <label for="adrCompanyAddress">Address</label>
							    <input type="text" class="form-control" id="adrCompanyAddress" required>
									<?php echo($f_invalid); ?>
							  </div>
							  <div class="form-group col-sm-6">
							    <label for="adrCompanyAddress2">Address Cont.</label>
							    <input type="text" class="form-control" id="adrCompanyAddress2" placeholder="Suite, Bldg., Unit (optional)">
							  </div>
							</div>
							<div class="form-row">
							  <div class="form-group col-sm-5">
							    <label for="adrCompanyAdCity">City</label>
							    <input type="text" class="form-control" id="adrCompanyAdCity" required>
									<?php echo($f_invalid); ?>
							  </div>
							  
							  <div class="form-group col-sm-4">
							    <label for="adrCompanyAdState">State</label>
							    <select class="form-control" id="adrCompanyAdState" required>
							      <option>Alabama</option>
							      <option>Alaska</option>
							      <option>Arkansas</option>
							    </select>
							  </div>
							  <div class="form-group col-sm-3">
							    <label for="adrCompanyAdZip">Zip</label>
							    <input type="text" class="form-control" id="adrCompanyAdZip" required>
									<?php echo($f_invalid); ?>
							  </div>	
							</div>
												  

								<div class="form-group">
									<label for="adrAddlInfo">Any Additional Info</label>
									<textarea class="form-control" id="adrAddlInfo" rows="3"></textarea>
								</div>

								  
						  
<!-- 						  Insert the Google Recaptcha V2 Here -->

						  	<button type="submit" class="btn btn-green float-right">Submit</button>
						  	
						</form>			    
				    </div>
			    </div>
			    
		    </div>
	    </div>
	    
<?php include('footer.php') ?>
