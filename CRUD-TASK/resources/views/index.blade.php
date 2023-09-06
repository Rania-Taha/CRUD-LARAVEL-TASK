<!doctype html>
<html lang="en">
  <head>
    <title> View </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <br>
    <br>
    <br>
     <center>  <h3> List Of Courses</h3> </center>
     <hr>
     <br>
     @if (Session::has('success'))
     <div class="alert alert-success" role="success" style="width: 13%; margin-left: 13%"> {{ Session::get('success')}}</div>
         
     @endif

     @if (Session::has('error'))
     <div class="alert alert-error" role="alert"> {{ Session::get('error')}}</div>

     @endif
     <a class="btn btn-success" href="{{route('create.course')}}" style="margin-left: 13%"> + Add new Course</a>
     <br>
     
     <br>
    <center> <table class="table table-bordered " style="width: 75% ; text-align: center;">
         <thead style=" background-color: ااrgb(154, 167, 158);
         font-weight: bold;">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Course</th>
            <th scope="col">Description</th>
            <th scope="col">Time</th>
            <th scope="col">Teacher</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          
       
            @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->Name }}</td>
                <td>{{ $item->Description }}</td>
                <td>{{ $item->Time }}</td>
                <td>{{ $item->Teacher }}</td>
                <td>
                    <a class="btn btn-primary" href="{{route('edit.course',$item->id)}}">update</a>
                    <a class="btn btn-danger mr-3" href="{{ route('delete.course',$item->id) }}">delete</a>
                </td>
            </tr>
        @endforeach


        </tbody>
      </table>
      <br>
      <br>
      <br>
      
       {{$data->links()}} 
    
</center>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>