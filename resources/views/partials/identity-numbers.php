<div class="col-md-8 col-md-offset-2 info-card identity-numbers">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Tell us about your national identity numbers.</h2>
                    <div class="form-group">
                      <label class="">Religion</label>

                      <input type="text" class="form-control" id="usr" v-model="moreInfo.religion">
                    </div>

                    <div class="form-group">
                      <label class="">Caste</label>
                      <input type="text" class="form-control" id="usr" v-model="moreInfo.caste">
                    </div>
                    <div class="form-group">
                      <label class="">Sub-Caste</label>
                      <input type="text" class="form-control" id="usr" v-model="moreInfo.subCaste">
                    </div>
                    <div class="input-group form-group">
                      <span class="input-group-addon bwhite">Date of birth</span>
                       <input type="date" name="" class="form-control" v-model="moreInfo.dob">
                    </div>
                      <label for="usr">Gender</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="moreInfo.gender" value="male">Option 1</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="moreInfo.gender" value="female">Option 2</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="moreInfo.gender" value="transgender">Option 3</label>
                    <div class="checkbox">
                    </div>
                    <button class="btn btn-primary smart-button pull-right" @click="saveMoreInfo">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>