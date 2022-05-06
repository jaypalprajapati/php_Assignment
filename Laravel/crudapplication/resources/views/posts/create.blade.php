@extends('posts.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> Back</a>
        </div>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>First Name:</strong>
                <input type="text" name="fname" class="form-control" placeholder="Enter Title">
                @if ($errors->has('fname'))
                <span class="text-danger">{{ $errors->first('fname') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Last Name:</strong>
                <input type="text" name="lname" class="form-control" placeholder="Enter Title">
                @if ($errors->has('lname'))
                <span class="text-danger">{{ $errors->first('lname') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Designation:</strong>
                <select name="designation" class="form-control">
                    <option value="">Choose Designation</option>
                    <option value="Jr.Software Devloper">Jr.Software Devloper</option>
                    <option value="Sr.Software Devloper">Sr.Software Devloper</option>
                    <option value="Associate Jr.Software Devloper">Associate Jr.Software Devloper</option>
                    <option value="Business Analyst"> Business Analyst</option>
                </select>
                @if ($errors->has('designation'))
                <span class="text-danger">{{ $errors->first('designation') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group form-control">
                <strong>Gender:</strong>
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="female">Female
                @if ($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group form-control">
                <strong>Subject:</strong>
                <br />
                <input type="checkbox" name="subject[]" value="Math"/>Math
                <br />
                <input type="checkbox" name="subject[]" value="English"/>English
                <br />
                <input type="checkbox" name="subject[]" value="Science"/>Science
                <br />
                <input type="checkbox" name="subject[]" value="History"/>History
                <div>
                @if ($errors->has('subject'))
                <span class="text-danger">{{ $errors->first('subject') }}</span>
                @endif
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:150px" name="description" placeholder="Enter Description"></textarea>
                @if ($errors->has('description'))
                <span class="text-danger">{{ $errors->first('description') }}</span>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>

</form>
@endsection