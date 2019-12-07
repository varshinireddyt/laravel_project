<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('ExperienceController@update', $id)}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="month">Month:</label>
              <input type="text" class="form-control" name="month" value="{{$skille->month}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="yearex">Year:</label>
              <input type="text" class="form-control" name="yearex" value="{{$skille->yearex}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="company">Company:</label>
              <input type="text" class="form-control" name="company" value="{{$skille->company}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="role">Role:</label>
              <input type="text" class="form-control" name="role" value="{{$skille->role}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="retyperole">Retype Role:</label>
              <input type="text" class="form-control" name="retyperole" value="{{$skille->retyperole}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="description">University:</label>
              <input type="text" class="form-control" name="description" value="{{$skille->description}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Update</button>
          </div>
        </div>
      </form>
      // back implementation as a link	
	  <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

    </div>