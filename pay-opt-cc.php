				<label></label>
                  <div class="card">
                    <div class="card-header">
                      <img src="build/imgs/ccards.svg" class="ccards"/>
                    </div>

                    <div class="list-group list-group-flush">
	                    <div class="list-group-item active">
	                      <div class="form-group required">
	                        <label for="billmthdName">Name on Card</label>
	                        <input type="text" class="form-control" id="billmthdName" required>
	                      </div>
	                      <div class="form-group required">
	                        <label for="billmthdCCNum">Credit Card Number</label>
	                        <input type="text" class="form-control" id="billmthdCCNum" required>
	                      </div>
	                      <div class="form-row">
	                        <div class="form-group col-6 col-md-4 required">
	                          <label>Expiration Date</label>
	                          <label for="billmthdExpM" class="sr-only">Month</label>
	                          <select class="form-control" id="billmthdExpM" required>
	                            <option>MM</option>
	                            <option>01</option>
	                            <option>02</option>
	                            <option>03</option>
	                          </select>
	                        </div>
	                        <div class="form-group col-6 col-md-4">
	                          <label></label>
	                          <label for="billmthdExpY" class="sr-only">Year</label>
	                          <select class="form-control" id="billmthdExpY" required>
	                            <option>YYYY</option>
	                            <option>2019</option>
	                            <option>2020</option>
	                          </select>
	                        </div>
	                        <div class="form-group col-6 col-md-4 required">
	                          <label for="billCVV">CVV</label>
	                          <input type="text" class="form-control" id="billCVV" required>
	                          <small class="txt-lt" data-toggle="tooltip" data-placement="bottom"
	                                 title="The CVV is the 3 digit code on the back of your card. American Express CVV is 4 digits.">
	                            What is this?
	                          </small>
	                        </div>
                          </div>
                    	</div>
                    </div>
                    
                  </div>

