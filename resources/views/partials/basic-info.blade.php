<div class="col-md-8 col-md-offset-2 info-card basic-info">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Tell us about yourself.</h2>
                    <div class=" form-group">
                      <label class="">First name:</label>
                      <input type="text" class="form-control" v-model="basicInfo.firstName">
                    </div>

                    <div class="form-group">
                      <label class="">Middle name:</label>
                      <input type="text" class="form-control" v-model="basicInfo.middleName">
                    </div>

                    <div class="form-group">
                      <label class="">Last name:</label>

                      <input type="text" class="form-control" v-model="basicInfo.lastName">
                    </div>

                    <div class="form-group">
                      <label class="">Religion</label>

                      <input type="text" class="form-control" id="usr" v-model="basicInfo.religion">
                    </div>

                    <div class="form-group">
                      <label class="">Caste</label>
                      <input type="text" class="form-control" id="usr" v-model="basicInfo.caste">
                    </div>
                    <div class="form-group">
                      <label class="">Sub-Caste</label>
                      <input type="text" class="form-control" id="usr" v-model="basicInfo.subCaste">
                    </div>
                    <div class="input-group form-group">
                      <span class="input-group-addon bwhite">Date of birth</span>
                       <input type="date" name="" class="form-control" v-model="basicInfo.dob">
                    </div>
                      <label for="usr">Gender</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="basicInfo.gender" value="male">Option 1</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="basicInfo.gender" value="female">Option 2</label>
                      <label class="radio-inline"><input type="radio" name="optradio" v-model="basicInfo.gender" value="transgender">Option 3</label>

                    <button class="btn btn-primary smart-button pull-right" @click="saveBasicInfo()">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>