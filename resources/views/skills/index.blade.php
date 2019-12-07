
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
        <title>MY SKILLS</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
         <title>
            My Skills - Varshini Thatiparthi
        </title>
    </head>
    <body class="mySkills">
        <header>
            <div class="topnav">
               <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                <a href="{{url('/home') }}">HOME</a>
                <a class="active" href="{{url('/skills') }}">MY SKILLS</a>
                <a href="{{ url('/recommendations') }}">RECOMMENDATIONS</a>
                <a href="{{url('/experience') }}">EXPERIENCE</a>
                <a href="{{url('/works') }}">WORKS</a>
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
            <div class="row">
                    <div class="column-01">
                            <h1>SKILLS & <br>EXPERTISE</h1>
                            <p class=col-01-p>
                                Visual Designer,Front-end Developer,3D Designer
                            </p>
                            <div class="col-01-img">
                                <img src= "imagesproject/proyecto2/profile1.png" alt="Profile Image" width= "450" height="450">
                            </div>
                    </div>
                    <div class="column-02">
                        <h4>Branding</h4>
                        <p class=col-02-p>
                            Creating logos and posters for your company.
                        </p>
                        <h4>Desing</h4>
                        <p class=col-02-p>
                            maintaing the quality and productivity in the works to please my clients.
                        </p>
                        <div class=row-2>
                            <h4>Smart Digital Solutions <span style = "color: #777777">A Front-End Devloper</span></h4>
                            <img src="imagesproject/proyecto2/device01.png" alter="device one">
                            <div class=device-2>
                            <img src="imagesproject/proyecto2/device02.png" alter="device two">
                            </div>
                            <div class=device-3>
                                <img src="imagesproject/proyecto2/device03.png" alter="device three">
                            </div>
                        </div>
                    </div>
                    <div class=column-03>
                        <h4>Marketing</h4>
                        <p class=col-03-p>
                            Trend designs for a better experience of both images,logos and website.
                        </p>
                        <h4>
                            Programming
                        </h4>
                        <p class=col-03-p>
                            Developing applications and systems that meet the needs and streamlinethe work and experience of users.
                        </p>
                    </div>
            </div>
           
            <div class="heading-2">
                    <h1>EDUCATION</h1>
                    <p class=heading-2-p>I'm looking to expand my portfolio while I'm on top and while I'm young Luis M Alvarez <br> brings your context to 
                    life in stunning daily</p>
            </div>
           
            @foreach($skills as $skill) 
            <div class="expreience-row">
                <div class="column1">
                        <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$skill['monthone']}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$skill['monthtwo']}}</h5>
                        
                       <div class="column1-h2">
                            <h2> <span style="color: #00FFFF">{{$skill['year']}}</span></h2>
                        </div>
                        <div class="column1-r1-h4">
                           <h4>{{$skill['qualification']}}</h4>
                        </div>
                </div>
                <div class="column2">
                    <h2>{{$skill['heading']}}</h2>
                    <p class=column2-p>
                    {{$skill['university']}}
                    </p>
                </div>
                <hr>
                @if(Auth::user()->is_admin)  
                <a href="{{action('SkillsController@edit', $skill['id'])}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Edit</button></a>
                <form action="{{action('SkillsController@destroy', $skill['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endif
            </div>
            
            @endforeach
            @if(Auth::user()->is_admin)  
            <a href="{{action('SkillsController@create')}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Insert</button></a>
            @endif
         <footer>
           
                    <div class="bottomnav">
                         
                             <a  href="{{url('/home') }}">HOME</a>
                             <a class="active" href="{{url('/skills') }}">MY SKILLS</a>
                             <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{url('/experience') }}">EXPERIENCE</a>
                             <a href="{{url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{url('/hires') }}">HIRE ME</a>
                             <a href="{{url('/contact') }}">CONTACT</a>
                          
                          
                         </div>
             </footer>    
    </body>
</html>
     