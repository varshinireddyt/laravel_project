<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example  </title>
    <link rel="stylesheet" href="sass/app.scss">
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

      <form method="post" action="{{url('hire')}}" enctype="multipart/form-data">
      
        {{csrf_field()}}

      <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CoinName">Image:</label>
            <input type="file" class="form-control" name="name">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Rate">Rate:</label>
              <input type="text" class="form-control" name="rate">
            </div>
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
              <label for="input3">Input3:</label>
              <input type="text" class="form-control" name="input3">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input4">Input4:</label>
              <input type="text" class="form-control" name="input4">
            </div>
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input5">Input5:</label>
              <input type="text" class="form-control" name="input5">
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

