@section('content')
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
        <title>HOME PAGE</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <!-- <body background="imagesproject/proyecto2/16.jpg" alt="home banner"> -->
    <body>
      
        <div class="bg-image img1">
          
            <header>
                <div class="topnav">
                   <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                   
                    <a class="active" href="{{ url('/home') }}">HOME</a>
                    
                
                    <a href="{{ url('/skills') }}">MY SKILLS</a>
                    <a href="{{ url('/recommendations') }}">RECOMMENDATIONS</a>
                    <a href="{{ url('/experience') }}">EXPERIENCE</a>
                    <a href="{{ url('/works') }}">WORKS</a>
                    <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                    <a href="{{ url('/hires') }}">HIRE ME</a>
                  
                      
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                     {{ Auth::user()->name }}
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                        
          
              
                </div>
            
            </header>

        <div class="welcome">
            <h1><b><center>Welcome to my website</center></b></h1>
            </div>
            <h4><center>It is a great pleasure for me to recieve your visit and that my professional informtionis of your liking and meets what you are looking for. </center></h4>
         
    <center>
       <!-- <form action="HomePage.php" method="post" enctype="multipart/form-data" >    -->

       <button class="button" type="submit" name="download"><i class="fa fa-download"></i> <a href="algorand.pdf" download>Download Resume </a></button>
     
    </center>


         
        </div>
        <div class="bg-image2 img2">
            <div class="home-row">
                <div class="home-col1">
                    <h1> MY CUSTOMERS</h1>
                </div>
                <div class="home-col2">
                   <img src="imagesproject/proyecto2/brands/logo-1.png" width="180"height="150">
                   
                </div>
                <div class="home-col3">
                        <img src="imagesproject/proyecto2/brands/logo-2.png" width="180" height="150">
                </div>
                <div class="home-col4">
                    <img src="imagesproject/proyecto2/brands/logo-1.png" width="180" height="150">
                </div>
            </div>
            <div class="home-row">
                <div class="home-col1">
                    <h5>The best book to keep your reading consecular adapting elit. The laborum,reprehenderit nesourit espere ea perspective anmai edit</h5>
                </div>
                <div class="home-col2">
                    <img src="imagesproject/proyecto2/brands/logo-3.png" width="180" height="150">
                </div>
                <div class="home-col3">
                    <img src="imagesproject/proyecto2/brands/logo-4.png" width="180" height="150">
                </div>
                <div class="home-col4">
                    <img src="imagesproject/proyecto2/brands/logo-5.png" width="180" height="150">
                </div>
            </div>
        </div>
        <div class="bg-image3">
            <div class="contact-home">
                <h4>CONTACT ME</h4>
                <h6>Have a project you like to discuss?</h6>
                <hr>
            </div>
            <div class="cont-home-row2">
                <h4>Luis M <span style="color: #FFFFFF">Alvarez</span></h4>
                <h6>luismalvarez@gmail.com</h6>
                <hr>
            </div>
            </div>
         
        </div>
        
            <footer>
           
                    <div class="bottomnav">
                  
                             <a class="active" href="HomePage.php">HOME</a>
                             <a href="{{ url('/skills') }}">MY SKILLS</a>
                             <a href="{{ url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{url('/experience') }}">EXPERIENCE</a>
                             <a href="={{ url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{ url('/hires') }}">HIRE ME</a>
                             <a href="{{ url('/contact') }}">CONTACT</a>
                            
                            
                         </div>
             </footer>    
    
    </body>
</html>
