@extends('admin.layouts.masters')
@section('content')
<div class="container ">
    <div class="d-flex justify-content-between bd-highlight">
        <div class="p-2 bd-highlight">

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page"> <a href="{{ route('admin.dashboard') }}">
                            Home</a></li>
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
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col ">S.No</th>
                <th scope="col ">Name</th>
                <th scope="col ">Name-en</th>
                <th scope="col">Email</th>
                <th scope="col">Department</th>
                <th scope="col">Designation</th>
                <th scope="col">Phone</th>
                <th scope="col">Position</th>
                <th scope="col">Photo</th>
                <th scope="col">Action</th>

            </tr>
            @foreach ($employees as $employee)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->name_en}}</td>
                <td>{{ $employee->email}}</td>
                <td>{{ $employee->department?->title}}</td>
                <td>{{ $employee->designation?->title}}</td>
                <td>{{ $employee->phone }}</td>
                <td>{{ $employee->position }}</td>
                <td><img src="{{ $employee->photo }}" width="100" height="100"></td>

                <td>
                    <div class="d-flex bd-highlight mx-0">
                        <div class="p-2  bd-highlight">
                            <a href="{{ route('admin.employee.edit', $employee) }}"><i class=" ti ti-pencil "></i></a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form action="{{ route('admin.employee.destroy', $employee) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-primary show_confirm border-0 bg-transparent"> <i class="ti ti-trash"></i>
                                </button>
                            </form>
                        </div>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
</div>
@endsection