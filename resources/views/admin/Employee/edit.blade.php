@extends('admin.layouts.masters')
@section('content')
<div class="d-flex  justify-content-between bd-highlight">
  <div class="p-2 bd-highlight">

      <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
           <li class="breadcrumb-item active" aria-current="page">  <a href="{{route('admin.dashboard')}}">
            Home</a></li>
          </ol>
      </nav>
  </div>
  <div class="p-2 ms-5  bd-highlight">
      <nav aria-label="breadcrumb">
          <ol class="breadcrumb me-3">
              <li class="breadcrumb-item"> <a href="{{route('admin.dashboard')}}">
                Home</a></li>
              <li class="breadcrumb-item active" aria-current="page"><a href="{{route('admin.employee.index')}}">Employee
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
          <a href="{{ route('admin.employee.create') }}">
              <button type="button" class="btn btn-primary mt-3 me-3">Add Employee</button></a>
      </div>
  </div>
  </div>
<form action="{{route('admin.employee.update', $employee)}}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div class="container">
<div class="row">
    <div class="col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Name</label>
        <input type="text" name="name" class="form-control border border-dark" value="{{ old('name', $employee->name) }}">

    </div>
    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Name_en</label>
        <input type="text" name="name_en" class="form-control border border-dark" value="{{ old('name_en', $employee->name_en) }}">
    </div>


    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Email</label>
        <input type="email" name="email" class="form-control border border-dark" value="{{ old('email', $employee->email) }}">
    </div>
    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Department</label>
        <select id="department_id" name="department_id" class="bg-white border border-dark fs-5" style="height:39px; width:40rem; border-radius:8px; " value="{{ old('department', $employee->department) }}">
            
          <option value>------------ Choose------------</option>
    
            @foreach ($departments as $department )
            <option value="{{$department->id}}">{{$department->title}}</option>   
            @endforeach
        </select>
    </div>

    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Designation</label>
        <select id="designation_id" name="designation_id" class="bg-white border border-dark fs-5" style="height:39px; width:100%; border-radius:8px;" value="{{ old('designation', $employee->designation) }}">
            
          <option value>------------ Choose------------</option>
    
            @foreach ($designations as $designation )
            <option value="{{$designation->id}}">{{$designation->title}}</option>   
            @endforeach
        </select>
    </div>
    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Phone</label>
        <input type="number" name="phone" class="form-control border border-dark" value="{{ old('phone', $employee->phone) }}">
    </div>
    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Position</label>
        <input type="number" name="position" class="form-control border border-dark" value="{{ old('position', $employee->position) }}">
    </div>

    <div class=" col-md-6 mb-3">
        <label class="fs-6 mb-2 fw-bold">Photo</label>
        <input type="file" name="photo" class="form-control border border-dark">
    </div>

</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection