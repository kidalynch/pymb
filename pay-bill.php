<?php include( 'head.php' ) ?>

<body class="pay-bill">

<?php include( 'nav.php' ) ?>

<div class="fluid-bg blue-bg sect-pad-xl">
  <div class="container max-8 wow fadeIn" data-wow-delay=".2s">
    <div class="row">
      <h2>Pay Your Bill</h2>
    </div>
  </div>
  <div class="container max-8 paper-bg wow fadeIn">
    <div class="row">
      <div class="col-12">

        <form id="paybill-form" class="needs-validation" novalidate action="" method="POST">

          <div class="pay-sect-head">
            <span class="sect-num">1</span>
            <h3>Account Overview</h3>
          </div>

          <div class="pay-sect-body">
            <div class="row mx-0">
              <div class="ps-adrs col-12 order-3 order-sm-1">
                <div class="row ps-who px-0">
                  <div class="ps-payfor col-sm-6">
                    <div class="sm-lbl">Payment For</div>
                    <p>
                      St. John’s Medical Group<br/>
                      1234 State St., Suite 200<br/>
                      Columbus, OH 43215-8374
                    </p>
                  </div>
                  <div class="ps-payee col-sm-6">
                    <div class="sm-lbl">Payee</div>
                    <p>
                      Jane Doe<br/>
                      1234 Main St., Apt. A8<br/>
                      Columbus, OH 12345
                    </p>
                  </div>
                </div>
              </div>
              <div class="ps-due col-12 col-sm-6 order-4 order-sm-2">
                <div class="wht-lbl">Current Amount Due</div>
                <div class="price">$123.56</div>
              </div>
              <div class="ps-info col-12 col-sm-3 order-1 order-sm-3">
                <div class="row mx-0">
                  <div class="sm-lbl col-6 col-sm-12 px-0">Account Number</div>
                  <div class="act col-6 col-sm-12 px-0">usa12345</div>
                </div>
              </div>
              <div class="ps-info col-12 col-sm-3 order-2 order-sm-4">
                <div class="row mx-0">
                  <div class="sm-lbl col-6 col-sm-12 px-0">Statement Date</div>
                  <div class="date col-6 col-sm-12 px-0">Feb 21, 2018</div>
                </div>
              </div>

            </div>
          </div>
          <div class="pay-sect-head">
            <span class="sect-num">2</span>
            <h3>Payment Amount</h3>
          </div>
          <div class="pay-sect-body">

            <div class="col-sm-6 p-0">
              <div class="btn-group-toggle pay-total" data-toggle="buttons">

                <div class="form-check form-check-extended-right">
                  <label class="form-check-label btn btn-total opt-top active">
                    <input type="radio" class="form-check-input" name="optionsBal" id="totalBal" checked>
                    Total Balance

                    <div class="form-check-extension">
                      <span class="currency-sign">$</span>
                      <span class="price">123.45</span>
                    </div>
                  </label>
                </div>

                <div class="form-check form-check-extended-right">
                  <label class="form-check-label btn btn-total opt-bot">
                    <input type="radio" class="form-check-input" name="optionsBal" id="otherBal" onfocus="$('#customPay').focus()">
                    Other Amount

                    <div class="form-check-inline form-check-extension">
                      <span class="currency-sign">$</span>
                      <input type="number" class="form-control" name="customPay" id="customPay"/>
                    </div>
                  </label>
                </div>

              </div>
            </div>

          </div>
          <div class="pay-sect-head">
            <span class="sect-num">3</span>
            <h3>Billing & Payment</h3>
          </div>
          <div class="pay-sect-body last">
            <div class="row ">
              <div class="col-sm-6 bill-addy">
                <div class="form-group required">
                  <label for="billAddress">Address</label>
                  <input type="text" class="form-control" id="billAddress" required>
                  <?php echo( $f_invalid ); ?>
                </div>
                <div class="form-group">
                  <label for="billAddress2" class="sr-only">Address Cont.</label>
                  <input type="text" class="form-control" id="billAddress2" placeholder="Suite, Bldg., Unit (optional)">
                </div>
                <div class="form-group required">
                  <label for="billCompanyAdCity">City</label>
                  <input type="text" class="form-control" id="billCompanyAdCity" required>
                  <?php echo( $f_invalid ); ?>
                </div>
                <div class="form-row">
                  <div class="form-group col-6 required">
                    <label for="billCompanyAdState">State</label>
                    <select class="form-control" id="billCompanyAdState" required>
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>Arkansas</option>
                    </select>
                  </div>
                  <div class="form-group col-6 required">
                    <label for="billCompanyAdZip">Zip</label>
                    <input type="text" class="form-control" id="billCompanyAdZip" required>
                    <?php echo( $f_invalid ); ?>
                  </div>
                </div>
                <div class="form-group">
                  <label for="billEmail">Email</label>
                  <input type="email" class="form-control" id="billEmail" required>
                  <?php echo( $f_invalid ); ?>
                  <small class="form-text txt-lt">
                    Your email will not be saved or used for any purpose other than sending you a confirmation receipt once
                    your payment is processed.
                  </small>
                </div>

              </div>
              <div class="col-sm-6 bill-method">
			  	<?php include('pay-opt-both.php'); ?>
              </div>
            </div>
          </div>
          <div class="container text-center px-0">
            <button type="submit" class="btn btn-green btn-xl mb-4 btn-submit-payment">
              <span class="label">Submit Payment</span>
              <span class="spinner">Processing...</span>
            </button>
          </div>

        </form>
      </div>
    </div>

  </div>
</div>

<?php include( 'footer.php' ) ?>
