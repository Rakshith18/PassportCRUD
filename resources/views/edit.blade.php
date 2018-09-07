<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laravel CRUD Example  </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <script  data-src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
  </head>

<body>
<div class="container" style="background-color:lightblue">
	<div class="row">
    	<div class="col-md-4"></div>
    	<div class="col-md-6">
      <h2>Update Information</h2><br/>
     </div>
     </div>
      <form method="post" action="{{action('PassportController@update',$id)}}">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="PATCH">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="Name">Name:</label>
            <input type="text" class="form-control" name="name" value="{{$passport->name}}">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email" value="{{$passport->email}}">
            </div>
          </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Number">Phone Number:</label>
              <input type="text" class="form-control" name="number" value="{{$passport->number}}">
            </div>
          </div>
       
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
                <label>Passport Office : </label>
                <select name="office">
                  <option value="Bangalore" @if($passport->office=="Bangalore") selected @endif>Bangalore</option>  
                  <option value="Mumbai" @if($passport->office=="Mumbai") selected @endif >Mumbai</option>
                  <option value="Chennai" @if($passport->office=="Chennai") selected @endif >Chennai</option>
                  <option value="Delhi" @if($passport->office=="Delhi") selected @endif>Delhi</option>  
                 
                </select>
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4" >
            <button type="submit" class="btn  btn-lg btn-success" style="margin-left:38px">Update</button>
            
      <a class="btn btn-lg btn-primary" href="{{route('passport.index')}}">Back</a>
   
          </div>
        </div>
      </form>
    </div>
   
</body>
</html>