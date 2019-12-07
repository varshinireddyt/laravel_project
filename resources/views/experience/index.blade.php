
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
                <a href="{{url('/skills') }}">MY SKILLS</a>
                <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                <a class="active" href="{{url('/experience') }}">EXPERIENCE</a>
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
           
            <div class="heading-2">
                <h1>WORK EXPERIENCE</h1>
                <p class=heading-2-p>I'm looking to expand my portfolio while I'm on top and while I'm young Luis M Alvarez <br> brings your context to 
                life in stunning daily</p>
            </div>
            @foreach($experience as $skille)
            <div class="expreience-row">
            
                <div class="column1">
                    <h5>{{$skille['month']}}</h5>
                    <h2><span style = "color: 	#00FFFF">{{$skille['yearex']}}</span></h2>

                    <h4> {{$skille['company']}}</h4>
                    <p class="column1-p">{{$skille['role']}}</p>
                </div>
                <div class="column2">
                    <h2>{{$skille['retyperole']}}</h2>
                    <p class=column2-p>
                    {{$skille['description']}}
                    </p>
                    @if(Auth::user()->is_admin)  
                <a href="{{action('ExperienceController@edit', $skille['id'])}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Edit</button></a>
                <form action="{{action('ExperienceController@destroy', $skille['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endif
                <hr>
            </div>
            </div>
            @endforeach
            @if(Auth::user()->is_admin)  
            <a href="{{action('ExperienceController@create')}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Insert</button></a>
            @endif
         <footer>
           
                    <div class="bottomnav">
                         
                             <a  href="{{url('/home') }}">HOME</a>
                             <a href="{{url('/skills') }}">MY SKILLS</a>
                             <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a class="active" href="{{ url('/experience') }}">EXPERIENCE</a>
                             <a href="{{url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{url('/hires') }}">HIRE ME</a>
                             <a href="{{ url('/contact') }}">CONTACT</a>
                          
                               
                          
                         </div>
             </footer>    
    </body>
</html>
     
          