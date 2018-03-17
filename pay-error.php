<?php include('head.php') ?>

    <body class="pay-error">

	<?php include('nav.php') ?>
	
	    <div class="fluid-bg blue-bg sect-pad-xl">
		    <div class="container wow fadeIn">
			    <div class="row">
				    <div class="col-sm-8 offset-sm-2 col-md-6 offset-md-6 col-lg-5 offset-lg-3 paper-bg">
					    <div class="text-center mb-4">
						    <i class="fas fa-exclamation-triangle pay-ico txt-red"></i>
						    <h3 >Payment Declined</h3>
					    </div>
					    <hr/>
					    <p class="mb-4">There was an issue processing your card and your bill remains unpaid. In order to resolve the issue, you will need to contact your bank. If you feel you have reached this message in error please try to enter your billing details again. </p>

						<a href="account-lookup.php" class="btn btn-light btn-block btn-lg ">Retry</a>
				    </div>
			    </div>
			    
		    </div>
	    </div>
	    
<?php include('footer.php') ?>
