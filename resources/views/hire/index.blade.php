<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
        <title>HIRE ME</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
            <header>
                <div class="topnav">
                   <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                    <a href="{{ url('/home') }}">HOME</a>
                    <a href="{{ url('/skills') }}">MY SKILLS</a>
                    <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                    <a href="{{url('/experience') }}">EXPERIENCE</a>
                    <a href="{{ url('/works') }}">WORKS</a>
                    <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                    <a class="active" href="{{ url('/hires') }}">HIRE ME</a>
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
    <body class = "mySkills">
        <div class="wrapper">
        @if (\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
           <div class="hireme-heading"> <h1>HIRE ME</h1></div>
           <p class=hireme-p>I'm looking to expand my portfolio while I'm on top and while I'm young Luis M Alvarez <br> brings your context to 
            life in stunning daily</p>

            @foreach ($hires as $hire)
           <div class="hireme-row">
                <div class="hireme-col">
                    <img src="{{ url('app/public/' .$hire->name) }}" alt="{{$hire->name}}" width="300" height="250" class="img-responsive">
                </div>
                <div class=hireme-col-2>
                    <h4>{{ $hire->rate}}</h4>
                    <h5>{{ $hire->input1}}</h5>
                    <p class="hireme-col-2-p"> &#10003 {{ $hire->input2}}<br> &#10003 {{ $hire->input3}}<br> &#10003 {{ $hire->input4}}</p>
                    <h3>{{ $hire->input5}}</h3>
                    @if(Auth::user()->is_admin)  
                    <a href="{{action('HireController@edit', $hire['id'])}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Edit</button></a>
                    <form action="{{action('HireController@destroy', $hire['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endif

                </div>
                <hr>
            </div>
            @endforeach
            @if(Auth::user()->is_admin)  
            <a href="{{action('HireController@create')}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Insert</button></a>
            @endif
        <div class="heading-2">
            <h1>SKIILS & EXPERTISE</h1>
            <p class="heading-2-p">I'm looking to expand my portfolio while I'm on top and while I'm young Luis M Alvarez <br> brings your context to 
                life in stunning daily</p>
        </div>
        <div class="row-skill">
            <div class="col-skill-1">
                <h3>SOFTWARE</h3>
                <p>HTML <br> <meter min="0" max="100" value="80"></meter></p>
                <p>CSS <br> <meter min="0" max="100" value="73"></meter></p>
                <p>Bootstrap <br> <meter min="0" max="100" value="79"></meter></p>
                <p>Blender <br> <meter min="0" max="100" value="57"></meter></p>
                <p>Photoshop <br> <meter min="0" max="100" value="63"></meter></p>

            </div>
            <div class="col-skill-2">
                <H3>RECOGNITION</H3>
                <h4>INTERNATIONAL DESIGN AWARDS 2014</h4>
                <p>15 March 2014/New York State University <br>Place 3
                </p>
                <h4>LOGO DESIGN CONTEST CICAGO 2013</h4>
                <p>12 October 2013/ Chicago House of Art <br>Place 2</p>
                <h4>WEB DESIGN CONTEST NEW York 2013</h4>
                <p>12 October 2013/ New York Technology <br> Place 2</p>
            </div>
        </div>
        <div class="row-skill">
            <div class="col-skill-1">
                <h3>LANGUAGE SKILLS</h3>
                <p>Spanish <br> <meter min="0" max="100" value="40"></meter></p>
                <p>English <br> <meter min="0" max="100" value="80"></meter></p>
                <p>Italian Basic <br> <meter min="0" max="100" value="60"></meter></p>
                <h3>HOBBIES & INTERESTS</h3>
                <ul>
               <li>Sports</li>
               <li>Photography</li>
               <li>Marketing</li>
               <li>Movies</li>
               <li>Travel</li>
               </ul>

            </div>
            <div class="col-skill-2">
                <h3>KNOWLEDGE</h3>
                <p>&#10003 Google Analytics</p>
                <p>&#10003 3D Modeling</p>
                <p>&#10003 Web Usability</p>
                <p>&#10003 Grid Layout</p>
                <p>&#10003 Photo manipulation</p>

            </div>
        </div>
     
    </div>
     <footer>
           
                    <div class="bottomnav">
                         
                             <a href="{{url('/home') }}">HOME</a>
                             <a href="{{ url('/skills') }}">MY SKILLS</a>
                             <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{url('/experience') }}">EXPERIENCE</a>
                             <a href="{{url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a class="active" href="{{ url('/hires') }}">HIRE ME</a>
                             <a href="{{url('/contact') }}">CONTACT</a>
                              
                           
                           
                            
                         </div>
             </footer>  
</body>
</html>
