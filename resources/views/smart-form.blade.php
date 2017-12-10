@extends('layouts.app')

@section('styles')
    body {
        <!-- background-color : white !important; -->
        font-family : 'Roboto','RobotoDraft',sans-serif;
        color : rgba(0,0,0,0.87);

    }

    <!-- .para {
        font-style: normal;
        font-variant: normal;
        font-weight: 400;
        font-stretch: normal;
        <!-- font-size: 0.8125rem; -->
        line-height: 1.53846;
        font-family: Roboto, RobotoDraft, sans-serif;
    } -->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 progress-box hide">
            <div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="70"
              aria-valuemin="0" aria-valuemax="100">
                <span class="sr-only">70% Complete</span>
              </div>
            </div>
        </div>
        <div class="col-md-8 col-md-offset-2 info-card welcome">
            
            <div class="panel panel-success no-border">
                <div class="panel-body">
                    <div class="col-sm-4">
                        <h3 class="text-muted"> <strong>
                             SmartLife
                        </strong></h3>
                    </div>
                    <div class="col-sm-8">
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
                        @if($routeName == 'information-welcome')
                        <p>We'll guide you through filling up all information, Seems like a long question-answer session but <strong>will make it intresting.</strong>
                        As your all information is neccessary for the system to work productivly
                        </p>
                        <p>
                        <strong>Let's go and stay with us till the end :)</strong>
                        </p>
                        
                        <button class="btn btn-primary smart-button" data-hash="basic-info" data-completion="5%">Your basic info</button>
                        @elseif ($routeName == 'information-welcome-in-bulk')
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
                        @endif                           
                    </div>

                </div>
            </div>
        </div>

        @include('partials.basic-info')
        @include('partials.identity-numbers')
        @include('partials.address-info')
        @include('partials.education-info')
        @include('partials.health-info')
        @include('partials.employment-info')




    </div>
</div>
@endsection

@section('scripts')
    
    <script type="text/javascript">
        function InfoCardPresenter(hash)
        {
            hash = hash || null;
            
            if (hash === 'welcome' || hash == null) {
                window.location.hash = '';

                $('div.info-card').fadeOut();
                setTimeout(function() { 
                    $('div.welcome').fadeIn(); 
                }, 500);
                
                return;
            }

            window.location.hash = hash;
            
            $('div.info-card').fadeOut();
            setTimeout(function() {
                $('div.' + hash).fadeIn();

                var progress = '';
                if(hash === 'basic-info') {
                   progress = "10%"; 
                } else if (hash === 'identity-numbers') {
                   progress = "20%"; 
                } else if (hash == 'address-info') {
                   progress = "40%"; 
                } else if (hash === 'education-info') {
                   progress = "60%";     
                } else if (hash === 'health-info') {
                    progress = "80%";  
                } else if (hash === 'employment-info') {
                   progress = "100%";  
                }

                $('div.progress-box').removeClass('hide');
                $('div.progress-bar').css('width', progress);

            }, 500);


        }

        $(document).ready(function() {
            $('.div.no-home-danger').hide();
            if (window.location.hash !== '') {
                InfoCardPresenter(window.location.hash.replace('#', ''));
            } else {
                InfoCardPresenter();
            }
            
            $(document).on('click', '.smart-button', function() {
                var nextInfoCard = $(this).data('hash');
                var progress = $(this).data('completion');
                console.log(nextInfoCard);
                InfoCardPresenter(nextInfoCard);
            });

            $(document).on('click', '.address-same', function() {
                if ($(this).prop('checked')) {
                    $('div.hometown-addr').fadeOut();
                } else {
                    $('div.hometown-addr').fadeIn();
                }
            });

             $(document).on('click', '.no-home', function() {
                if ($(this).prop('checked')) {
                    $('div.hometown-addr').fadeOut();
                    $('div.current-addr').fadeOut();

                } else {
                    $('div.hometown-addr').fadeIn();
                    $('div.current-addr').fadeIn();

                }
            });
            
            $(document).on('click', 'input[name="tenth-class"]', function() {
                if ($(this).val() === '1') {
                    $('div.education-panel.school').removeClass('hide');
                    $('div.education-panel.collage').removeClass('hide');
                    $('div.education-panel.institute').removeClass('hide');

                } else if ($(this).val() === '0') {
                    $('div.education-panel.school').removeClass('hide');
                    $('div.education-panel.collage').addClass('hide');
                    $('div.education-panel.institute').removeClass('hide');
                } else {

                }
            });

            $(document).on('click', '.no-education', function() {
                
                if ($(this).prop('checked')) {
                    $('div.education-panel.school').addClass('hide');
                    $('div.education-panel.collage').addClass('hide');
                    $('div.education-panel.institute').addClass('hide');
                    $('.tenth-class-checker').hide();
                } else {
                    $('div.education-panel.school').removeClass('hide');
                    $('div.education-panel.collage').removeClass('hide');
                    $('div.education-panel.institute').removeClass('hide');
                    $('.tenth-class-checker').show();

                }
            });

            $(document).on('click', '.have-d', function() {
                if ($(this).prop('checked')) {
                    $('div.disease-box').removeClass('hide');

                } else {
                    $('div.disease-box').addClass('hide');
                }
            });

            $(document).on('click', '.have-handi', function() {
                if ($(this).prop('checked')) {
                    $('div.disability-box').removeClass('hide');

                } else {
                    $('div.disability-box').addClass('hide');
                }
            });

            $(document).on('click', '.no-job', function() {
                if ($(this).prop('checked')) {
                    $('div.employment-panel').fadeOut();

                } else {
                    $('div.employment-panel').fadeIn();
                }
            });

            $(window).on('hashchange', function(e) {
                var hash = window.location.hash.replace('#', '');
                if (hash === '') {
                    hash = 'welcome';
                }
                console.log(hash);
                InfoCardPresenter(hash);
            });
        
        });
    
    </script>

@endsection
