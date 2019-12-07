<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Edit A Cart</h2><br  />
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div><br />
      @endif
      <form method="post" action="{{action('HireController@update', $id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="name">Image:</label>
            <input type="file" class="form-control" name="name" value="{{$hire->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="rate">Rate:</label>
              <input type="text" class="form-control" name="rate" value="{{$hire->rate}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input1">Input1:</label>
              <input type="text" class="form-control" name="input1" value="{{$hire->input1}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input2">Input2:</label>
              <input type="text" class="form-control" name="input2" value="{{$hire->input2}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input3">Input3:</label>
              <input type="text" class="form-control" name="input3" value="{{$hire->input3}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input4">Input4:</label>
              <input type="text" class="form-control" name="input4" value="{{$hire->input4}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="input5">Input5:</label>
              <input type="text" class="form-control" name="input5" value="{{$hire->input5}}">
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
     
	  <a href="{{ url()->previous() }}" class="btn btn-default">Back</a>

    </div>