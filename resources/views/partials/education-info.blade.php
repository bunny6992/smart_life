<div class="col-md-8 col-md-offset-2 info-card education-info">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Tell us about your education</h2>
                    <p>Provide your education details such as schooling, collages or any institute you are going or went to</p>

                    <p>Did you have attended 10th class ?</p>
                    <div class="checkbox tenth-class-checker">
                      <label><input type="radio" name="tenth-class" value="1">
                      Yes
                      </label>
                      <label><input type="radio" name="tenth-class" value="0">
                      No
                      </label>
                    </div>                 

                    <div class="panel panel-success education-panel school hide">
                      <div class="panel-heading">School</div>
                      <div class="panel-body">

                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">School name:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">School address:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <p>Did you have appeared in the final exam ?</p>
                            <div class="checkbox">
                              <label><input type="radio" name="tenth-appeared" value="1" class="tenth-class">
                              Yes
                              </label>
                              <label><input type="radio" name="tenth-appeared" value="0" class="tenth-class">
                              No
                              </label>
                            </div>
                        </div>

                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">Class:</label>
                            <select class="form-control" id="sel1">
                              <option>10th</option>
                              <option>9th</option>

                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4">
                          <div class="form-group">
                            <label for="sel1">Year you went:</label>
                            <select class="form-control" id="sel1">
                              <option>2017</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-4 tenth-percent">
                          <div class="form-group">
                            <label for="sel1">Percentile:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-success education-panel collage hide">
                      <div class="panel-heading">Collage</div>
                      <div class="panel-body">

                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Collage name:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Collage address:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <p>Did you have appeared in the final exam ?</p>
                            <div class="checkbox">
                              <label><input type="radio" name="tenth-appeared" value="1" class="tenth-class">
                              Yes
                              </label>
                              <label><input type="radio" name="tenth-appeared" value="0" class="tenth-class">
                              No
                              </label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="sel1">Course name:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Year you went:</label>
                            <select class="form-control" id="sel1">
                              <option>2017</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 tenth-percent">
                          <div class="form-group">
                            <label for="sel1">Percentile:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="panel panel-success education-panel institute hide">
                      
                      <div class="panel-heading">Institute</div>
                      <div class="panel-body">

                        <div class="col-sm-12">
                          <p>Tell us if you have attended or attending any institute for some specialize courses.</p>
                          <div class=" form-group">
                            <label class="">Institute name:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class=" form-group">
                            <label class="">Institute address:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>

                        <div class="col-sm-12">
                          <p>Did you have appeared in the final exam ?</p>
                            <div class="checkbox">
                              <label><input type="radio" name="tenth-appeared" value="1" class="tenth-class">
                              Yes
                              </label>
                              <label><input type="radio" name="tenth-appeared" value="0" class="tenth-class">
                              No
                              </label>
                            </div>
                        </div>

                        <div class="col-sm-12">
                          <div class="form-group">
                            <label for="sel1">Corse name:</label>
                            <input type="text" class="form-control" id="usr">
                            
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="sel1">Year you went:</label>
                            <select class="form-control" id="sel1">
                              <option>2017</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-sm-6 tenth-percent">
                          <div class="form-group">
                            <label for="sel1">Percentile:</label>
                            <input type="text" class="form-control" id="usr">
                          </div>
                        </div>
                      </div>
                    </div>

                    

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="no-education">I didn't go to school !.</label>
                    </div>

                    <button class="btn btn-primary smart-button pull-right" @click="pageNo++">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>