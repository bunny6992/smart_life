<div class="col-md-8 col-md-offset-2 info-card address-info">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Where do you live ?</h2>
                    <p>Provide an address where you are living right now and your hometown address in detail</p>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="address-same">
                      Is your hometown address and current address same ?
                      </label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="day-care">
                      Are you a senior citizen and living in adult day care ?
                      </label>
                    </div>

                    <div class="panel panel-success current-addr">
                      <div class="panel-heading">Current address</div>
                      <div class="panel-body">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">Country:</label>
                            <select class="form-control" id="sel1">
                              <option>India</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">State:</label>
                            <select class="form-control" id="sel1">
                              <option>Maharashtra</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">City:</label>
                            <select class="form-control" id="sel1">
                              <option>Nagpur</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Street name / Building name / Address line 1:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Apartment / Flat number / Address line 2:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Region:</label>
                            <select class="form-control" id="sel1">
                              <option>Urban</option>
                              <option>Rural</option>

                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class=" form-group">
                            <label class="">Postcode:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-success hometown-addr">
                      <div class="panel-heading">Hometown address</div>
                      <div class="panel-body">
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">Country:</label>
                            <select class="form-control" id="sel1">
                              <option>India</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">State:</label>
                            <select class="form-control" id="sel1">
                              <option>Maharashtra</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">City:</label>
                            <select class="form-control" id="sel1">
                              <option>Nagpur</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Street name / Building name / Address line 1:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Apartment / Flat number / Address line 2:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Region:</label>
                            <select class="form-control" id="sel1">
                              <option>Urban</option>
                              <option>Rural</option>

                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class=" form-group">
                            <label class="">Postcode:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="no-home">I don't have home !.</label>
                    </div>

                    <button class="btn btn-primary smart-button pull-right" @click="pageNo++">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>