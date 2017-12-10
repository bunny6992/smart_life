<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="css/app.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F7F7F7;
                color: black;
                font-family : 'Roboto','RobotoDraft',sans-serif;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
                width: 100%;
                height: 79%;
                /*border-bottom:  1px solid black;*/
                background-image: url('images/growth.jpg');
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                /*font-weight: bold; */
                color: white;
            }

            .links > a {
                /*color: #636b6f;*/
                color: white;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Remove border and add padding to thumbnails */
            .thumbnail {
                padding: 0 0 15px 0;
                border: none;
                border-radius: 0;
            }

            .thumbnail p {
                margin-top: 15px;
                color: #555;
            }
            .img-responsive {
                width: 100% !important;
                height: 140px !important;
            }
            .no-border {
                border: none !important;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-left links">
                    <a href="#">SmartLife</a>
                </div>
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md">
                    SmartLife
                </div>

                <div class="links">
                    <a href="https://github.com/laravel/laravel">
                        Let's make an India a better nation!
                    </a>
                </div>

            </div>

        </div>
        <div class="container">
           
            <div class=" row panel panel-default text-center no-border">
                <h1>
                    <strong>Join</strong> our mission to make an India a better place to live.
                    
                </h1> 
                <p><strong>What we do!</strong></p> 
                <strong>
                    
                <i class="fa fa-3x fa-angle-double-down" aria-hidden="true"></i>

                </strong>

            </div>
            
            <div class="row panel panel-default text-center no-border">
                <div class="col-sm-8 ">
                        <div class="" style="padding-top: 80px">
                        <h3>Our goal is to collect essential information 
                        about country and country's people based on multiple attributes
                        </h3>
                        </div>
                </div>
                <div class="col-sm-4">
                    <i class="fa fa-info-circle text-primary" aria-hidden="true" style="font-size:300px"></i>

                </div>
            </div>

            <div class="row panel panel-default text-center no-border">
                <div class="col-sm-4">
                    <i class="fa fa-sitemap text-success" aria-hidden="true" style="font-size:300px"></i>

                </div>
                <div class="col-sm-8 ">
                        <div class="" style="padding-top: 80px">
                        <h3>Organize the collected information in manner 
                        so it will become useful and accessible to everyone in the form of statastics and reports.
                        </h3>
                        </div>
                </div>
            </div>

            <div class="row text-center">

                <div class="col-sm-4">
                    <div class="thumbnail">
                      <img src="images/attr.jpg" alt="Paris" class="img-responsive">
                      <p><strong>Intel</strong></p>
                      <p>
                        We are collecting data on multiple attributes such as health,
                        education, employment
                      </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                      <img src="images/image.jpg" alt="Paris" class="img-responsive">
                      <p><strong>Analysis</strong></p>
                      <p>
                        We are generating some graphical and statastical reports
                        to make data more understandable and quick to grasp, so we can make better decisions.
                      </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="thumbnail">
                      <img src="images/volunteer.jpg" alt="Paris" class="img-responsive">
                      <p><strong>Be volunteer</strong></p>
                      <p>Every single person can be a help to achive our mission.</p>
                    </div>
                </div>
            </div>

            <div class="row jumbotron">
                    <h2>Why we exists !</h2>

                <div class="col-sm-5">
                    <p>To better understand where we are in every espect of country's grwoth</p>
                    <p>we need some sort of system to maintain and analyse
                    all intel which belongs to the country.</p>
                    <p>having such system allow us to study about the roadblocks which have been stoping the growth in specific area such as education. and will give us a better aportunity to come up with a solution.</p>
                </div>

                <div class="col-sm-7">
                    <img src="images/why.jpg" alt="Growth" class="img-thumbnail" width="500" height="500">
                </div>
            </div>
        </div>        
    </body>

    <script src="js/app.js"></script>

</html>
