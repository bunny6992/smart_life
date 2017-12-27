<div class="col-md-8 col-md-offset-2 info-card identity-numbers">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-6">
                    <h2>Tell us about your national identity numbers.</h2>
                    <div class=" form-group">
                      <label class="">Voting card number:</label>
                      <input type="text" class="form-control" v-model="identityNumbers.votingId">
                    </div>

                    <div class="form-group">
                      <label class="">Adhar card number:</label>
                      <input type="text" class="form-control" v-model="identityNumbers.aadharId">
                    </div>

                    <div class="form-group">
                      <label class="">PAN card number:</label>

                      <input type="text" class="form-control" v-model="identityNumbers.panId">
                    </div>

                    <div class="form-group">
                      <label class="">Passport number:</label>
                      <input type="text" class="form-control" v-model="identityNumbers.passportId">
                    </div>
                    <div class="checkbox">
                      <label><input type="checkbox" v-model="identityNumbers.homeless">I don't have any of these.</label>
                    </div>
                    <button class="btn btn-primary smart-button pull-right" @click="saveIdentityNumbers">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>