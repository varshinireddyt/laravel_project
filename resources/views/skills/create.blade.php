<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      @if (\Session::has('success'))
      <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
      </div><br />
      @endif
     
      <form method="post" action="{{url('skills')}}" enctype="multipart/form-data">
      
        {{csrf_field()}}
        <h2>Insert Education</h2><br  />
      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="monthone">Month One:</label>
            <input type="text" class="form-control" name="monthone">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="monthtwo">Month two:</label>
              <input type="text" class="form-control" name="monthtwo">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="year">Year:</label>
              <input type="text" class="form-control" name="year">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="qualification">Qualifiication:</label>
              <input type="text" class="form-control" name="qualification">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="heading">Heading:</label>
              <input type="text" class="form-control" name="heading">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="university">university:</label>
              <input type="text" class="form-control" name="university">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>

