<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Insert A Cart</h2><br  />
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

      <form method="post" action="{{url('work')}}" enctype="multipart/form-data">
      
        {{csrf_field()}}

      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="image">Image:</label>
            <input type="file" class="form-control" name="image">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input1">Input1:</label>
              <input type="text" class="form-control" name="input1">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input2">Input2:</label>
              <input type="text" class="form-control" name="input2">
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

