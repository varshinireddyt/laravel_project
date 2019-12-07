
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
        <title>RECOMMENDATIONS</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
         
    </head>
    <body class="mySkills">
        <header>
                <div class="topnav">
                        <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                         <a href="{{ url('/home') }}">HOME</a>
                         <a href="{{ url('/skills') }}">MY SKILLS</a>
                         <a class="active" href="{{ url('/recommendations') }}">RECOMMENDATIONS</a>
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
        <div class="wrapper">
            <div class="rec-heading">
            <h1>REFERENCES</h1>
            </div>
            <div class="slideshow-container">

                    <!-- Full-width slides/quotes -->
                    <div class="mySlides">
                        <div class="slide-row">
                            <div class="slide-col-1">
                                <img src="imagesproject/proyecto2/testimonials/yury.jpg" alt="ref1" width="200" height="200">
                            </div>
                            <div class="slide-col-2">
                                <p> "As always, great creative thinking for the best solution. Luis Miguel is by far the most professional and knowledgeable provider
                                    I worked with. I will hire him again :)"
                                </p>
                                <h5>Yury Jajitzky</h5>
                            </div>
                        </div>
                       
                    </div>
                    <!-- Next/prev buttons -->
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                  </div>
                  
                  <!-- Dots/bullets/indicators -->
                  <div class="dot-container">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                    <span class="dot" onclick="currentSlide(3)"></span>
                  </div>
        </div>
       <footer>
           
                    <div class="bottomnav">
                         
                             <a href="{{ url('/home') }}">HOME</a>
                             <a href="{{ url('/skills') }}">MY SKILLS</a>
                             <a class="active" href="{{ url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{ url('/experience') }}">EXPERIENCE</a>
                             <a href="{{ url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{ url('/hires') }}">HIRE ME</a>
                              <a href="{{ url('/contact') }}">CONTACT</a>
                      
                            
                    
                           
                         </div>
             </footer>  
    </body>
</html>