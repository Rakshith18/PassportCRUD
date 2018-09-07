<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>

    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
</head>
<body>
<div class="container">
  
    @if(\Session::has('success'))
    <div class="alert alert-success">
        <p>{{ \Session::get('success')}}</p>
    </div><br/>
    @endif

    <div class="row">
     <div class="col-lg-12 margin-tb" >
        <div class="pull-left">
            <h2>Passport Appointment System</h2>
        </div>
    
    <div class="pull-right">
           <button class="btn btn-success" type="submit" onclick="document.location.href='{{route('passport.create')}}'"> + Add New Record</button>
    </div>
</div>
  </div>
    <table class="table table-stripped">
        <thread>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Date</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Passport Office</th>
                <th colspan="2">Action</th>
            </tr>
        </thread>
        <tbody>
            @foreach($passport as $passport)
            @php
            $date=date('Y-m-d',$passport['date']);
            @endphp
            <tr>
                <td>{{$passport['id']}}</td>
                <td>{{$passport['name']}}</td>
                <td>{{$date}}</td>
                <td>{{$passport['email']}}</td>
                <td>{{$passport['number']}}
                <td>{{$passport['office']}}</td>

                <td><a href="{{action('PassportController@edit', $passport['id'])}}" class="btn btn-warning">Edit</td>
                <td>
                    <form action="{{action('PassportController@destroy',$passport['id'])}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>    
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>