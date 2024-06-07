@extends('admin.layouts.masters')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5  bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"> <a href="{{route('admin.dashboard')}}">
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.department.index')}}">Department
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card  bd-highlight">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="py-3 ms-4">Department</h4>
        </div>
        <div>
            <a href="{{ route('admin.department.create') }}">
                <button type="button" class="btn btn-warning mt-3 me-3">Create</button></a>
        </div>
    </div>
</div>
<form action="{{route('admin.department.update', $department)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-3">
                <label>title</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $department->title) }}">

            </div>

            <div class="col-md-6 mb-3">
                <label>title_en</label>
                <input type="text" name="title_en" class="form-control" value="{{ old('title_en', $department->title_en) }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection