<div class="col-md-8 col-md-offset-2 info-card basic-info">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                <form onsubmit="return false">
                    <h2>Tell us about yourself.</h2>
                    <div class=" form-group">
                      <label class="">First name:</label>
                      <input type="text" id="firstname" class="form-control" v-model="basicInfo.firstName"  data-validation="length alphanumeric" data-validation-length="min4">
                    </div>

                    <div class="form-group">
                      <label class="">Middle name:</label>
                      <input type="text" class="form-control" v-model="basicInfo.middleName">
                    </div>

                    <div class="form-group">
                      <label class="">Last name:</label>

                      <input type="text" class="form-control" v-model="basicInfo.lastName">
                    </div>
                    <div class="id-numbers" v-if="! basicInfo.noId">
                      <div class=" form-group">
                        <label class="">Voting card number:</label>
                        <input type="text" class="form-control" v-model="basicInfo.votingId">
                      </div>

                      <div class="form-group">
                        <label class="">Adhar card number:</label>
                        <input type="text" class="form-control" v-model="basicInfo.aadharId">
                      </div>

                      <div class="form-group">
                        <label class="">PAN card number:</label>

                        <input type="text" class="form-control" v-model="basicInfo.panId">
                      </div>

                      <div class="form-group">
                        <label class="">Passport number:</label>
                        <input type="text" class="form-control" v-model="basicInfo.passportId">
                      </div>
                    </div>
                    <label><input type="checkbox" v-model="basicInfo.noId">I don't have any identity document.</label>
                    <input class="btn btn-primary smart-button pull-right" type="submit" @click="saveBasicInfo()">
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>