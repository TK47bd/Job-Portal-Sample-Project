
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WorkPortal</title>
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('css/jb_index.css') }}">
</head>
<body>
    <div class="secondaryNav">
        <div class="socialLink">
            <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-twitter-square ml-2" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram ml-2" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-telegram ml-2" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-github ml-2" aria-hidden="true"></i></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="backgroundCust">
    
        <div class="clearfix"></div>  
        <div class="carousel-caption titleTxt">
            <h2 id="txt_change" class="text-danger titleCust">Start posting your dreams for free now!</h2>
        </div>
        <div class="clearfix"></div>

        <div class="cliCan ">
            <div class="cliCust col-md-6 float-left" onmouseover="cliChange_Fucnction()" onmouseout="cliRestore_Fucnction()" >
                    <h4 class="text-center text-danger titleCust">Clients</h4>
                    <div class="clearfix"></div>
                    <p class="text-center paraCust">Are you Looking for recruitment?</p>
                    <div class="clearfix"></div>
                    <div class="btnCust mb-3" style="margin-left: 42%;">
                      <a href="{{ route('Client-login') }}" class="btn btn-outline-success font-weight-bold">Click here</a> 
                    </div>
            </div>
            </div>
            <div class="canCust col-md-6 ml-5 float-right" onmouseover="canChange_Fucnction()" onmouseout="canRestore_Fucnction()">
              <h4 class="text-center text-danger titleCust">Candidates</h4>
              <div class="clearfix"></div>
              <p class="text-center paraCust">Are you Looking for a job or task?</p>
              <div class="clearfix"></div>
              <div class="btnCust mb-3" style="margin-left: 41%;">
                <a href="{{ route('User-login') }}" class="btn btn-outline-success font-weight-bold">Click here</a> 
              </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    
    <div class="cleafix"></div>

    <div class="middle container">
        <div class="title">
            <h3 class="titleCust">Explore <i class="fa fa-search" aria-hidden="true"></i></h3>
        </div>
        <br>
        <div class="clearfix"></div>
        <div class="xploreImg float-left p-2 mr-3" style="width: 30%;">
            <div class="xploreOne" style="position: relative;">
                <img src="images/photo-of-two-people-shakehands-2058130.jpg" class="img-fluid" alt="Xplore img1" style="width: 100%;">
                <div class="overlay">
                    <a href="#">
                        <i class="fa fa-link" style="margin: 12px;" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="xploreImg float-left p-2 mr-3" style="width: 30%;">
            <div class="xploreTwo" style="position: relative;">
                <img src="images/close-up-photo-of-man-wearing-black-suit-jacket-doing-thumbs-684385.jpg" class="img-fluid" alt="Xplore img2" style="width: 100%;">
                <div class="overlay">
                    <a href="#">
                        <i class="fa fa-link" style="margin: 12px;" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>    
        <div class="xploreImg float-left p-2" style="width: 30%;">
           <div class="xploreThree" style="position: relative;">
                <img src="images/black-and-white-business-career-close-up-221164.jpg" class="img-fluid" alt="Xplore img3" style="width: 100%;">
                <div class="overlay">
                    <a href="#">
                        <i class="fa fa-link" style="margin: 12px;" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="features_wrap">
        <div class="features_in">
            <div class="container">
                <h2 class="text-warning mt-3 text-center titleCust">We Provide</h2>
                <div class="features mt-5">
                    <div class="featuresRow mb-2">
                        <div class="f1 fps float-left ml-3">
                            <i class="fa fa-industry" style="color: cyan; font-size: 40px;" aria-hidden="true"></i>
                            <div class="clearfix"></div>
                            <h4 class="text-warning">Industry</h4>
                            <p class="text-light">Get your dream place based on your skill</p>
                        </div>
                        <div class="f2 fps float-left ml-5">
                            <i class="fa fa-line-chart" style="color: cyan; font-size: 40px;" aria-hidden="true"></i>
                            <div class="clearfix"></div>
                            <h4 class="text-warning">Marketing</h4>
                            <p class="text-light">Raise at the top of the market</p>
                        </div>
                        <div class="f3 fps float-left ml-5">
                            <i class="fa fa-briefcase" style="color: cyan; font-size: 40px;" aria-hidden="true"></i>
                            <div class="clearfix"></div>
                            <h4 class="text-warning">Salary</h4>
                            <p class="text-light">Get appropriate salary accoriding to your skills</p>
                        </div>
                        <div class="f4 fps float-left ml-5">
                            <i class="fa fa-bolt" style="color: cyan; font-size: 40px;" aria-hidden="true"></i>
                            <div class="clearfix"></div>
                            <h4 class="text-warning">Boost</h4>
                            <p class="text-light">Boost yourself to touch your dream</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
                <h5 class="mt-5 text-center text-light"><i class="fa fa-quote-left" style="color: beige;" aria-hidden="true"></i><span> Dreams don't work unless you take action <small>- Roy T. Bennett</small> </span><i class="fa fa-quote-right" style="color: beige;" aria-hidden="true"></i></h5>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    
    <div class="clearfix"></div>

    @include('layout.footer')								


    <script>
        function cliChange_Fucnction(){
            document.getElementById('txt_change').innerHTML='<h4>Complete your tasks or hire new employee easily!!</h4>';
        };
        function cliRestore_Fucnction(){
            document.getElementById('txt_change').innerHTML='Realize your Dream';
        };        
        function canChange_Fucnction(){
            document.getElementById('txt_change').innerHTML='<h4>Post a beutiful bio to grab your dream job or tasks</h4>';
        };
        function canRestore_Fucnction(){
            document.getElementById('txt_change').innerHTML='Start posting your dreams for free now!';
        };
    </script>
        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
</body>
</html>