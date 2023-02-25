<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @if(session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                    @endif
                    <div class="card-header">
                        <h4>Edit Students Info
                            <a href="{{url('student')}}" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('update_student/'.$student->id)}}" method="post" enctype="multipart/form-data">
                            @csrf 
                            @method('PUT')

                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{$student->name}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Gender</label><br>
                                <input type="radio" name="gender" id="gender" value="male"{{$student->gender == 'male' ? 'checked' : ''}}>Male
                                <input type="radio" name="gender" id="gender" value="female"{{$student->gender == 'female' ? 'checked' : ''}}>Female
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" id="course" class="form-control" value="{{$student->course}}">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Profile Photo</label>
                                <input type="file" name="image" id="image" class="form-control">
                                <img src="{{asset('uploads/students/'.$student->image)}}" width="70px" height="70px" alt="Image">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>