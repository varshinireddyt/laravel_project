
<!DOCTYPE html>
<html lang="en">
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        
        <link rel="stylesheet" type="text/css" href="portfolio.css">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" media="screen and (min-width: 900px)" type="text/css" href="portfolio.css">
        <link rel="stylesheet" media='screen and (max-width: 600px)' href="css/phone.css"/>
        <title>WORKS</title>
        <style>
                @import url('https://fonts.googleapis.com/css?family=Rajdhani&display=swap');
        </style>
         
    </head>
  
        <header>
            <div class="topnav">
               <div class="logo"> <img src="imagesproject/proyecto2/logo2.png"> </div>
                <a href="{{url('/home') }}">HOME</a>
                <a href="{{url('/skills') }}">MY SKILLS</a>
             
                <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                <a href="{{url('/experience') }}">EXPERIENCE</a>
                <a class="active" href="{{url('/works') }}">WORKS</a>
                <a href="http://varshinithatiparthi.uta.cloud/blog">BLOG</a>
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
 <body class="mySkills">
        <div class=wrapper>
                
            <div class="work-heading1">
                <h1>MY LATEST WORK</h1> </div>
                <p class="workheading-p">I'm looking to expand my portfolio while I'm on top and while I'm young Luis M Alvarez <br> brings your context to 
                    life in stunning daily</p>
           
            <div class="workbutton">
                <!-- <form action="AdminWorks.php" method="post" > -->
            <button class="showall" name="showall">SHOW ALL</button>
            <button class="website" name="website">WEBSITES</button>
            <button class="apps" name="apps">APPS</button>
            <button class="design" name="design">DESIGN</button>
            <button class="photography" name="photography">PHOTOGRAPHY</button>
            <!-- </form> -->
            </div>

            @foreach ($works as $work)
            <div class="imgrow">
              
              <div class="img-col-1">
                  <img src = "{{ url('app/public/' .$work->image) }}" width = 150 height ="200">
                  <div class="imgborder"></div>
                     
                
                  <h4>{{ $work->input1}}</h4>
                  <h6>{{ $work->input2}}</h6>
                  
              </div>
              @if(Auth::user()->is_admin)  
              <a href="{{action('WorkController@edit', $work['id'])}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Edit</button></a>
                    <form action="{{action('WorkController@destroy', $work['id'])}}" method="post">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="DELETE">
            <button class="btn btn-danger" type="submit">Delete</button>
          </form>
          @endif
          </div>
              @endforeach

              @if(Auth::user()->is_admin)  
              <a href="{{action('WorkController@create')}}" class="btn btn-warning"><button type="submit" value="submit" class="showall">Insert</button></a>
          
           
          @endif
     
                
        <footer>
           
                    <div class="bottomnav">
                         
                             <a href="{{url('/home') }}">HOME</a>
                             <a href="{{url('/skills') }}">MY SKILLS</a>
                             
                             <a href="{{url('/recommendations') }}">RECOMMENDATIONS</a>
                             <a href="{{url('/experience') }}">EXPERIENCE</a>
                             <a class="active" href="{{url('/works') }}">WORKS</a>
                             <a href="http://varshinithatiparthi.uta.cloud/blog/">BLOG</a>
                             <a href="{{url('/hires') }}">HIRE ME</a>
                             
                               
                        
                         </div>
             </footer>  
    </body>
    <style>
        .table{
            display: table;         
            width: auto; 
            border-spacing: 50px;  
}
    </style>
</html>
