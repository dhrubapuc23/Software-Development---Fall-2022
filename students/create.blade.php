@extends('students.studentmaster')
@section('title','Add New Student')
@section('page-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    @if(session('status'))
                    <h6 class="alert alert-success">{{session('status')}}</h6>
                    @endif
                    <div class="card-header">
                        <h4>Add Students Info
                            <a href="{{url('/')}}/student" class="btn btn-danger float-right">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{url('/')}}/add_student" method="post" enctype="multipart/form-data">
                            @csrf 

                            <div class="form-group mb-3">
                                <label for="">Student Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Gender</label><br>
                                <input type="radio" name="gender" id="gender" value="male">Male
                                <input type="radio" name="gender" id="gender" value="female">Female
                            </div>

                            <div class="form-group mb-3">
                                <label for="">Course</label>
                                <input type="text" name="course" id="course" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Profile Photo</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <button type="submit" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection