<?php include('head.php') ?>

    <body class="step1">

	<?php include('nav.php') ?>
	
	    <div class="fluid-bg blue-bg sect-pad-xl">
		    <div class="container wow fadeIn">
			    <div class="row">
				    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-6 col-lg-5 offset-lg-4 paper-bg">
					    <h3 class="mb-4">Let's Find Your Bill</h3>
						<form class="needs-validation" novalidate>
							  <div class="form-group">
							    <label for="actNumber" class="sr-only">Your Account Number</label>
							    <input type="text" class="form-control" id="actNumber" placeholder="Your Account Number" required>
									<?php echo($f_invalid); ?>
							  </div>
							  <div class="form-group">
							    <label for="actZip" class="sr-only">Your Zip Code</label>
							    <input type="text" class="form-control" id="actZip" placeholder="Your Zip Code" required>
									<?php echo($f_invalid); ?>
							  </div>

						  
						  	<a href="pay-bill.php" class="btn btn-green btn-block btn-lg mb-4">Continue</a>

<!-- 						  	<button type="submit" class="btn btn-green btn-block btn-lg mb-4">Continue</button> -->

						  	<a href data-toggle="modal" data-target="#sampleModal" class="help-link" ><i class="fa fa-question-circle"></i> Where do I find my Account Number?</a>
						  	
						</form>			    
				    </div>
			    </div>
			    
		    </div>
	    </div>
	    
<?php include('footer.php') ?>
