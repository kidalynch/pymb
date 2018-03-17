<?php include('head.php') ?>

    <body class="address">

	<?php include('nav.php') ?>
	
	    <div class="fluid-bg blue-bg sect-pad-xl">
		    <div class="container max-8 wow fadeIn" data-wow-delay=".2s">
			    <div class="row">
				    <h2>Contact Us</h2>
		    	</div>
		    </div>
		    <div class="container max-8 paper-bg wow fadeIn">
			    <div class="row">
				    <div class="col-sm-8">
						<form class="needs-validation" novalidate>
							  <div class="form-group">
							    <label for="cntName">Your Name</label>
							    <input type="text" class="form-control" id="cntName" required>
									<?php echo($f_invalid); ?>
							  </div>
							  <div class="form-group">
							    <label for="cntEmail">Email</label>
							    <input type="email" class="form-control" id="cntEmail" required>
									<?php echo($f_invalid); ?>
							  </div>
							  <div class="form-group">
							    <label for="cntPhone">Phone</label>
							    <input type="tel" class="form-control" id="cntPhone">
							  </div>
							  <div class="form-group">
								<label for="cntMessage">Message</label>
								<textarea class="form-control" id="cntMessage" rows="6"></textarea>
							  </div>

						  
<!-- 						  Insert the Google Recaptcha V2 Here -->

						  	<button type="submit" class="btn btn-green float-right mb-2">Submit</button>
						  	<br/>
						  	
						</form>			    
				    </div>
				    <div class="col-sm-4">
					    <h3 class="txt-blue mt-4"><?php echo($ph_num); ?></h3>
						<p>Fax: (614) 442-2403</p>
						<p>Monday - Friday<br/>
							9:00am - 4:00pm EST</p>
						<small>The office closed on major holidays</small>
				    </div>
			    </div>
			    
		    </div>
	    </div>
	    
<?php include('footer.php') ?>
