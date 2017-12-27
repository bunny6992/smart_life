<div class="col-md-8 col-md-offset-2 info-card health-info">
    <div class="panel panel-success no-border">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-8">
                    <h2>Tel us about your health life</h2>
                    <p>Provide a brief information about your health conditions</p>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="have-d">
                      Do you have any disorder of disease ?
                      </label>
                    </div>

                    <div class=" form-group disease-box hide">
                      <label class="">Disease / Disorder name</label>
                      <input type="text" class="form-control" id="usr">
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="have-handi">
                      Are you handicap ?
                      </label>
                    </div>

                    <div class=" form-group disability-box hide">
                      <label class="">Disability name:</label>
                      <input type="text" class="form-control" id="usr">
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="no-home">Have you ever taken vaccination ?</label>
                    </div>

                    <div class="checkbox">
                      <label><input type="checkbox" value="" class="no-home">Do you have any health inssurance policy ?</label>
                    </div>

                    <button class="btn btn-primary smart-button pull-right" @click="saveHealthInfo()">Next</button>
                    <button class="btn btn-primary smart-button" @click="pageNo--">Prev</button>

                </div>
            </div>
        </div>
    </div>
</div>