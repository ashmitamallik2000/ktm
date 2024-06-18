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
                <h4 class="py-3 ms-4">Law</h4>
            </div>
            <div>
                <a href="{{ route('admin.law.create') }}">
                    <button type="button" class="btn btn-primary mt-3 me-3">Add Law</button></a>
            </div>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col ">S.No</th>
                <th scope="col ">Name</th>
                <th scope="col ">Name-en</th>
                <th scope="col">Document-category</th>
                <th scope="col">Date</th>
                <th scope="col">Photo</th>
                <th scope="col">Position</th>
                <th scope="col">Publisher</th>
                <th scope="col">Action</th>

            </tr>
            @foreach ($laws as $law)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $law->title }}</td>
                <td>{{ $law->title_en}}</td>
                <td>{{ $law->lawCategory?->title}}</td>
                <td>{{ $law->date}}</td>
                <td><iframe src="{{$law->photo}}" frameborder="0"></iframe> </td>
                <td>{{ $law->position}}</td>
                <td>{{ $law->publisher}}</td>
                <td>
                    <div class="d-flex bd-highlight mx-0">
                        <div class="p-2  bd-highlight">
                            <a href="{{ route('admin.law.edit', $law) }}"><i class=" ti ti-pencil "></i></a>
                        </div>
                        <div class="p-2 bd-highlight">
                            <form action="{{ route('admin.law.destroy', $law) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-primary show_confirm border-0 bg-transparent"> <i class="ti ti-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </thead>
    </table>
</div>
@endsection