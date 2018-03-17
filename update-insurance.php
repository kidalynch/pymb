<?php include('head.php') ?>

    <body class="insurance">

	<?php include('nav.php') ?>
	
	    <div class="fluid-bg blue-bg sect-pad-xl">
		    <div class="container max-8 wow fadeIn" data-wow-delay=".2s">
			    <div class="row">
				    <h2>Update Your Insurance</h2>
		    	</div>
		    </div>
		    <div class="container max-8 paper-bg wow fadeIn">
			    <div class="row">
				    <div class="col-12">
					    <p>If you have health insurance but we did not receive it, you can enter your health insurance information below and your account will be updated and your insurance company will be billed automatically.
						</p>
					    <h3>New Insurance Info</h3>

						<form class="needs-validation" novalidate>
							<div class="row">
								<div class="col-sm-6">
								  <div class="form-group">
								    <label for="insBillAccountNumber">Account Number From Your Bill</label>
								    <input type="text" class="form-control" id="insBillAccountNumber" required>
										<?php echo($f_invalid); ?>
								  </div>
								  <div class="form-group">
								    <label for="insInsCompany">Insurance Company</label>
								    <input type="text" class="form-control" id="insInsCompany" required>
										<?php echo($f_invalid); ?>
								  </div>
								  <div class="form-group">
								    <label for="insPolicyHolderName">Policy Holder's Name</label>
								    <input type="text" class="form-control" id="insPolicyHolderName" required>
										<?php echo($f_invalid); ?>
								  </div>
								  <div class="form-group">
								    <label for="insPolicyHolderID">Policy Holder's ID Number</label>
								    <input type="text" class="form-control" id="insPolicyHolderID">
								  </div>
								  <div class="form-group">
								    <label for="insPolicyHolderID">Group Plan Number</label>
								    <input type="text" class="form-control" id="insPolicyHolderID">
								  </div>
								  <div class="form-group">
								    <label for="insCompanyAdPhone">Phone</label>
								    <input type="tel" class="form-control" id="insCompanyAdPhone" required>
										<?php echo($f_invalid); ?>
								  </div>
								</div>
								<div class="col-sm-6">

								  <div class="form-group">
								    <label for="insCompanyAddress">Insurance Company Address</label>
								    <input type="text" class="form-control" id="insCompanyAddress" required>
										<?php echo($f_invalid); ?>
								  </div>
								  <div class="form-group">
								    <label for="insCompanyAddress2">Address Cont.</label>
								    <input type="text" class="form-control" id="insCompanyAddress2" placeholder="Suite, Bldg., Unit (optional)">
								  </div>
								  <div class="form-group">
								    <label for="insCompanyAdCity">City</label>
								    <input type="text" class="form-control" id="insCompanyAdCity" required>
										<?php echo($f_invalid); ?>
								  </div>
								  
								  <div class="form-group">
								    <label for="insCompanyAdState">State</label>
								    <select class="form-control" id="insCompanyAdState" required>
								      <option>Alabama</option>
								      <option>Alaska</option>
								      <option>Arkansas</option>
								    </select>
								  </div>
								  <div class="form-group">
								    <label for="insCompanyAdZip">Zip</label>
								    <input type="text" class="form-control" id="insCompanyAdZip" required>
										<?php echo($f_invalid); ?>
								  </div>						  
								  <fieldset class="form-group">
								    <legend>Insurance Type</legend>
								    <div class="form-check">
								      <label class="form-check-label">
								        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="Primary Insurance" checked>
								        Primary Insurance
								      </label>
								    </div>
								    <div class="form-check">
								    <label class="form-check-label">
								        <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="Secondary Insurance">
								        Secondary Insurance
								      </label>
								    </div>
								  </fieldset>
								</div>
							</div>
								  
							<div class="form-group">
								<label for="insAddlInfo">Any Additional Info</label>
								<textarea class="form-control" id="insAddlInfo" rows="3"></textarea>
							</div>
						  
<!-- 						  Insert the Google Recaptcha V2 Here -->

						  	<button type="submit" class="btn btn-green float-right">Submit</button>
						  	
						</form>			    
				    </div>
			    </div>
			    
		    </div>
	    </div>


<?php include('footer.php') ?>
