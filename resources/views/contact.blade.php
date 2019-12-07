
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="Phone.css"/>
        
          <script type="text/javascript" src="validation.js"></script>
        <title>Contact</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
    </head>
    <body class="mySkills">
   
            <header>
                    <div class="topnav">
                            <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                             <a href="{{url('/home') }}">HOME</a>
                             <a href="{{url('/skills') }}">MY SKILLS</a>
                             <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{ url('/experience') }}">EXPERIENCE</a>
                             <a href="{{url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{url('/hires') }}">HIRE ME</a>
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
             <form name="contact" method="post" action="{{ url('/contact')}}"> 
             {{ csrf_field() }}
                    <div class="container">
                            <h1><span style="color:white">Have a project you would like to discuss?</span></h1>
                            <hr>
                            <label for="name"><b><span style="color:white">Name</span></b></label>
                            <input type="text" placeholder="Enter Username" name="name" requied pattern= "[a-zA-Z]{3,}">
                            <label for="email"><b><span style="color:white">Email</span></b></label>
                            <input type="text" placeholder="Enter Email" name="email"  title="Enter valid email" required pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">
                        
                            <label for="message"><b><span style="color:white">Message</span></b></label>
                            <textarea name="content"></textarea>

                        
                            <div class="clearfix"></div>
                              <button class="log" type="submit" name="send_message_btn" onclick="validateContact()">SEND</button>
                            </div>      
                        </div>
            </form>
        </div>
       
        <footer>
           
            <div class="bottomnav">
                 
                     <a href="{{url('/home') }}">HOME</a>
                     <a href="{{url('/skills') }}">MY SKILLS</a>
                     <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                     <a href="{{ url('/experience') }}">EXPERIENCE</a>
                     <a href="{{url('/works') }}">WORKS</a>
                     <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                     <a href="{{url('/hires') }}">HIRE ME</a>
                     <a class="active" href="{{url('/contact') }}">CONTACT</a>
          
          
                 </div>
     </footer>  
     <?php ?>
    </body>
</html>