@extends('admin.layouts.masters')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
    <div class="p-2 bd-highlight">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('admin.dashboard') }}">
                        Home</a></li>
            </ol>
        </nav>
    </div>
    <div class="p-2 ms-5  bd-highlight">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb me-3">
                <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                        Home</a></li>
                <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.employee.index') }}">Employee
                    </a></li>
            </ol>
        </nav>
    </div>
</div>
<div class="card  bd-highlight">
    <div class="d-flex justify-content-between">
        <div>
            <h4 class="py-3 ms-4">Employee</h4>
        </div>
        <div>
            <a href="{{ route('admin.employee.index') }}">
                <button type="button" class="btn btn-primary mt-3 me-3">Employee List</button></a>
        </div>
    </div>
</div>
<!-- 
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif -->
<div class="card">
    <div class="container">
        <form action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12 my-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control border border-2">

                </div>
                <div class=" col-md-12 my-3">
                    <label>Name-en</label>
                    <input type="text" name="name_en" class="form-control border border-2">
                </div>


                <div class=" col-md-12 my-3">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control border border-2">
                </div>
                <div class=" col-md-6 my-3">
                    <label>Department</label>
                    <select id="department_id" name="department_id" class="bg-white border border-2 " style="height:39px; width:100%; border-radius:8px; ">

                        <option value>Choose------------</option>

                        @foreach ($departments as $department )
                        <option value="{{$department->id}}">{{$department->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class=" col-md-6 my-3">
                    <label>Designation</label>
                    <select id="designation_id" name="designation_id" class="bg-white border border-2 " style="height:39px; width:100%; border-radius:8px; ">

                        <option value>------------ Choose------------</option>

                        @foreach ($designations as $designation )
                        <option value="{{$designation->id}}">{{$designation->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class=" col-md-6 my-3">
                    <label>Phone</label>
                    <input name="phone" class="form-control border border-2 ">
                </div>
                <div class=" col-md-6 my-3">
                    <label>Position</label>
                    <input type="number" name="position" class="form-control border border-2">
                </div>

                <div class=" col-md-6 my-3">
                    <label>Photo</label>
                    <input type="file" name="photo" class="form-control border border-2">
                </div>

            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>
        </form>
    </div>
</div>
@endsection