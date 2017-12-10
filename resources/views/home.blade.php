@extends('layouts.app')

@section('styles')
    body {
        background-color : white !important;
        font-family : 'Roboto','RobotoDraft',sans-serif;
    }
@endsection

@section('content')
<div class="container">
    <div class="row">
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
                            <a href="{{ route('information-welcome') }}" class="btn btn-sm btn-primary">Next</a><br><br>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6">
                        <div class="panel panel-default">
                          <div class="card-block">
                            <h3 class="card-title">Adding information in bulk</h3>
                            <p class="card-text">Use the template to feed up the information in bulk so system will work effectively.</p>
                            <a href="#" class="btn btn-sm btn-primary">Next</a><br><br>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
