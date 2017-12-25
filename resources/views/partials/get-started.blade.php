<div class="row" v-if="mode">
    <div class="col-md-8 col-md-offset-2 info-card welcome">
        <div class="panel panel-success no-border">
            <div class="panel-body">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="text-muted"> <strong>
                             SmartLife
                        </strong></h3>
                    </div>
                    <div class="col-sm-8" v-if="mode == 'single'">
                        <h3 class=""> <strong>
                             Let's get started.
                        </strong></h3>
                        <p class="para">By giving all your current information 
                        regarding your health, education, employment, income etc
                        you are strengthening SmartLife system to <strong>generate useful and acuurate reports </strong> about ongoing country's growth.
                        </p>

                        <p>Obviously, country's growth is depend upon the every individual.
                        Country will grow as we grow.
                        </p>
                        
                        <p>We'll guide you through filling up all information, Seems like a long question-answer session but <strong>will make it intresting.</strong>
                        As your all information is neccessary for the system to work productivly
                        </p>
                        <p>
                        <strong>Let's go and stay with us till the end :)</strong>
                        </p>
                        
                        <button class="btn btn-primary smart-button" @click="pageNo++">Your basic info</button>
                    </div>
                    <div class="col-sm-8" v-else-if="mode == 'bulk'">
                        <p>Download <strong>smartLife</strong> template and fill it up with atleast information of more than 10 person or above.</p>
                        <p>Then, upload the filled temlpate to smartLife. then system schedule the job to push it into database.</p>
                        <div class="col-md-6">
                             <button class="btn btn-default" data-hash="basic-info" data-completion="5%">Download template</button>
                             <h6>Download and fill it up</h6>
                        </div>
                        <div class="col-md-6">
                             <button class="btn btn-primary" data-hash="basic-info" data-completion="5%">Upload template</button>
                             <h6>Upload and request the system to push it on behalf of you.</h6>

                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row" v-else>
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-primary no-border">
            <div class="panel-body text-center">
                <h3><strong> Be the help in country's growth. </strong></h3>
                <p>As a volunteer you have became very important asset of 
                <strong>SmartLife</strong> system, you are responsible to feed  the information needed by the system.</p>
                <div class="row ">
                  <div class="col-sm-6">
                    <div class="panel panel-default">
                      <div class="card-block">
                        <h3 class="card-title">Adding information manually</h3>
                        <p class="card-text">You can add information about yourslves, friends, relatives or friend manually.</p>
                        <button class="btn btn-sm btn-primary" @click="mode = 'single'">Next</button><br><br>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="panel panel-default">
                      <div class="card-block">
                        <h3 class="card-title">Adding information in bulk</h3>
                        <p class="card-text">Use the template to feed up the information in bulk so system will work effectively.</p>
                        <button class="btn btn-sm btn-primary" @click="mode = 'bulk'">Next</button><br><br>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>