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
      <form method="post" action="{{action('SkillsController@update', $id)}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="monthone">Month one:</label>
              <input type="text" class="form-control" name="monthone" value="{{$skill->monthone}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="monthtwo">Month two:</label>
              <input type="text" class="form-control" name="monthtwo" value="{{$skill->monthtwo}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="year">Year:</label>
              <input type="text" class="form-control" name="year" value="{{$skill->year}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="qualification">Qualification:</label>
              <input type="text" class="form-control" name="qualification" value="{{$skill->qualification}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="heading">Heading:</label>
              <input type="text" class="form-control" name="heading" value="{{$skill->heading}}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="university">University:</label>
              <input type="text" class="form-control" name="university" value="{{$skill->university}}">
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