@extends('layouts.app')

@section('styles')
    body {
        font-family : 'Roboto','RobotoDraft',sans-serif;
        color : rgba(0,0,0,0.87);
    }

@endsection

@section('content')
<div class="container">
    <public-info inline-template>
        <div>
            <div v-if="pageNo == 0">
                @include('partials.get-started')
            </div>            
            <div v-if="pageNo == 1">
                @include('partials.basic-info')
            </div>
            <div v-if="pageNo == 2">
                 @include('partials.identity-numbers')
            </div>
            <div v-if="pageNo == 3">
                 @include('partials.address-info')
            </div>
            <div v-if="pageNo == 4">
                @include('partials.education-info')
            </div>     
            <div v-if="pageNo == 5">
                @include('partials.employment-info')
            </div>
            <div v-if="pageNo == 6">
                @include('partials.health-info')
            </div>   
        </div>
    </public-info >
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
